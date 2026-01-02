<!-- Banner with Swiper -->
<div class="h-[50vh] md:h-screen overflow-hidden relative">
    <!-- Swiper Container -->
    <div class="swiper bannerSwiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="banner-slide h-full bg-cover bg-center"
                    style="background-image: url({{ asset('Images/home/home1.jpg') }});">
                    <div class="absolute inset-0 bg-black/35"></div>
                    <div class="relative z-10 h-full">
                        <div class="flex flex-col items-center justify-center h-full w-full text-center px-4">
                            <span class="banner_kicker">
                                Explore The
                            </span>
                            <div class="trv-banner-3-text-mid">
                                <h1 class="banner_headline">
                                    Authentic Egypt
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="banner-slide h-full bg-cover bg-center"
                    style="background-image: url({{ asset('Images/home/home2.jpg') }});">
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="relative z-10 h-full">
                        <div class="flex flex-col items-center justify-center h-full w-full text-center px-4">
                            <span class="banner_kicker">
                                Discover
                            </span>
                            <div class="trv-banner-3-text-mid">
                                <h1 class="banner_headline">
                                    Ancient Wonders
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="banner-slide h-full bg-cover bg-center"
                    style="background-image: url({{ asset('Images/home/home3.webp') }});">
                    <div class="absolute inset-0 bg-black/35"></div>
                    <div class="relative z-10 h-full">
                        <div class="flex flex-col items-center justify-center h-full w-full text-center px-4">
                            <span class="banner_kicker">
                                Experience
                            </span>
                            <div class="trv-banner-3-text-mid">
                                <h1 class="banner_headline">
                                    Timeless Beauty
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Custom Styles & Initialization -->
<style>
    /* Ken Burns zoom-out effect */
    .banner-slide {
        animation: kenBurns 6s ease-out forwards;
        transform-origin: center center;
    }

    @keyframes kenBurns {
        0% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Reset animation when slide becomes active */
    .swiper-slide-active .banner-slide {
        animation: kenBurns 6s ease-out forwards;
    }

    /* Pagination styling - Travco Red Theme */
    .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.5);
        width: 12px;
        height: 12px;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: #e60000;
        width: 40px;
        border-radius: 6px;
        transition: width 0.3s ease;
    }

    /* Navigation buttons */
    .swiper-button-prev,
    .swiper-button-next {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .bannerSwiper:hover .swiper-button-prev,
    .bannerSwiper:hover .swiper-button-next {
        opacity: 1;
    }

    /* Make navigation smaller on mobile */
    @media (max-width: 768px) {

        .swiper-button-prev,
        .swiper-button-next {
            display: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const bannerSwiper = new Swiper('.bannerSwiper', {
            // Loop through slides infinitely
            loop: true,

            // Autoplay configuration
            autoplay: {
                delay: 3000, // 3 seconds between transitions
                disableOnInteraction: false, // Continue autoplay after user interaction
                pauseOnMouseEnter: true, // Pause when hovering
            },

            // Effect and transition
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },

            // Speed of transition
            speed: 1000,

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Keyboard control
            keyboard: {
                enabled: true,
            },

            // Grab cursor
            grabCursor: true,
        });
    });
</script>
<!-- Banner with Swiper -->