@extends('index')
@section('content')
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center p-0">
                    <img src="{{ asset('logo/artmixmaster_logo2.png') }}" alt="Logo" style="height: 60px;" class="me-2">
                    <h3 class="avant-garde-text" style="margin-top: 10px">ARTMIX-PRINT</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link">Главная страница</a>
                        <a href="{{route('print')}}" class="nav-item nav-link active">Принт</a>
                        <a href="{{route('gallery')}}" class="nav-item nav-link">Галерея</a>
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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"></h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная страница</a></li>
                <li class="breadcrumb-item active text-primary">Наш печать</li>
            </ol>
        </div>
    </div>
    <div class="print-service">
        <div class="print-gallery">
            <div class="row g-2">
                <div class="col-6">
                    <div class="gallery-item" onclick="showFullscreen(this)">
                        <img src="img/services/print01.png" alt="Багетная мастерская 1">
                        <div class="caption">Широкоформатная универсальная УФ-печать</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="gallery-item" onclick="showFullscreen(this)">
                        <img src="img/services/print02.png" alt="Багетная мастерская 2">
                        <div class="caption">Широкоформатная рулонная печать</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fullscreen-image" onclick="hideFullscreen()">
            <img id="fullscreen-img" src="" alt="Fullscreen">
        </div>

        <div class="printer-description mt-5">
            <h4>Услуги печати</h4>
            <p>
                Мы предлагаем широкий спектр услуг печати для удовлетворения всех ваших потребностей. Наши возможности
                включают:
            </p>
            <ul>
                <li>
                    <strong>Широкоформатная УФ-печать:</strong>
                    Идеально подходит для создания ярких и долговечных изображений на различных материалах, включая
                    акрил, дерево и пленку.
                </li>
                <li>
                    <strong>Широкоформатная рулонная печать:</strong>
                    Отличный выбор для баннеров, плакатов и рекламных материалов. Мы гарантируем насыщенные цвета и
                    четкость изображения.
                </li>
                <li>
                    <strong>Лазерная многоформатная печать на Canon imageRUNNER ADVANCE DX C3826i:</strong>
                    Обеспечивает высокое качество печати для документов, буклетов и презентаций с возможностью цветного
                    и черно-белого оформления.
                </li>
            </ul>
            <p>
                Доверьте свои печатные проекты профессионалам. Свяжитесь с нами сегодня, чтобы обсудить ваши идеи и
                получить индивидуальное предложение.
            </p>
            <p>
                <strong>Ваши идеи — наша печать.</strong>
            </p>

            <h4>Лазерная гравировка и услуги роверщика</h4>
            <p>
                Мы предлагаем лазерную гравировку и услуги роверщика для создания индивидуальных изделий. Это отличный
                способ выделить ваш бизнес или сделать особый подарок.
            </p>
            <h5>Наши услуги:</h5>
            <ul>
                <li>
                    <strong>Лазерная гравировка:</strong>
                    Гравировка на дереве, стекле, металле и пластике. Подходит для сувениров, подарков и корпоративной
                    продукции.
                </li>
                <li>
                    <strong>Услуги роверщика:</strong>
                    Роверовка текстиля, кожи и бумаги. Уникальные элементы для вашей продукции и подарков.
                </li>
            </ul>

            <h5>Почему выбирают нас:</h5>
            <ul>
                <li><strong>Индивидуальный подход:</strong> Работаем по вашим идеям и создаем уникальный дизайн.</li>
                <li><strong>Высокое качество:</strong> Современное оборудование обеспечивает точность и долговечность.
                </li>
                <li><strong>Широкий ассортимент:</strong> Предлагаем разнообразные решения под любые задачи.</li>
            </ul>
            <p>
                Свяжитесь с нами сегодня, и мы поможем воплотить ваши идеи в жизнь.
            </p>
            <p>
                <strong>Контакты:</strong><br>
                +99895 177 11 52<br>
                +99888 033 00 66<br>
                +99890 119 11 52
            </p>
        </div>

    </div>

    <script>
        function showFullscreen(element) {
            const img = element.querySelector('img');
            const fullscreen = document.querySelector('.fullscreen-image');
            const fullscreenImg = document.getElementById('fullscreen-img');
            fullscreenImg.src = img.src;
            fullscreen.classList.add('active');
        }

        function hideFullscreen() {
            document.querySelector('.fullscreen-image').classList.remove('active');
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const images = document.querySelectorAll('.img-print');
            const maxHeight = window.innerWidth < 768 ? 200 : 300;

            images.forEach(img => {
                img.style.maxHeight = `${maxHeight}px`;
            });

            window.addEventListener('resize', function () {
                const newMaxHeight = window.innerWidth < 768 ? 200 : 300;
                images.forEach(img => {
                    img.style.maxHeight = `${newMaxHeight}px`;
                });
            });
        });
    </script>
@endsection
