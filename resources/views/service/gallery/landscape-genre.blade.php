@extends('index')
@section('content')
    <div class="container-fluid py-4">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Главная страница</a></li>
                    <li class="breadcrumb-item"><a href="{{route('gallery')}}">Наша галерея</a></li>
                    <li class="breadcrumb-item active">Жанр пейзажа</li>
                </ol>
            </nav>

            <h3 class="mb-5 text-center">Галерея пейзажей</h1>

            <div class="row">
                @foreach([
                    ['peyzaj01.png', 'Тополя', '200х90 см'],
                    ['peyzaj02.png', 'Сой бойида', '75х55 см'],
                    ['peyzaj03.png', 'В горах', '100х80 см'],
                    ['peyzaj04.png', 'Сижжак', '100х80 см'],
                    ['peyzaj05.png', 'Весна в горах', '90х60 см'],
                    ['peyzaj10.png', 'Лето', '90x60 см'],
                    ['peyzaj06.png', 'Весна', '60х40 см'],
                    ['peyzaj07.png', 'Весна', '100х65 см'],
                    ['peyzaj08.png', 'Олтин куз', '60х90 см'],
                    ['peyzaj09.png', 'Зоминда киш', '60х90 см'],
                    ['peyzaj11.png', 'Осень', '80х40 см'],
                    ['peyzaj12.png', 'Первый день лета', '90x60 см'],
                    ['peyzaj13.png', 'Тополя', '200х90 см']
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
