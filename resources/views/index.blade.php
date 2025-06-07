<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Artmix-master</title>
    <link href="{{ asset('logo/artmixmaster02.jpg') }}?v={{ time() }}" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="description" content="ArtMixMaster — bosma mahsulotlar, reklama va marketing xizmatlarini taklif etuvchi kompaniya. Sifatli va tezkor xizmat!">
    <meta name="keywords" content="artmixmaster, print, bosma xizmatlar, dizayn, reklama, uz">
    <meta property="og:title" content="ArtMixMaster - Print xizmati">
    <meta property="og:description" content="Sifatli bosma xizmatlar, reklama, dizayn. ArtMixMaster.uz">
    <meta property="og:image" content="https://artmixmaster.uz/logo.png">
    <meta property="og:url" content="https://artmixmaster.uz/">
    <meta name="google-site-verification" content="1Td-Xo4fBokl2JWwcZpIHixY8Hhuyq5XIMi2EzaS4_c" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
@include('layouts.navigation')
@yield('content')
@include('layouts.footer')

<div id="main-toggle" onclick="toggleMenu()" aria-expanded="false" aria-label="Toggle social menu">
    <i class="fa fa-comments"></i>
</div>

<div id="social-buttons" class="social-buttons-hidden">
    <a href="tel:+998951771152" class="social-icon" aria-label="Call us"><i class="fa fa-phone"></i></a>
    <a href="https://t.me/artmixmasterr" class="social-icon" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
    <a href="mailto:artmixmasters@gmail.com" class="social-icon" aria-label="Email"><i class="fab fa-instagram"></i></a>
    <a class="social-icon" data-bs-toggle="modal" data-bs-target="#contactModal" aria-label="Contact form"><i
            class="fa fa-envelope"></i></a>

</div>

<script>
    function toggleMenu() {
        const buttons = document.getElementById("social-buttons");
        const toggle = document.getElementById("main-toggle");

        buttons.classList.toggle("show");
        toggle.classList.toggle("active");
        toggle.setAttribute("aria-expanded", buttons.classList.contains("show"));
    }

    document.addEventListener('click', function (event) {
        const buttons = document.getElementById("social-buttons");
        const toggle = document.getElementById("main-toggle");

        if (buttons.classList.contains("show") &&
            !toggle.contains(event.target) &&
            !buttons.contains(event.target)) {
            toggleMenu();
        }
    });
</script>

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" style="color: whitesmoke; align-content: center" id="contactModalLabel">
                    Связаться с нами
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ваше имя</label>
                        <input type="text" style="background-color: rgba(0,0,0,0)" class="form-control color-white"
                               id="name" placeholder="Введите свое имя" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Ваш номер телефона</label>
                        <input type="tel" style="background-color: rgba(0,0,0,0)" class="form-control" id="phone"
                               placeholder="+998 XX XXX XX XX" required>
                    </div>
                    <div class="mb-3">
                        <label for="helpType" class="form-label">Какая помощь вам нужна?</label>
                        <select style="background-color: rgba(0,0,0,0)" class="form-select" id="helpType">
                            <option value="" selected disabled>Выберите тип помощи</option>
                            <option value="buyoq">Информация о краске</option>
                            <option value="order">Заказ</option>
                            <option value="advice">Получить совет</option>
                            <option value="other">Другой</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Дополнительный комментарий</label>
                        <textarea style="background-color: rgba(0,0,0,0)" class="form-control" id="message" rows="3"
                                  placeholder="Дополнительная информация..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Отправлять</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const helpType = document.getElementById('helpType').value;
        const message = document.getElementById('message').value;

        const token = "7205084517:AAEc-NowI2TvGhNNiHa6cZkY8xSA6UjFuAM";
        const chat_id = "@artmix_print";

        const text = `📌 *Yangi Murojaat* 📌

  👤 *Ism:* ${name}
  📱 *Telefon:* ${phone}
  ❓ *Yordam turi:* ${helpType}
  ✉️ *Xabar:* ${message || "Yo'q"}

  ⏰ ${new Date().toLocaleString()}`;

        fetch(`https://api.telegram.org/bot${token}/sendMessage`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                chat_id: chat_id,
                text: text,
                parse_mode: 'Markdown'
            })
        })
            .then(response => response.json())
            .then(data => {
                if (data.ok) {
                    alert('Ваша заявка получена! Мы свяжемся с вами в ближайшее время.');

                    const modal = bootstrap.Modal.getInstance(document.getElementById('contactModal'));
                    modal.hide();

                    this.reset();
                } else {
                    alert('Произошла ошибка. Попробуйте еще раз.');
                    console.error('Telegram API error:', data);
                }
            })
            .catch(error => {
                alert('Возникла проблема с подключением к Интернету. Повторите попытку позже.');
                console.error('Fetch error:', error);
            });
    });
</script>

@stack('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
