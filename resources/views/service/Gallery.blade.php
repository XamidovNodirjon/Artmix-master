@extends('index')
@section('content')
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center p-0">
                    <img src="{{ asset('logo/artmixmaster_logo2.png') }}" alt="Logo" style="height: 60px;" class="me-2">
                    <h3 class="avant-garde-text" style="margin-top: 10px">ARTMIX-MASTER</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link">Главная страница</a>
                        <a href="{{route('print')}}" class="nav-item nav-link">Принт</a>
                        <a href="{{route('gallery')}}" class="nav-item nav-link active">Галерея</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">Багет</a>
                        <a href="{{route('market')}}" class="nav-item nav-link">Маркет</a>
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
                <li class="breadcrumb-item">
                    <a href="{{route('home')}}" class="breadcrumb-light">Главная страница</a>
                </li>
                <li class="breadcrumb-item active breadcrumb-light">Наша галерея</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center justify-content-center text-center mb-5">
                <a href="{{route('historyGenre')}}" class="col-md-6 col-lg-5">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/main-history.png') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto" alt="history genre">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7">
                    <p class="mb-0"><strong>Исторический</strong> — направление искусства, посвящённое изображению
                        значимых исторических событий, деятелей прошлого и культурных эпох. Произведения исторического
                        жанра позволяют зрителю погрузиться в атмосферу минувших времён, ощутив дух эпохи и её героев.
                    </p>
                </div>
            </div>

            <div class="row g-4 align-items-center justify-content-center text-center">
                <a class="col-md-6 col-lg-5 order-md-2">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/animalistic.png') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7 order-md-1">
                    <p class="mb-0"><strong>Анималистический</strong> в искусстве сосредоточен на изображении
                        животных, раскрывая их красоту, повадки, разнообразие форм и характера. Художники стремятся
                        точно передать анатомию, выразительность поз и эмоций, позволяя зрителям почувствовать близость
                        к природе и восхищаться многообразием животного мира.</p>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-4 align-items-center justify-content-center text-center mb-5">
                <a href="{{route('landscapeGenre')}}" class="col-md-6 col-lg-5">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/пейзаж.png') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7">
                    <p class="mb-0"><strong>Пейзажа</strong> в искусстве представляет собой художественное
                        воспроизведение природных ландшафтов, городских видов или интерьеров помещений. Цель художника —
                        выразить красоту окружающего мира, подчеркнуть гармонию природы, вызвать эмоциональный отклик
                        зрителя и передать своё восприятие пространства.</p>
                </div>
            </div>

            <div class="row g-4 align-items-center justify-content-center text-center">
                <a href="{{route('naturmortGenre')}}" class="col-md-6 col-lg-5 order-md-2">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/naturmort.png') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7 order-md-1">
                    <p class="mb-0"><strong>Натюрморт</strong> — живописный жанр, изображающий неодушевленные предметы,
                        такие как фрукты, цветы, посуда, инструменты. Художники создают композиции, подчеркивая формы,
                        цвета, фактуру предметов, исследуя эстетику обыденного и вызывая философские размышления о жизни
                        и быстротечности бытия.</p>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row g-4 align-items-center justify-content-center text-center mb-5">
                <a href="{{route('abstractionGenre')}}" class="col-md-6 col-lg-5">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/abstraction02.png') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7">
                    <p class="mb-0"><strong>Абстракция и инсталляции</strong> — ключевые элементы современного
                        искусства. Абстрактная живопись выражает чувства и идеи через линии, формы и цвета, отказываясь
                        от реалистичного изображения. Инсталляция объединяет объекты, звук, свет, создавая
                        пространственную композицию, вовлекающую зрителя в художественный процесс восприятия.</p>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-4 align-items-center justify-content-center text-center">
                <a href="{{route('graphicsGenre')}}" class="col-md-6 col-lg-5 order-md-2">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/grafic.png') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7 order-md-1">
                    <p class="mb-0"><strong>Графика</strong> — один из основных жанров искусства, основанный на линейных
                        формах, штриховке и контрастах светотени. Она включает рисунки карандашом, пером, углем, тушью,
                        гравюры и литографии. Графика отличается лаконичностью и точностью передачи образов,
                        концентрируя внимание на структуре и форме объектов.</p>
                </div>
            </div>

            <div class="row g-4 align-items-center justify-content-center text-center mb-5">
                <a href="{{route('architecturalGenre')}}" class="col-md-6 col-lg-5">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/architectural/architectural.png') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7">
                    <p class="mb-0"><strong>Архитектурный</strong> в искусстве направлен на изображение зданий,
                        сооружений и городского пространства. Художники передают масштабность архитектуры, особенности
                        конструкций, стилистические черты различных эпох, подчёркивая связь между человеком и средой
                        обитания, формируя эстетическое представление о красоте городов и построек.</p>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row g-4 align-items-center justify-content-center text-center">
                <a href="{{route('portraitGenre')}}" class="col-md-6 col-lg-5 order-md-2">
                    <div class="project-img">
                        <img src="{{ asset('img/gallery/portret/portret.jpg') }}"
                             class="img-fluid w-100 rounded gallery-img mx-auto">
                    </div>
                </a>
                <div class="col-md-6 col-lg-7 order-md-1">
                    <p class="mb-0"><strong>Портретный</strong> в искусстве — вид живописи, графики и
                        скульптуры, акцентирующий внимание на внешности и внутреннем мире конкретного человека. Художник
                        стремится передать характер, эмоции, социальный статус модели, создавая образ личности,
                        запечатлеваемый на века.</p>
                </div>
            </div>
        </div>
    </div>

    <h6 class="mb-4 text-primary fs-3 fw-bold text-center">ARTMIX MASTER — Работы известных художников в нашей
        галерее</h6>
    <div class="row">
        @foreach($artists as $artist)
            <div class="col-12 mb-2">
                <div class="col-md-3 text-center">
                    <a href="{{ route('artist.show', $artist->id) }}">{{ $artist->name }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection



