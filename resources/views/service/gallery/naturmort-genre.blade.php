@extends('index')
@section('content')
    <div class="container-fluid py-4">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Главная страница</a></li>
                    <li class="breadcrumb-item"><a href="{{route('gallery')}}">Наша галерея</a></li>
                    <li class="breadcrumb-item active">Натюрморт жанр</li>
                </ol>
            </nav>

            <h3 class="mb-5 text-center">Галерея Натюрморт</h3>

            <div class="row">
                @foreach([
                    ['naturmort01.png', 'Маки в вазе', '70×60 см'],
                    ['naturmort02.png', 'Голландский натюрморт копия', '80×60 см'],
                    ['naturmort03.png', 'Национальный натюрморт пионы', '90×70 см'],
                    ['naturmort04.png', 'Цветочный букет натюрморт', '60×70 см'],
                    ['naturmort05.png', 'Сирень', '60×100 см'],
                    ['naturmort10.png', 'Пионы с гранатами', '80×100 см'],
                    ['naturmort06.png', 'Натюрморт с розами', '70×80 см'],
                    ['naturmort07.png', 'Натюрморт лилия', '50×70 см'],
                    ['naturmort08.png', 'Весенние цветы натюрморт', '50×45 см'],
                    ['naturmort09.png', 'Цветочный букет в национальной вазе', '80×80 см'],
                    ['naturmort11.png', 'Пионы в национальном сузани', '70×60 см'],
                    ['naturmort13.png', 'Пионы в национальном сузани', '70×60 см'],
                    ['naturmort14.png', 'Пионы в национальном сузани', '70×60 см'],
                    ['naturmort15.png', 'Пионы в национальном сузани', '70×60 см'],
                    ['naturmort16.png', 'Пионы в национальном сузани', '70×60 см']
                ] as $item)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="gallery-card h-100">
                            <div class="gallery-image-container">
                                <img src="{{ asset('img/gallery/' . $item[0]) }}"
                                     class="img-fluid gallery-image"
                                     alt="{{ $item[1] }}"
                                     loading="lazy">
                            </div>
                            <div class="gallery-info p-3 text-right">
                                <h3 class="h5 mb-2">{{ $item[1] }}</h3>
                                <div class="mb-2">{{ $item[2] }}</div>
                                <span class="badge bg-light text-dark border">Холст, масло</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<style>
    .gallery-card {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: white;
        display: flex;
        flex-direction: column;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }

    .gallery-image-container {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        padding: 15px;
    }

    .gallery-image {
        max-width: 100%;
        max-height: 300px;
        width: auto;
        height: auto;
        object-fit: contain;
        transition: transform 0.5s ease;
    }

    .gallery-card:hover .gallery-image {
        transform: scale(1.03);
    }

    .gallery-info {
        border-top: 1px solid #eee;
        flex-shrink: 0;
    }

    .breadcrumb {
        background: transparent;
        padding: 0;
    }
</style>
