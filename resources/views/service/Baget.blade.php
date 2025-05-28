@extends('index')
@section('content')
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="" class="navbar-brand d-flex align-items-center p-0">
                    <img src="{{ asset('logo/artmixmaster_logo2.svg') }}" alt="Logo" style="height: 60px;" class="me-2">
                    <h3 class="text-primary m-0">ARTMIX-MASTER</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link">Главная страница</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">О нас</a>
                        <a href="{{route('service')}}" class="nav-item nav-link active">Услуги</a>
                        <a href="{{route('projects')}}" class="nav-item nav-link ">Проекты</a>
                        <a href="{{route('blog')}}" class="nav-item nav-link">Наш блог</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Контакт</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"></h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная страница</a></li>
                <li class="breadcrumb-item"><a href="{{route('service')}}">Услуги</a></li>
                <li class="breadcrumb-item active text-primary">Наш Багет</li>
            </ol>
        </div>
    </div>
    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="carousel-wrapper">
                <div class="about-carousel">
                    <div class="about-slide active">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 col-xl-5">
                                <div class="about-img">
                                    <img src="img/artmix-about.jpg" class="img-about rounded-top bg-white" alt="Image">
                                    <img src="img/artmix-about2.jpg" class="img-about2 rounded-bottom" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <h4 class="text-primary">О нас</h4>
                                <h3 class="display-5 mb-4">1 Самая престижная компания в области художественного
                                    дизайна.</h3>
                                <p class="text ps-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-slide">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 col-xl-5">
                                <div class="about-img">
                                    <img src="img/artmix-about.jpg" class="img-about rounded-top bg-white" alt="Image">
                                    <img src="img/artmix-about2.jpg" class="img-about2 rounded-bottom" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <h4 class="text-primary">О нас</h4>
                                <h3 class="display-5 mb-4">2 Художественный дизайндаги компания.</h3>
                                <p class="text ps-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-slide">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 col-xl-5">
                                <div class="about-img">
                                    <img src="img/artmix-about.jpg" class="img-about rounded-top bg-white" alt="Image">
                                    <img src="img/artmix-about2.jpg" class="img-about2 rounded-bottom" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <h4 class="text-primary">О нас</h4>
                                <h3 class="display-5 mb-4">3 Энг илғор компания.</h3>
                                <p class="text ps-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="prevBtn" class="carousel-btn prev-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextBtn" class="carousel-btn next-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- About End -->
    <script>
        const slides = document.querySelectorAll('.about-slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        });

        showSlide(currentIndex);
    </script>

@endsection
