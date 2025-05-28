@extends('index')

@section('content')
    @include('layouts.navbar')

    <div class="image-gallery">
        <div class="image-gallery-item" onclick="showFullscreen(this)" data-route="/gallery">
            <img src="{{ asset('img/main-page/gallery01.jpg') }}" alt="Галерея" loading="lazy">
            <div class="image-caption">Художественная галерея</div>
        </div>
        <div class="image-gallery-item" onclick="showFullscreen(this)" data-route="/about">
            <img src="{{ asset('img/main-page/baget01.jpg') }}" alt="Багетная мастерская" loading="lazy">
            <div class="image-caption">Багетная мастерская</div>
        </div>
        <div class="image-gallery-item" onclick="showFullscreen(this)" data-route="/market">
            <img src="{{ asset('img/main-page/market01.jpg') }}" alt="Магазин" loading="lazy">
            <div class="image-caption">Магазин материалов</div>
        </div>
        <div class="image-gallery-item" onclick="showFullscreen(this)" data-route="/print">
            <img src="{{ asset('img/main-page/print01.jpg') }}" alt="Печать" loading="lazy">
            <div class="image-caption">Услуги печати</div>
        </div>
    </div>


    <!-- Десктопный карусель -->
    <div class="fullscreen-carousel swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-href="{{ route('gallery') }}">
                <img src="{{ asset('img/main-page/carousel/gallery.jpg') }}" alt="Художественная галерея"
                     loading="lazy">
                <div class="caption">Художественная галерея</div>
            </div>
            <div class="swiper-slide" data-href="{{ route('about') }}">
                <img src="{{ asset('img/main-page/carousel/baget.jpg') }}" alt="Багетная мастерская" loading="lazy">
                <div class="caption">Багетная мастерская</div>
            </div>
            <div class="swiper-slide" data-href="{{ route('market') }}">
                <img src="{{ asset('img/main-page/carousel/market.jpg') }}" alt="Магазин" loading="lazy">
                <div class="caption">Магазин материалов</div>
            </div>
            <div class="swiper-slide" data-href="{{ route('print') }}">
                <img src="{{ asset('img/main-page/carousel/print.jpg') }}" alt="Печать" loading="lazy">
                <div class="caption">Услуги печати</div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <style>
        @keyframes swipeUpHint {
            0% {
                opacity: 0;
                transform: translate(-50%, 40px);
            }
            40% {
                opacity: 1;
                transform: translate(-50%, 0px);
            }
            80% {
                opacity: 1;
                transform: translate(-50%, -5px);
            }
            100% {
                opacity: 0;
                transform: translate(-50%, -15px);
            }
        }
    </style>



    <div id="swipeHint" style="
    display: none;
    position: fixed; /* absolute emas */
    bottom: 100px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    background: #5071b9;
    font-size: 18px;
    font-weight: 700;
    padding: 14px 28px;
    border-radius: 30px;
    box-shadow: 0 0 20px rgba(255, 64, 129, 0.6);
    z-index: 9999;
    animation: swipeUpHint 1.5s ease-out forwards;
">
        👆 Проведите пальцем вверх
    </div>

    <!-- Полноэкранный просмотр -->
    <div class="fullscreen-overlay" id="fullscreenOverlay">
        <span class="close-btn" onclick="hideFullscreen()">&times;</span>
        <img class="fullscreen-img" id="fullscreenImage">
        <div class="fullscreen-caption" id="fullscreenCaption"></div>
    </div>

    <!-- Подключаем Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Инициализация Swiper только на десктопе
        document.addEventListener('DOMContentLoaded', function () {
            if (window.innerWidth >= 768) {
                const carousel = new Swiper('.fullscreen-carousel', {
                    loop: true,
                    speed: 800,
                    effect: 'slide',
                    grabCursor: true,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: false
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    preloadImages: false,
                    lazy: {
                        loadPrevNext: true,
                    }
                });

                // Ссылка при клике по слайду
                document.querySelectorAll('.swiper-slide').forEach(slide => {
                    slide.addEventListener('click', function () {
                        const href = this.getAttribute('data-href');
                        if (href) {
                            window.location.href = href;
                        }
                    });
                });
            }
        });
    </script>

    <script>
        let touchStartY = 0;
        let touchEndY = 0;
        let targetRoute = "";
        let hintShownOnce = false;

        function showFullscreen(element) {
            if (window.innerWidth >= 768) return;

            const img = element.querySelector('img');
            const caption = element.querySelector('.image-caption');
            targetRoute = element.getAttribute('data-route');

            document.getElementById('fullscreenImage').src = img.src;
            document.getElementById('fullscreenImage').alt = img.alt;
            document.getElementById('fullscreenCaption').textContent = caption.textContent;
            document.getElementById('fullscreenOverlay').style.display = 'flex';
            document.body.style.overflow = 'hidden';

            if (!hintShownOnce) {
                const hint = document.getElementById('swipeHint');
                hint.style.display = 'block';
                hintShownOnce = true;

                // 3 soniyadan so‘ng g‘oyib bo‘ladi
                setTimeout(() => {
                    hint.style.display = 'none';
                }, 3000);
            }
        }

        function hideFullscreen() {
            document.getElementById('fullscreenOverlay').style.display = 'none';
            document.body.style.overflow = 'auto';
            targetRoute = "";
        }

        document.getElementById('fullscreenOverlay').addEventListener('click', function (e) {
            if (e.target === this) {
                hideFullscreen();
            }
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth >= 768) {
                hideFullscreen();
            }
        });

        document.getElementById('fullscreenOverlay').addEventListener('touchstart', function (e) {
            touchStartY = e.changedTouches[0].screenY;
        }, false);

        document.getElementById('fullscreenOverlay').addEventListener('touchend', function (e) {
            touchEndY = e.changedTouches[0].screenY;
            handleGesture();
        }, false);

        function handleGesture() {
            const swipeDistance = touchStartY - touchEndY;
            if (swipeDistance > 50 && targetRoute) {
                document.getElementById('swipeHint').style.display = 'none';
                window.location.href = targetRoute;
            }
        }
    </script>


    @include('layouts.about')
    @include('layouts.project')
    @include('layouts.faq')
@endsection
