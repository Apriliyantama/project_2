<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('homepage') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyPet</title>
    <link rel="stylesheet" href="homepage/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <header>
        <a href="#" class="logo">HealthyPet</a>

        <nav>
            <a href="/">Beranda</a>
            <a href="/galeri">Galeri</a>
            <a href="/pelayanan">Pelayanan</a>
            <a href="/kontak">Kontak</a>
            <a href="/klinik"><button>Klinik</button></a>
        </nav>
    </header>

    <!-- Beranda -->
    {{-- <section id="home" class="home">
        <h2>HealthyPet</h2>
        <p>Aplikasi Pelayanan Kesehatan Untuk<br> 
            Hewan Kesayangan Anda!
        </p>
        <div class="btn">
            <a class="green" href="#">Login</a>
            <a class="lgreen" href="#">Daftar</a>
        </div>
    </section> --}}

    <!-- Galeri -->
    {{-- <section id="gallery" class="gallery">
        <div class="info-box">
            <h1>Galeri Customer</h1>
            <p>Galeri pelanggan setia HealthyPet yang membagikan pengalaman 
                mereka dengan hewan kesayangannya, kamu juga bisa berbagi moment. 
                ikuti pelayanan di HealthyPet Sekarang dan mulai bagikan keseruan
                anda dengan hewan peliharaan anda!
            </p>
        </div>
        <div class="bento-grid">
            <div class="col-left">
                <div class="box">
                    <div class="inner-box">
                        <img src="homepage/assets/img/0.jpg" alt="">
                    </div>
                    
                    <div class="inner-box">
                        <img src="homepage/assets/img/2.jpg" alt="">
                    </div>
                </div>
                <div class="box">
                    <div class="inner-box">
                        <img src="homepage/assets/img/4.jpg" alt="">
                    </div>
                    
                    <div class="inner-box">
                        <img src="homepage/assets/img/9.jpg" alt="">
                    </div>
                </div>
            </div>
            
            <div class="col-right">
                <div class="box">
                    <video src="homepage/assets/img/7.mp4" autoplay
                    muted loop></video>
                </div>
                <div class="box">
                    <video src="homepage/assets/img/8.mp4" autoplay
                    muted loop></video>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Pelayanan -->
    <section id="about" class="about">
        <div class="text">
            <h1>Klinik HealthyPet</h1>
            <p>Portal Login untuk Klinik HealthyPet</p>
            <div class="btn">
                <a href="{{ route('loginKlinik') }}" class="green">Login</a>
                <a href="{{ route('register_klinik') }}" class="lgreen">Daftar</a>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    {{-- <section id="contact" class="contact">
        
        <form action="#">
            <h2>Kontak Kami</h2>
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Nama Lengkap" id="name"
                    class="item" autocomplete="off">
                    <div class="error-txt">Nama Lengkap tidak boleh kosong</div>
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Email" id="email"
                    class="item" autocomplete="off">
                    <div class="error-txt">Email tidak boleh kosong</div>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="No Handphone" id="phone"
                    class="item" autocomplete="off">
                    <div class="error-txt">No Handphone tidak boleh kosong</div>
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Subjek" id="subject"
                    class="item" autocomplete="off">
                    <div class="error-txt">Subjek tidak boleh kosong</div>
                </div>
            </div>
            <div class="textarea-field field">
                <textarea name="" id="message" cols="30" rows="10"
                placeholder="Pesan Kamu" class="item" autocomplete="off"></textarea>
                <div class="error-txt">Pesan tidak boleh kosong</div>
            </div>

            <button type="submit">Kirim Pesan</button>
        </form>
    </section> --}}

    <!-- Footer -->
    <div class="footer">
        <div class="social">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-whatsapp"></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Service</a>
            </li>
            <li>
                <a href="#">Terms</a>
            </li>
            <li>
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
        <p class="copyrigt">
            HealthyPet @ 2024
        </p>
    </div>

    <script src="js/script.js"></script>
</body>
</html>