@extends('index')
@section('content')
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;"></div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a class="navbar-brand d-flex align-items-center p-0">
                    <img src="{{ asset('logo/artmixmaster_logo2.png') }}" alt="Logo" style="height: 60px;" class="me-2">
                    <h3 class="avant-garde-text" style="margin-top: 10px">ARTMIX-MASTER</h3>
                </a>
                <button class="custom-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link">Главная страница</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">О нас</a>
                        <a href="{{route('service')}}" class="nav-item nav-link">Услуги</a>
                        <a href="{{route('projects')}}" class="nav-item nav-link ">Проекты</a>
                        <a href="{{route('blog')}}" class="nav-item nav-link active">Наш блог</a>
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
                <li class="breadcrumb-item active text-primary">Наш блог</li>
            </ol>
        </div>
    </div>
    <!-- Blog Section -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h6 class="display-6">Latest Articles & News from the Blogs</h6>
            </div>

            <div class="owl-carousel blog-carousel">
                <!-- Blog Item 1 -->
                <div class="blog-item bg-light rounded p-4">
                    <div class="mb-4">
                        <h4 class="text-primary mb-2">Baget</h4>
                    </div>
                    <div class="project-img">
                        <img src="{{ asset('img/blog-1.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="my-4">
                        <a href="#" class="h4">Revisiting Your Investment & Distribution Goals</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                </div>
                <!-- Blog Item 2 -->
                <div class="blog-item bg-light rounded p-4">
                    <div class="mb-4">
                        <h4 class="text-primary mb-2">Market</h4>
                    </div>
                    <div class="project-img">
                        <img src="{{ asset('img/blog-main-baget.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="my-4">
                        <a href="#" class="h4">Dimensional Fund Advisors Interview</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                </div>
                <!-- Blog Item 3 -->
                <div class="blog-item bg-light rounded p-4">
                    <div class="mb-4">
                        <h4 class="text-primary mb-2">Print</h4>
                    </div>
                    <div class="project-img">
                        <img src="{{ asset('img/blog-3.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="my-4">
                        <a href="#" class="h4">Giving Back This Year Tips</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                </div>
                <!-- Blog Item 4 -->
                <div class="blog-item bg-light rounded p-4">
                    <div class="mb-4">
                        <h4 class="text-primary mb-2">Gallery</h4>
                    </div>
                    <div class="project-img">
                        <img src="{{ asset('img/blog-3.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="my-4">
                        <a href="#" class="h4">Some Extra Tips for Giving Back</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
@endpush

@push('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.blog-carousel').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,         // next/prev tugmalar yo‘q
                dots: true,        // pastki nuqtalar ham yo‘q
                autoplay: true,     // avtomatik aylanish
                autoplayTimeout: 3000, // har 3 sekundda almashadi
                autoplayHoverPause: true,
                responsive:{
                    0:{ items:1 },
                    768:{ items:2 },
                    992:{ items:3 }
                }
            });
        });
    </script>
@endpush
