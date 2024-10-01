<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitra HealthyPet</title>
    <base href="{{ asset('landing-page') }}">
    <link rel="stylesheet" href="landing-page/assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Healthy</span>Pet</a>
        <nav class="navbar">
            <a href="/landingpage" class="active">Beranda</a>
            <a href="/menu">Menu</a>
            <a href="/kontak">Kontak</a>
            <a href="/tentang">Tentang</a>
        </nav>
        {{-- <a href="#" class="contact">Kontak Kami</a> --}}
    </header>

    <section class="home">
        <div class="home-content">
            <h3>Bergabung</h3>

            <h1>Menjadi Mitra <span>Kami!<br></span>
            </h1>

            <p>Apakah Anda siap untuk membawa bisnis Anda ke level berikutnya?
                Mari bergabung bersama kami sebagai mitra dan nikmati berbagai
                keuntungan yang luar biasa.</p>

                <div class="btn-box">
                    <a href="{{ route('register_klinik') }}">
                        <button class="btn-login">Mulai</button>
                    </a>
                </div>                
        </div>
        <div class="img-box">
            <img src="landing-page/assets/images/residential-complex.png" alt="">
        </div>
    </section>

    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-facebook-circle bx-sm'></i></a>
            <a href="#"><i class='bx bxl-twitter bx-sm'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt bx-sm'></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">FAQ</a>
            </li>
            <li>
                <a href="#">Pelayanan</a>
            </li>
            <li>
                <a href="#">Tentang kami</a>
            </li>
            <li>
                <a href="#">Kontak</a>
            </li>
            <li>
                <a href="#">Keamanan Ketentuan</a>
            </li>
        </ul>
        <p class="copyright">&copy; 2024 HealthyPet | All Rights Reserved</p>
    </footer>
</body>
</html>
