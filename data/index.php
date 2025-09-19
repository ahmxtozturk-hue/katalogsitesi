<?php
header('Content-Type: application/json');

// Veritabanı bağlantısı
$host = 'localhost';
$db_name = 'gunesege_katalog';
$username = 'gunesege_admintabela';
$password = 'A22_2n34A1134i!';

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // GET parametrelerini al
    $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 20;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $kategori = isset($_GET['kategori']) ? $_GET['kategori'] : null;
    $search = isset($_GET['search']) ? $_GET['search'] : null;

    // Query parametrelerini hazırla
    $queryParams = [
        'page' => $page,
        'limit' => $limit
    ];

    // Eğer kategori varsa ekle
    if ($kategori !== null) {
        $queryParams['kategori'] = $kategori;
    }
    
    if ($search !== null) {
        $queryParams['search'] = $search;
    }

    // URL oluştur
    $url = 'http://82.153.241.79:9010/api/urunler?' . http_build_query($queryParams);

    // cURL ile isteği gönder
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json'
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        throw new Exception('CURL hatası: ' . curl_error($ch));
    }

    curl_close($ch);

    // Yanıtı ilet
    http_response_code($httpCode);
    echo $response;

} catch (PDOException $e) {
    error_log("Veritabanı hatası: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Veritabanı hatası oluştu'
    ]);
} catch (Exception $e) {
    error_log("Genel hata: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Bir hata oluştu: ' . $e->getMessage()
    ]);
}
?>
