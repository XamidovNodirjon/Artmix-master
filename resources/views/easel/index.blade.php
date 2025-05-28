@extends('index')
@section('content')
    <div class="container-fluid py-4">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная страница</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('gallery') }}">Наша галерея</a></li>
                    <li class="breadcrumb-item active">Мольберты</li>
                </ol>
            </nav>

            <h3 class="mb-5 text-center">Галерея Мольбертов</h3>

            <div class="row">
                @foreach($easel as $item)
                    @php
                        // Ensure $item->images is an array
                        $images = is_array($item->images) ? $item->images : json_decode($item->images, true);
                        $images = $images ?? []; // Fallback to empty array if null
                    @endphp

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="gallery-card h-100">
                            <div class="gallery-image-container"
                                 data-images='@json($images)'
                                 data-current-index="0">
                                <img src="{{ asset('storage/' . ($images[0] ?? '')) }}"
                                     class="img-fluid gallery-image"
                                     alt="{{ $item->name }}"
                                     loading="lazy">
                                @if(count($images) > 1)
                                    <div class="slider-dots">
                                        @foreach($images as $index => $image)
                                            <span class="dot {{ $index === 0 ? 'active' : '' }}"></span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="gallery-info p-3 text-right">
                                <h3 class="h5 mb-2">{{ $item->name }}</h3>
                                <div class="mb-2">{{ $item->size }}</div>
                                <span class="badge bg-light text-dark border">{{ $item->material }}</span>
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
@endsection
