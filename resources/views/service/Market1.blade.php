@extends('index')
@section('content')
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center p-0">
                    <img src="{{ asset('logo/artmixmaster_logo2.png') }}" alt="Logo" style="height: 60px;" class="me-2">
                    <h3 class="avant-garde-text" style="margin-top: 10px">ARTMIX-MARKET</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link">Главная страница</a>
                        <a href="{{route('print')}}" class="nav-item nav-link">Принт</a>
                        <a href="{{route('gallery')}}" class="nav-item nav-link">Галерея</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">Багет</a>
                        <a href="{{route('market')}}" class="nav-item nav-link active">Маркет</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Контакт</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid bg-breadcrumb1">
        <div class="bg-breadcrumb1-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"></h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная страница</a></li>
                <li class="breadcrumb-item active text-primary">Наш Market</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-6 mb-3">Профессиональные краски для художников</h1>
                <p class="mb-5">Наши краски изготовлены из высококачественных материалов и адаптированы к требованиям
                    профессиональных художников. Свяжитесь с нами для получения более подробной информации о нашей
                    продукции.</p>
                <a data-bs-toggle="modal"
                   data-bs-target="#contactModal" class="btn btn-success px-4">Связь</a>
            </div>

            <div class="row mt-5">
                <div class="col-12 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Виды красок</h2>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white p-4 text-center h-100 rounded">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/market/акрил.jpg') }}" alt="Акриловая краска"
                                 class="img-fluid rounded"
                                 style="height: 200px; width: 100%; object-fit: cover;">
                        </div>
                        <h4 class="mb-3" style="color: whitesmoke">Акриловые краски</h4>
                        <p class="mb-4" style="color: #eceae5a3">Быстросохнущие, водостойкие и очень цветостойкие
                            акриловые краски. Можно
                            создавать слои различной толщины.</p>
                        <ul class="text-start ps-4 mb-4" style="color: #eceae5a3">
                            <li>50+ вариантов цвета</li>
                            <li>Экологически чистые компоненты</li>
                            <li>Длительное хранение</li>
                        </ul>
                        <a data-bs-toggle="modal"
                           data-bs-target="#contactModal" class="btn btn-outline-primary px-3">Узнать больше</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-white p-4 text-center h-100 rounded">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/market/масло.jpg') }}" alt="Масляная краска"
                                 class="img-fluid rounded"
                                 style="height: 200px; width: 100%; object-fit: cover;">
                        </div>
                        <h4 class="mb-3" style="color: whitesmoke">Масляные краски</h4>
                        <p class="mb-4" style="color: #eceae5a3">Высококачественные масляные краски, идеально подходят
                            для традиционных стилей
                            живописи. Характеризуются богатством и глубиной цветов.</p>
                        <ul class="text-start ps-4 mb-4" style="color: #eceae5a3">
                            <li>36 основных цветов</li>
                            <li>Профессиональная последовательность</li>
                            <li>Длительное время сборки</li>
                        </ul>
                        <a data-bs-toggle="modal"
                           data-bs-target="#contactModal" class="btn btn-outline-primary px-3">Узнать больше</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="bg-white p-4 text-center h-100 rounded">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/market/акварель.jpg') }}" alt="Акварельные краски"
                                 class="img-fluid rounded" style="height: 200px; width: 100%; object-fit: cover;">
                        </div>
                        <h4 class="mb-3" style="color: whitesmoke">Акварельные краски</h4>
                        <p class="mb-4" style="color: #eceae5a3">Высококачественные акварели, предназначенные для
                            создания магических эффектов.
                            Доступны в различных уровнях непрозрачности.</p>
                        <ul class="text-start ps-4 mb-4" style="color: #eceae5a3">
                            <li>Набор из 48 цветов</li>
                            <li>Яркие и чистые цвета</li>
                            <li>Легко мыть</li>
                        </ul>
                        <a data-bs-toggle="modal"
                           data-bs-target="#contactModal" class="btn btn-outline-primary px-3">Узнать больше</a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Художествериые товары</h2>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white p-4 text-center h-100 rounded">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/market/кисти.jpg') }}" alt="Холст" class="img-fluid rounded"
                                 style="height: 150px; width: 100%; object-fit: cover;">
                        </div>
                        <h5 class="mb-3" style="color: whitesmoke">Профессиональные кисти</h5>
                        <p style="color: #eceae5a3">Кисти разных форм и размеров, с натуральными и синтетическими
                            волокнами.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white p-4 text-center h-100 rounded">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/market/холст.jpg') }}" alt="Холст" class="img-fluid rounded"
                                 style="height: 150px; width: 100%; object-fit: cover;">
                        </div>
                        <h5 class="mb-3" style="color: whitesmoke">Холсты</h5>
                        <p style="color: #eceae5a3">Высококачественные холсты различных размеров и толщины.</p>
                    </div>
                </div>

                <!-- Aksessuar 3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-white p-4 text-center h-100 rounded">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/market/палитра.jpg') }}" alt="Палитра" class="img-fluid rounded"
                                 style="height: 150px; width: 100%; object-fit: cover;">
                        </div>
                        <h5 class="mb-3" style="color: whitesmoke">Палитры</h5>
                        <p style="color: #eceae5a3">Удобные и долговечные палитры из различных материалов.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{route('getEasel')}}">
                        <div class="bg-white p-4 text-center h-100 rounded">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="{{ asset('img/market/мольберт.jpg') }}" alt="Молберты"
                                     class="img-fluid rounded"
                                     style="height: 150px; width: 100%; object-fit: cover;">
                            </div>
                            <h5 class="mb-3" style="color: whitesmoke">Молберты</h5>
                            <p style="color: #eceae5a3">Профессиональные гантели, адаптированные под разные размеры и
                                вес.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <div class="bg-white p-5 h-100 rounded">
                        <h3 class="mb-4" style="color: whitesmoke">О наших красках</h3>
                        <p style="color: #eceae5a3">Наши краски разработаны совместно с профессиональными художниками и
                            соответствуют их
                            требованиям. Каждый наш продукт проходит контроль качества и производится из экологически
                            чистых компонентов.</p>
                        <p style="color: #eceae5a3">У нас есть продукция, подходящая художникам любого уровня — как
                            новичкам, так и
                            профессиональным художникам.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white p-5 h-100 rounded">
                        <h3 class="mb-4" style="color: whitesmoke">Как я могу сделать заказ?</h3>
                        <p style="color: #eceae5a3">Чтобы узнать больше о нашей продукции или сделать заказ, выберите
                            один из следующих
                            способов:</p>
                        <ul class="mb-4" style="color: #eceae5a3">
                            <li class="mb-2">
                                По телефону:
                                <a href="https://t.me/ARTMIXMARKET" target="_blank">
                                    +99890 119 11 52
                                </a>
                            </li>
                            <li class="mb-2">
                                По инстаграм:
                                <a href="https://www.instagram.com/artmixmarket.uz/?__pwa=1#" target="_blank">
                                    @ARTMIXMARKET.uz
                                </a>
                            </li>
                            <li class="mb-2">
                                По электронной почте:
                                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#advanced-search/to=artmixmasters%40gmail.com&query=in%3Asent&isrefinement=true&todisplay=artmixmasters%40gmail.com"
                                   target="_blank">
                                    artmixmasters@glmail.com
                                </a>
                            </li>
                            <li>Используйте контактную форму</li>
                        </ul>
                        <a href="{{route('contact')}}" class="btn btn-success px-4">Контактная форма</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
