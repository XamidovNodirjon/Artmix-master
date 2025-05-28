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
                        <a href="{{route('gallery')}}" class="nav-item nav-link">Галерея</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">Багет</a>
                        <a href="{{route('market')}}" class="nav-item nav-link">Маркет</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link active">Контакт</a>
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
                <li class="breadcrumb-item active text-primary">Контакт</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-item">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-4"><i
                                    class="fa fa-home text-white"></i></div>
                            <div class="ms-4">
                                <h4>Адреса</h4>
                                <p class="mb-0">Эльбек кўчаси 26, 100016, Тоshkent, Toshkent</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                    class="fa fa-phone-alt text-white"></i></div>
                            <div class="ms-4">
                                <h4>Мобильный</h4>
                                <p class="mb-0"><i class="fas fa-phone me-2"></i>+99895 177 11 52</p>
                                <p class="mb-0"><i class="fas fa-print me-2"></i>+99888 033 00 66</p>
                                <p class="mb-0"><i class="fas fa-shopping-cart me-2"></i>+99890 119 11 52</p>
                            </div>

                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                    class="fa fa-envelope-open text-white"></i></div>
                            <div class="ms-4">
                                <h4>Email</h4>
                                <p class="mb-0">artmixmasters@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="phone" placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                              style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>

                    <script>
                        const token = "7205084517:AAEc-NowI2TvGhNNiHa6cZkY8xSA6UjFuAM";
                        const chat_id = "@artmix_print";

                        document.querySelector("form").addEventListener("submit", function (e) {
                            e.preventDefault();

                            const name = document.getElementById("name").value;
                            const email = document.getElementById("email").value;
                            const phone = document.getElementById("phone").value;
                            const message = document.getElementById("message").value;

                            const text = `
📥 *Yangi Murojaat!*
👤 Ism: ${name}
📧 Email: ${email}
📱 Telefon: ${phone}
💬 Xabar: ${message}
        `;

                            fetch(`https://api.telegram.org/bot${token}/sendMessage`, {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json"
                                },
                                body: JSON.stringify({
                                    chat_id: chat_id,
                                    text: text,
                                    parse_mode: "Markdown"
                                })
                            })
                                .then(res => res.json())
                                .then(data => {
                                    if (data.ok) {
                                        alert("Xabar muvaffaqiyatli yuborildi ✅");
                                    } else {
                                        alert("Xatolik: " + data.description);
                                    }
                                })
                                .catch(err => {
                                    console.error("Xatolik:", err);
                                    alert("Xabar yuborishda xatolik yuz berdi ❌");
                                });
                        });
                    </script>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11397.364292068181!2d69.326215866687!3d41.29443971746861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef523c46741f1%3A0x6b7e2de01f21d712!2z0J7QntCeICJBUlRNSVhNQVNURVIi!5e1!3m2!1suz!2s!4v1745237639600!5m2!1suz!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
