@extends('index')
@section('content')
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center p-0">
                    <img src="{{ asset('logo/artmixmaster_logo2.png') }}" alt="Logo" style="height: 60px;" class="me-2">
                    <h3 class="avant-garde-text" style="margin-top: 10px">ARTMIX-GALLERY</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link">Главная страница</a>
                        <a href="{{route('gallery')}}" class="nav-item nav-link">Галерея</a>
                        <a href="{{route('about')}}" class="nav-item nav-link active">Багет</a>
                        <a href="{{route('market')}}" class="nav-item nav-link">Маркет</a>
                        <a href="{{route('print')}}" class="nav-item nav-link">Принт</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Контакт</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown"></h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная страница</a></li>
                <li class="breadcrumb-item active text-primary">Наша галерея</li>

            </ol>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-5 align-items-start">
            <!-- Image block -->
            <div class="col-lg-6">
                <div class="position-relative overflow-hidden rounded shadow" style="aspect-ratio: 3 / 2;">
                    <img src="{{ asset('img/baget/main-baget.jpg') }}"
                         alt="Багетная мастерская"
                         class="w-100 h-100">
                    <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 m-3 rounded"
                         style="max-width: 70%;">
                        <h5 class="mb-0">Опыт более 15 лет</h5>
                    </div>
                </div>
            </div>

            <!-- Text content block -->
            <div class="col-lg-6">
                <h6 class="mb-4 text-primary fs-3 fw-bold">ARTMIX MASTER — Искусство в каждой детали</h6>
                <p class="mb-4 lead">
                    Наша багетная мастерская создает неповторимые решения для оформления ваших ценностей уже более 15
                    лет.
                </p>

                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 text-primary me-3">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <p>Мы предлагаем более 1000 видов багетов из дерева, пластика и алюминия от ведущих европейских
                            производителей.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 text-primary me-3">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <p>Используем музейные технологии оформления с защитой от ультрафиолета и пыли.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 text-primary me-3">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <p>Индивидуальный подход к каждому клиенту и бесплатные консультации по оформлению.</p>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn btn-success px-4 py-2 rounded-pill">Заказать
                    консультацию</a>
            </div>
        </div>
    </div>


    <!-- Галерея багетов -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary display-5 fw-bold">Наша коллекция багетов</h2>
                <p class="lead">Выберите идеальное обрамление для вашего произведения</p>
            </div>

            <div class="row g-4">
                <!-- Багет 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/классический-дуб.jpg') }}" class="card-img-top"
                             alt="Классический деревянный багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Классический дуб</h5>
                            <p class="card-text">Традиционный деревянный багет с резьбой, идеален для масляной живописи
                                и антиквариата.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Премиум</span>
                                <small class="text-muted">Ширина: 6 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/минимал-черный.jpg') }}" class="card-img-top"
                             alt="Современный черный багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Минимал черный</h5>
                            <p class="card-text">Современный алюминиевый профиль с матовым покрытием для фотографий и
                                графики.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Популярный</span>
                                <small class="text-muted">Ширина: 2 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/золотой-лист.jpg') }}" class="card-img-top" alt="Золоченый багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Золотой лист</h5>
                            <p class="card-text">Роскошное оформление с сусальным золотом для дорогих картин и
                                зеркал.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning">Эксклюзив</span>
                                <small class="text-muted">Ширина: 8 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/белый-каннелюр.jpg') }}" class="card-img-top"
                             alt="Белый каннелюрный багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Белый каннелюр</h5>
                            <p class="card-text">Элегантный профиль с вертикальными желобками для акварелей и
                                постеров.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-info">Новинка</span>
                                <small class="text-muted">Ширина: 4 см</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-3">
                <!-- Багет 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/рустик.jpg') }}" class="card-img-top" alt="Рустикальный багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Рустик</h5>
                            <p class="card-text">Грубоватая текстура дерева с эффектом старения для этнических
                                работ.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-secondary">Натуральное</span>
                                <small class="text-muted">Ширина: 5 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/серебряный.jpg') }}" class="card-img-top"
                             alt="Серебряный металлик">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Серебряный металлик</h5>
                            <p class="card-text">Современный холодный блеск для черно-белой фотографии и абстракций.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Популярный</span>
                                <small class="text-muted">Ширина: 3 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/плавающий.jpg') }}" class="card-img-top" alt="Плавающий багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Плавающий</h5>
                            <p class="card-text">Создает эффект парящего изображения для современного искусства.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-info">Новинка</span>
                                <small class="text-muted">Ширина: 1.5 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/барочный.jpg') }}" class="card-img-top"
                             alt="Орнаментальный багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Барочный</h5>
                            <p class="card-text">Богатая лепнина и сложные узоры для старинных гравюр и портретов.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning">Эксклюзив</span>
                                <small class="text-muted">Ширина: 10 см</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Третья строка галереи -->
            <div class="row g-4 mt-3">
                <!-- Багет 9 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/натуральный.jpg') }}" class="card-img-top"
                             alt="Натуральное дерево">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Натуральный ясень</h5>
                            <p class="card-text">Подчеркивает естественную красоту дерева, подходит для пейзажей.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-secondary">Эко</span>
                                <small class="text-muted">Ширина: 4 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 10 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/льняной.jpg') }}" class="card-img-top" alt="Льняной багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Льняной</h5>
                            <p class="card-text">Текстильное покрытие с благородной фактурой для пастелей и
                                рисунков.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Премиум</span>
                                <small class="text-muted">Ширина: 5 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 11 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/тонкий-черный.jpg') }}" class="card-img-top" alt="Тонкий черный">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Тонкий черный</h5>
                            <p class="card-text">Дискретное обрамление, не отвлекающее от самого произведения.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Бестселлер</span>
                                <small class="text-muted">Ширина: 1 см</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Багет 12 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/baget/цветной.jpg') }}" class="card-img-top" alt="Цветной багет">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Цветной акцент</h5>
                            <p class="card-text">Яркие цвета для детских рисунков и современных арт-объектов.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-info">Яркий</span>
                                <small class="text-muted">Ширина: 3 см</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4 custom-text">Почему выбирают нашу мастерскую</h2>

                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 custom-bg custom-text icon-circle me-4">
                        <i class="fas fa-award fa-2x"></i>
                    </div>
                    <div>
                        <h5 class="mb-2 custom-text">Профессионализм</h5>
                        <p class="mb-0 custom-text">Наши мастера с опытом работы от 10 лет используют только
                            профессиональное
                            оборудование и материалы.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 custom-bg custom-text icon-circle me-4">
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                    <div>
                        <h5 class="mb-2 custom-text">Скорость выполнения</h5>
                        <p class="mb-0 custom-text">Скорость выполнение минимум за 1 час смотря от сложности заказа.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 custom-bg custom-text icon-circle me-4">
                        <i class="fas fa-shield-alt fa-2x"></i>
                    </div>
                    <div>
                        <h5 class="mb-2 custom-text">Гарантия качества</h5>
                        <p class="mb-0 custom-text">5 лет гарантии на все наши работы и материалы.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="custom-bg p-4 rounded custom-text">
                    <h3 class="mb-4">Индивидуальный подход</h3>
                    <p class="mb-4">Мы предлагаем бесплатные консультации по подбору багета и паспарту, учитывая:</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Стиль и эпоху произведения</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Цветовую гамму и композицию</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Особенности интерьера</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Ваши личные предпочтения</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-success px-4 py-2 rounded-pill">Записаться на
                        консультацию</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Отзывы -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary display-5 fw-bold">Отзывы наших клиентов</h2>
                <p class="lead">Более 2000 довольных клиентов за 15 лет работы</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <div>
                                    <h5 class="mb-1">Анна К.</h5>
                                    <div class="text-warning mb-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <small class="text-muted">Оформила семейный портрет</small>
                                </div>
                            </div>
                            <p class="card-text">"Огромное спасибо за прекрасное оформление нашего семейного портрета!
                                Подобрали идеальный багет, который гармонично вписался в интерьер гостиной."</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <div>
                                    <h5 class="mb-1">Сергей П.</h5>
                                    <div class="text-warning mb-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <small class="text-muted">Оформление коллекции гравюр</small>
                                </div>
                            </div>
                            <p class="card-text">"Профессиональный подход и внимание к деталям. Моя коллекция старинных
                                гравюр теперь выглядит как в музее. Особенно впечатлило музейное стекло."</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <div>
                                    <h5 class="mb-1">Елена М.</h5>
                                    <div class="text-warning mb-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <small class="text-muted">Оформление детских рисунков</small>
                                </div>
                            </div>
                            <p class="card-text">"Делала подарок бабушке - оформила рисунки внуков. Получилось очень
                                трогательно и красиво! Спасибо за терпение и креативные идеи по оформлению."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .icon-circle {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .custom-text {
            color: #663300 !important;
        }

        .position-relative {
            width: auto;
            height: auto;
        }

        @media (min-width: 992px) {
            .col-lg-6:first-child {
                width: 50%;
                flex: 0 0 auto;
            }
        }
    </style>


@endsection
