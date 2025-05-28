@extends('index')
@section('content')
    <div class="container-fluid py-4">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная страница</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('gallery') }}">Наша галерея</a></li>
                    <li class="breadcrumb-item active">{{ $artist->name }}</li>
                </ol>
            </nav>

            <h1 class="text-center mb-3">{{ $artist->name }}</h1>
            <p class="text-center mb-5">{{ $artist->description }}</p>

            <h3 class="mb-5 text-center">Галерея работ</h3>

            <div class="row">
                @foreach($artist->works as $work)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="gallery-card h-100">
                            <div class="gallery-image-container">
                                <div class="image-wrapper">
                                    <img src="{{ asset('storage/' . $work->images) }}"
                                         class="gallery-image"
                                         alt="{{ $work->image_name }}"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="gallery-info p-3">
                                <h5 class="mb-2">{{ $work->image_name }}</h5>
                                <div class="mb-2">Размер: {{ $work->size }}</div>
                                <div class="mb-2">Материал: {{ $work->materials }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        .gallery-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
            display: flex;
            flex-direction: column;
            height: 100%;
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
            min-height: 300px;
            position: relative;
        }

        .image-wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-image {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
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

        @media (max-width: 767px) {
            .gallery-image-container {
                min-height: 250px;
            }
        }
    </style>
@endsection
