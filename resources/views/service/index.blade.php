@extends('index')
@section('content')
    <div class="container-fluid sticky-top px-0">
            <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                    <a class="navbar-brand d-flex align-items-center p-0">
                        <img src="{{ asset('logo/artmixmaster_logo2.png') }}" alt="Logo" style="height: 60px;" class="me-2">
                        <h3 class="avant-garde-text" style="margin-top: 10px">ARTMIX-MASTER</h3>
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
                <li class="breadcrumb-item active text-primary">Наши услуги</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h6 class="display-6">Услуги, которые мы предоставляем</h6>
            </div>
            <div class="row g-4 justify-content-center text-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="img/services/baget.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <p class="service-text h6 mb-4 d-inline-flex text-start">
                                    <img src="{{asset('logo/artmixmaster_logo2.svg')}}" alt="Logo" style="width: 50px; height: 50px; margin-top: -6px" class="me-2">
                                    ARTMIX MASTER — Багетная мастерская</p>
                                <p href="{{route('baget')}}" class="mb-4">В ARTMIX MASTER мы поможем подобрать идеальный багет и паспарту для ваших произведений искусства.
                                    Используя качественные материалы, мы гарантируем долговечность и эстетическую привлекательность оформления.
                                    Доверьте нам свои картины, и они заиграют новыми красками!
                                </p>
                                <a class="btn btn-success rounded-pill py-2 px-4" href="{{route('baget')}}">Читать дальше</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="img/services/gallery.jpg" class="img-baget w-100 rounded-top" alt="">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <p class="h6 mb-4 d-inline-flex text-start">
                                    <img src="{{asset('logo/artmixmaster_logo2.svg')}}" alt="Logo" style="width: 50px; height: 50px; margin-top: -6px" class="me-2">
                                    ARTMIX GALLERY — Художественная галерея</p>
                                <p class="mb-4">ARTMIX GALLERY — это пространство, где вы можете приобрести картины талантливых художников.
                                    Мы предлагаем разнообразные произведения искусства, которые помогут вам создать
                                    уникальную атмосферу в вашем доме или офисе.
                                </p>
                                <a class="btn btn-success rounded-pill py-2 px-4" href="{{route('galley')}}">Читать дальше</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="img/services/market.jpg" class="img-baget w-100 rounded-top">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <p class="h6 mb-4 d-inline-flex text-start">
                                    <img src="{{asset('logo/artmixmaster_logo2.svg')}}" alt="Logo" style="width: 50px; height: 50px; margin-top: -6px" class="me-2">
                                    ARTMIX PRINT — Услуги печати</p>
                                <p class="mb-4">ARTMIX PRINT предлагает рулонную и УФ-печать для профессионалов и любителей.
                                    Мы обеспечиваем отличное качество печати для постеров, картин и рекламных материалов,
                                    воплощая ваши идеи с точностью и яркостью.
                                </p>
                                <a class="btn btn-success rounded-pill py-2 px-4" href="{{route('print')}}">Читать дальше</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="img/services/print.jpg" class="img-baget w-100 rounded-top" alt="">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <p class="h6 mb-4 d-inline-flex text-start">
                                    <img src="{{asset('logo/artmixmaster_logo2.svg')}}" alt="Logo" style="width: 50px; height: 50px; margin-top: -6px" class="me-2">
                                    ARTMIX MARKET — Магазин художественных материалов</p>
                                <p class="mb-4">В ART MIX MARKET вы найдете все необходимое для творчества: краски, кисти, холсты и многое другое.
                                    Наша команда готова помочь вам выбрать качественные продукты, подходящие для любого уровня подготовки.
                                </p>
                                <a class="btn btn-success rounded-pill py-2 px-4" href="{{route('market')}}">Читать дальше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
