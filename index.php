<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="icon" type="image/svg+xml" href="https://katalog.gunesegel.net/assets/images/favicon.svg">
    <title>Solis Bilezik | Katalog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/basicLightbox/5.0.4/basicLightbox.min.css">
    <style>
        :root {
            --primary-color: #FFFFFF;
            --secondary-color: #D4AF37;
            --dark-color: #000000;
            --light-color: #EAEAEA;
            --accent-color: #ffd700;
            --card-bg-color: rgba(10, 10, 10, 0.5);
            --border-color: rgba(212, 175, 55, 0.2);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        body {
            background-color: var(--dark-color);
            background-image: url('arkaplan.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--light-color);
            overflow-x: hidden;
            padding-bottom: 60px;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(10, 10, 26, 0.9), rgba(10, 10, 26, 0.8));
            z-index: -1;
        }

        .neon-border {
            position: fixed;
            z-index: 1000;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            opacity: 0.7;
            box-shadow: 0 0 10px var(--primary-color);
            animation: neonGlow 3s ease-in-out infinite;
        }
        
        header.header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            height: 100px;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .logo-divider {
            width: 2px;
            height: 60px;
            background: linear-gradient(to bottom, transparent, var(--secondary-color), transparent);
        }

        .logo-container img {
    height: 68px;
    filter: drop-shadow(0 0 5px var(--secondary-color));
}

.logosolis {
    height: 120px !important;
}

        .neon-top {
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
        }

        .neon-right {
            top: 0;
            right: 0;
            width: 2px;
            height: 100%;
        }

        .neon-bottom {
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
        }

        .neon-left {
            top: 0;
            left: 0;
            width: 2px;
            height: 100%;
        }

        @keyframes neonGlow {
            0%, 100% {
                opacity: 0.5;
            }
            50% {
                opacity: 0.8;
            }
        }

        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--dark-color);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }

        .loader-logo {
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        .loader-text {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
        }

        .progress-container {
            width: 250px;
            height: 3px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            overflow: hidden;
            margin-top: 15px;
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        @keyframes pulse {
            0% { transform: scale(0.95); opacity: 0.8; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(0.95); opacity: 0.8; }
        }

        .loaded .loader-container {
            opacity: 0;
            pointer-events: none;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            width: 100%;
            top: 0;
            z-index: 100;
            background: rgba(10, 10, 26, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
            position: relative;
        }

        .header::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
        }
        
        .loaded .header {
            opacity: 1;
            transform: translateY(0);
        }
        
        .categories-nav {
            background: rgba(20, 20, 40, 0.8);
            backdrop-filter: blur(10px);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 90;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }
        
        .categories-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
            padding: 0 15px;
        }
        
        .category-link {
            padding: 8px 16px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            font-size: 0.9rem;
        }
        
        .category-link:hover, .category-link.active {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--dark-color);
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(212, 175, 55, 0.4);
            border-color: var(--primary-color);
        }
        
        .search-filter-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 15px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }
        
        .search-box {
            flex: 1;
            min-width: 280px;
            max-width: 450px;
            position: relative;
        }
        
        .search-box input {
            width: 100%;
            padding: 10px 16px;
            border-radius: 25px;
            border: none;
            background: rgba(255, 255, 255, 0.15);
            color: white;
            font-size: 0.95rem;
            padding-right: 45px;
            transition: all 0.3s ease;
            border: 1px solid rgba(212, 175, 55, 0.3);
            backdrop-filter: blur(5px);
        }
        
        .search-box input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.4);
        }
        
        .search-box input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .search-box button {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: var(--secondary-color);
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .search-box button:hover {
            color: var(--primary-color);
            transform: translateY(-50%) scale(1.1);
        }
        
        .categories-grid {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 15px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }
        
        .category-card {
            background: var(--card-bg-color);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            transform: translateZ(0);
            will-change: transform;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            border-color: var(--secondary-color);
        }

        .category-image-container {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f8f8;
            position: relative;
            overflow: hidden;
        }

        .category-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .category-card:hover .category-image {
            transform: scale(1.05);
        }

        .category-info {
            padding: 15px;
            text-align: center;
        }

        .category-title {
            font-size: 1.1rem;
            color: white;
            font-weight: 600;
        }
        
        .products-container {
            max-width: 1400px;
            margin: 20px auto 40px;
            padding: 0 15px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease 0.2s, transform 0.5s ease 0.2s;
            position: relative;
            display: none;
        }

        .loaded .products-container {
            opacity: 1;
            transform: translateY(0);
        }

        .products-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .products-header h1 {
            font-size: clamp(1.8rem, 5vw, 3rem);
            margin-bottom: 12px;
            color: white;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            padding: 0 10px;
        }
        
        .products-header p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .product-card {
            background: var(--card-bg-color);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            transform: translateZ(0);
            will-change: transform;
        }

        .product-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            border-color: var(--secondary-color);
        }

        .product-image-container {
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.05);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .product-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--dark-color);
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: bold;
            z-index: 2;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .product-info {
            padding: 15px;
        }

        .product-title {
            font-size: 1rem;
            margin-bottom: 8px;
            color: var(--light-color);
            font-weight: 600;
            height: 48px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .product-code {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 8px;
        }

        .product-price {
            font-size: 1.1rem;
            font-weight: bold;
            color: var(--secondary-color);
            margin-bottom: 12px;
        }

        .product-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-button {
            background: var(--secondary-color);
            color: var(--dark-color);
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            text-align: center;
            font-size: 0.9rem;
        }

        .product-button:hover {
            background: var(--primary-color);
            color: var(--dark-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.4);
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 8px;
        }

        .page-item {
            list-style: none;
        }

        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(212, 175, 55, 0.2);
            font-size: 0.9rem;
        }

        .page-link:hover {
            background: var(--secondary-color);
            color: var(--dark-color);
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(212, 175, 55, 0.3);
        }

        .page-link.active {
            background: var(--secondary-color);
            color: var(--dark-color);
            box-shadow: 0 0 8px var(--secondary-color);
        }

        .page-link.disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        .footer {
            text-align: center;
            padding: 25px 10px;
            margin-top: 40px;
            background: rgba(10, 10, 26, 0.8);
            border-top: 1px solid rgba(212, 175, 55, 0.2);
            position: relative;
            backdrop-filter: blur(10px);
        }

        .footer::before {
            content: '';
            position: absolute;
            top: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
        }

        .footer-text {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 8px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 12px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.85rem;
        }

        .footer-links a:hover {
            color: var(--secondary-color);
        }

        @media (max-width: 1200px) {
            .products-grid, .categories-grid {
                grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .product-image-container, .category-image-container {
                height: 200px;
            }
            
            .products-grid, .categories-grid {
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
    .logo-container img {
        height: 68px;
    }
    
    .logosolis {
        height: 120px !important;
    }
            
            .logo-container img {
                height: 45px;
            }
            
            .logo-divider {
                height: 40px;
            }
            
            .products-header, .categories-header {
                margin-bottom: 25px;
            }
            
            .products-grid, .categories-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
            }

            .product-image-container, .category-image-container {
                height: 180px;
            }

            .neon-border {
                display: none;
            }
            
            .search-filter-container {
                flex-direction: column;
                align-items: center;
            }
            
            .search-box, .filter-dropdown {
                width: 100%;
                max-width: 100%;
            }
            
            .categories-container {
                overflow-x: auto;
                justify-content: flex-start;
                padding-bottom: 8px;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            
            .categories-container::-webkit-scrollbar {
                display: none;
            }
            
            .header {
                padding: 10px 15px;
                height: 80px;
            }
        }

        @media (max-width: 576px) {
            .products-grid, .categories-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 12px;
            }

            .product-image-container, .category-image-container {
                height: 160px;
            }

            .product-info, .category-info {
                padding: 12px;
            }

            .product-title, .category-title {
                font-size: 0.9rem;
                height: 40px;
            }

            .product-price {
                font-size: 1rem;
            }
            
            .product-button {
                padding: 6px 12px;
                font-size: 0.85rem;
            }

            .pagination {
                flex-wrap: wrap;
            }
            
            .category-link {
                padding: 6px 12px;
                font-size: 0.85rem;
                white-space: nowrap;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 8px;
            }
            
            .search-box {
                min-width: unset;
            }
            
            .loader-logo {
                width: 80px;
                height: 80px;
            }
            
            .loader-text {
                font-size: 1.2rem;
            }
        }

        .loading-text, .no-products, .error-message {
            text-align: center;
            font-size: 1.1rem;
            color: var(--primary-color);
            grid-column: 1 / -1;
            padding: 30px 15px;
        }
        
        .categories-header {
            text-align: center;
            margin: 30px 0;
        }
        
        .categories-header h1 {
            font-size: clamp(1.8rem, 5vw, 3rem);
            margin-bottom: 12px;
            color: white;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            padding: 0 10px;
        }
        
        .categories-header p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 15px;
            font-size: 1rem;
        }
        
        .product-card, .category-card, .category-link, .page-link {
            transform: translateZ(0);
            backface-visibility: hidden;
            perspective: 1000px;
        }
    </style>
</head>
<body>

    <div class="loader-container" id="loader">
        <div class="loader-text">Yükleniyor...</div>
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
    </div>

    <header class="header">
        <div class="logo-container">
            <img src="guneslogo.png" alt="Güneş Kuyumculuk" class="logo">
            <div class="logo-divider"></div>
            <img src="solislogo.png" alt="Solis Bilezik" class="logosolis">
        </div>
    </header>

    <nav class="categories-nav" id="categoriesNav">
        <div class="categories-container" id="categoriesContainer">
            <a href="javascript:void(0)" class="category-link active" onclick="location.reload();">
    Ana Sayfa
</a>
            <a href="#" class="category-link" data-category="yuzuk">
                Yüzük
            </a>
            <a href="#" class="category-link" data-category="ajda">
                Ajda
            </a>
            <a href="#" class="category-link" data-category="burma">
                Burma
            </a>
            <a href="#" class="category-link" data-category="mega">
                Mega
            </a>
        </div>
    </nav>

    <div class="search-filter-container">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Ürün adı veya stok kodu ara...">
            <button id="searchButton"><i class="fas fa-search"></i></button>
        </div>
    </div>

    <div id="categoriesView">
        <div class="categories-header">
            <h1>Kategoriler</h1>
            <p>İstediğiniz kategoriyi seçerek ürünleri görüntülemeye başlayın.</p>
        </div>
        
        <div class="categories-grid" id="categoriesGrid">
            <div class="category-card" data-category="yuzuk" data-aos="fade-up">
                <div class="category-image-container">
                    <img src="alyans.png" alt="Yüzük" class="category-image">
                </div>
                <div class="category-info">
                    <h3 class="category-title">Yüzük</h3>
                </div>
            </div>
            
            <div class="category-card" data-category="ajda" data-aos="fade-up" data-aos-delay="100">
                <div class="category-image-container">
                    <img src="ajda.png" alt="Ajda" class="category-image">
                </div>
                <div class="category-info">
                    <h3 class="category-title">Ajda</h3>
                </div>
            </div>

            
            <div class="category-card" data-category="burma" data-aos="fade-up" data-aos-delay="200">
                <div class="category-image-container">
                    <img src="burma.png" alt="Burma" class="category-image">
                </div>
                <div class="category-info">
                    <h3 class="category-title">Burma</h3>
                </div>
            </div>
            
            <div class="category-card" data-category="mega" data-aos="fade-up" data-aos-delay="300">
                <div class="category-image-container">
                    <img src="mega.png" alt="Mega" class="category-image">
                </div>
                <div class="category-info">
                    <h3 class="category-title">Mega</h3>
                </div>
            </div>
            
        </div>
    </div>

    <div class="products-container" id="productsView">
        <div class="products-header">
            <h1><span class="solis">SOLİS</span> <span class="doviz">BİLEZİK</span></h1>
            <p>Kalitenin ve şıklığın en özel hali</p>
        </div>
        
        <div class="products-grid" id="productsGrid">
        </div>
        
        <ul class="pagination" id="pagination">
        </ul>
    </div>
    
    <footer class="footer">
        <p class="footer-text"> <span id="currentYear"></span></p>
        <div class="footer-links">
            <a href="https://guneskuyumculuk.com.tr/" target="_blank">Online Alışveriş Sitesi</a>
        </div>
    </footer>

    <div class="neon-border neon-top"></div>
    <div class="neon-border neon-right"></div>
    <div class="neon-border neon-bottom"></div>
    <div class="neon-border neon-left"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/basicLightbox/5.0.4/basicLightbox.min.js"></script>
    <script>
    function clearAllCookies() {
        document.cookie.split(";").forEach(function(c) {
            document.cookie = c.trim().split("=")[0] + "=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
        });
    }
    
    function getCategorySearchTerm(category) {
        const categoryMap = {
            'bilezik': 'bilezik',
            'yuzuk': 'alyans',
            'ajda': 'ajda bilezik',
            'basak': 'başak bilezik', 
            'burma': 'burma bilezik',
            'kibrit': 'kibrit bilezik',
            'mega': 'mega bilezik',
            'orme': 'örme bilezik'
        };
        
        return categoryMap[category] || '';
    }

    window.onload = function() {
        clearAllCookies();
        
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
        });

        const loader = document.getElementById('loader');
        const progressBar = document.getElementById('progressBar');
        const body = document.body;
        
        let progress = 0;
        const interval = setInterval(() => {
            progress += 5;
            progressBar.style.width = progress + '%';
            
            if (progress >= 100) {
                clearInterval(interval);
                loader.classList.add('loaded');
                body.classList.add('loaded');
                
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }
        }, 20);
        
        // Sayfa içeriğini yükleme animasyonu
        setTimeout(() => {
            document.querySelector('.header').style.opacity = '1';
            document.querySelector('.header').style.transform = 'translateY(0)';
        }, 300);

        // Varsayılan olarak kategorileri göster
        document.getElementById('categoriesView').style.display = 'block';
        document.getElementById('productsView').style.display = 'none';
        
        // Yıl bilgisini güncelle
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        
        // Arama butonu event listener
        document.getElementById('searchButton').addEventListener('click', function() {
            const searchTerm = document.getElementById('searchInput').value;
            showProductsView();
            fetchProducts(1, searchTerm);
        });
        
        // Enter tuşu ile arama
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = document.getElementById('searchInput').value;
                showProductsView();
                fetchProducts(1, searchTerm);
            }
        });
        
        // Kategori linklerine tıklama olaylarını ekle
        document.querySelectorAll('.category-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Tüm kategori linklerinden active sınıfını kaldır
                document.querySelectorAll('.category-link').forEach(l => {
                    l.classList.remove('active');
                });
                
                // Tıklanan linke active sınıfını ekle
                this.classList.add('active');
                
                // Kategoriyi belirle ve arama yap (data-category attribute'undan al)
                const category = this.getAttribute('data-category') || '';
                const searchTerm = getCategorySearchTerm(category);
                
                // Arama kutusunu güncelle
                document.getElementById('searchInput').value = searchTerm;
                
                // Ürünler görünümünü göster ve ürünleri getir
                showProductsView();
                fetchProducts(1, searchTerm);
            });
        });
        
        // Kategori kartlarına tıklama olaylarını ekle
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('click', function() {
                const category = this.getAttribute('data-category') || '';
                const searchTerm = getCategorySearchTerm(category);
                
                // İlgili kategori linkini aktif yap
                document.querySelectorAll('.category-link').forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('data-category') === category) {
                        link.classList.add('active');
                    }
                });
                
                // Arama kutusunu güncelle
                document.getElementById('searchInput').value = searchTerm;
                
                // Ürünler görünümünü göster ve ürünleri getir
                showProductsView();
                fetchProducts(1, searchTerm);
            });
        });
    };
    
    // Ürünler görünümünü göster
    function showProductsView() {
        document.getElementById('categoriesView').style.display = 'none';
        document.getElementById('productsView').style.display = 'block';
    }
    
    // Kategoriler görünümünü göster
    function showCategoriesView() {
        document.getElementById('productsView').style.display = 'none';
        document.getElementById('categoriesView').style.display = 'block';
    }

    // API'den ürün verilerini çekme fonksiyonu
    function fetchProducts(page = 1, searchTerm = '') {
        const productsGrid = document.getElementById('productsGrid');
        const pagination = document.getElementById('pagination');
        
        // Yükleme durumunu göster
        productsGrid.innerHTML = '<div class="loading-text">Ürünler yükleniyor...</div>';
        
        let url = `data/?page=${page}`;
        
        if (searchTerm) {
            url += `&search=${encodeURIComponent(searchTerm)}`;
        }
        
        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Ürünleri render et
                    renderProducts(data.data.products);
                    
                    // Sayfalama linklerini oluştur
                    renderPagination(page, data.data.total_pages, searchTerm);
                } else {
                    productsGrid.innerHTML = '<div class="no-products">Ürün bulunamadı.</div>';
                }
            })
            .catch(error => {
                console.error('Ürünler yüklenirken hata:', error);
                productsGrid.innerHTML = '<div class="error-message">Ürünler yüklenirken bir hata oluştu.</div>';
            });
    }

    // Ürünleri HTML'e render etme fonksiyonu
    function renderProducts(products) {
        const productsGrid = document.getElementById('productsGrid');
        
        if (products.length === 0) {
            productsGrid.innerHTML = '<div class="no-products" data-aos="fade-in">Aradığınız kriterlere uygun ürün bulunamadı.</div>';
            return;
        }
        
        productsGrid.innerHTML = products.map((product, index) => {
            const originalImageSrc = `https://katalog.gunesegel.net/resimler/${Array.isArray(product.resim) ? product.resim[0] : product.resim}`;
            const compressedImageSrc = `https://images.weserv.nl/?url=${encodeURIComponent(originalImageSrc)}&w=600&webp&q=60`;

            return `
            <div class="product-card" data-aos="fade-up" data-aos-delay="${(index % 4) * 100}">
                ${product.indirim > 0 ? `<div class="product-badge">-%${product.indirim}</div>` : ''}
                <div class="product-image-container" data-original-src="${originalImageSrc}">
                    <img src="${compressedImageSrc}"
                         alt="${product.urun_adi}"
                         class="product-image"
                         onerror="this.src='https://via.placeholder.com/300x300/f8f8f8/999999?text=Resim+Yok'">
                </div>
                <div class="product-info">
                    <h3 class="product-title">${product.urun_adi}</h3>
                    <div class="product-code">Stok Kodu: ${product.stok_kodu}</div>
                    <div class="product-actions">
                        <button class="product-button" onclick="window.location.href='urun/?kod=${product.stok_kodu}'">Detaylar</button>
                    </div>
                </div>
            </div>
        `}).join('');

        // Add lightbox functionality to new product images
        document.querySelectorAll('.product-image-container').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                const originalSrc = item.getAttribute('data-original-src');
                if (originalSrc) {
                    basicLightbox.create(`<img src="${originalSrc}">`).show();
                }
            });
        });

        // After rendering, refresh AOS to detect new elements
        setTimeout(() => {
            AOS.refresh();
        }, 100);
    }

    // Sayfalama linklerini oluşturma fonksiyonu
    function renderPagination(currentPage, totalPages, searchTerm = '') {
        const pagination = document.getElementById('pagination');
        
        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }
        
        let paginationHTML = '';
        
        // Önceki sayfa butonu
        if (currentPage > 1) {
            paginationHTML += `
                <li class="page-item">
                    <a href="#" class="page-link" onclick="fetchProducts(${currentPage - 1}, '${searchTerm}'); return false;">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
            `;
        }
        
        // Sayfa numaraları
        const maxVisiblePages = 5;
        let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
        
        if (endPage - startPage + 1 < maxVisiblePages) {
            startPage = Math.max(1, endPage - maxVisiblePages + 1);
        }
        
        if (startPage > 1) {
            paginationHTML += `
                <li class="page-item">
                    <a href="#" class="page-link" onclick="fetchProducts(1, '${searchTerm}'); return false;">1</a>
                </li>
                ${startPage > 2 ? '<li class="page-item"><span class="page-link">...</span></li>' : ''}
            `;
        }
        
        for (let i = startPage; i <= endPage; i++) {
            paginationHTML += `
                <li class="page-item">
                    <a href="#" class="page-link ${i === currentPage ? 'active' : ''}" onclick="fetchProducts(${i}, '${searchTerm}'); return false;">
                        ${i}
                    </a>
                </li>
            `;
        }
        
        if (endPage < totalPages) {
            paginationHTML += `
                ${endPage < totalPages - 1 ? '<li class="page-item"><span class="page-link">...</span></li>' : ''}
                <li class="page-item">
                    <a href="#" class="page-link" onclick="fetchProducts(${totalPages}, '${searchTerm}'); return false;">${totalPages}</a>
                </li>
            `;
        }
    
        if (currentPage < totalPages) {
            paginationHTML += `
                <li class="page-item">
                    <a href="#" class="page-link" onclick="fetchProducts(${currentPage + 1}, '${searchTerm}'); return false;">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            `;
        }
        
        pagination.innerHTML = paginationHTML;
    }
</script>
</body>
</html>
