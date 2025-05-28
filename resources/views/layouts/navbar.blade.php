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
                    <a href="{{route('home')}}" class="nav-item nav-link active">Главная страница</a>
                    <a href="{{route('print')}}" class="nav-item nav-link">Принт</a>
                    <a href="{{route('gallery')}}" class="nav-item nav-link">Галерея</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">Багет</a>
                    <a href="{{route('market')}}" class="nav-item nav-link">Маркет</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Контакт</a>
                    <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fe-user" style="color: whitesmoke"></i> Войти
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Вход</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email адрес</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>
            </div>
        </div>
    </div>
</div>

