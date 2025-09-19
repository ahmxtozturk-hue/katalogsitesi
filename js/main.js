document.addEventListener('DOMContentLoaded', () => {

    gsap.registerPlugin(ScrollTrigger);

    // --- GENEL ANİMASYONLAR ---
    const animatedItems = gsap.utils.toArray('.content-item');
    animatedItems.forEach(item => {
        gsap.fromTo(item,
            { opacity: 0, y: 50 },
            {
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse',
                }
            }
        );
    });

    // --- SABİTLENEN BÖLÜM ANİMASYONU (DÜZELTİLMİŞ) ---
    const pinnedSection = document.querySelector('.pinned-section');
    if (pinnedSection) {
        const textSlides = gsap.utils.toArray('.text-slide');
        const image = document.querySelector('.scroll-image');

        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: '.pinned-section',
                pin: '.pinned-content',
                scrub: true, // Use boolean true for direct mapping
                start: 'top top',
                end: () => `+=${textSlides.length * 1000}`, // Provide ample scroll distance for each slide
            }
        });

        // Loop through slides starting from the second one
        textSlides.forEach((slide, index) => {
            if (index === 0) return; // Skip the first slide as it's the initial state

            const previousSlide = textSlides[index - 1];

            tl
            // Add a delay before the next transition starts
            .addLabel(`slide-${index}`)
            // Animate out the previous slide's text
            .to(previousSlide, { opacity: 0, y: -20, duration: 0.3 }, `slide-${index}`)
            // Animate in the new slide's text
            .to(slide, { opacity: 1, y: 0, duration: 0.3 }, `slide-${index}`)
            // Simultaneously, fade out the image
            .to(image, { opacity: 0.3, duration: 0.2, ease: 'power1.in' }, `slide-${index}`)
            // Change the image source attribute at the right moment
            .set(image, { attr: { src: slide.dataset.img } })
            // And fade the new image back in
            .to(image, { opacity: 1, duration: 0.2, ease: 'power1.out' })
            // Add a pause to let the user see the new state
            .to({}, {duration: 1});
        });
    }
});
