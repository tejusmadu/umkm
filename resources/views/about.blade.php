<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal UMKM Indramayu</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
       /* Navbar Umum */
.navbar {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 4px 15px; /* Kurangi padding agar navbar lebih ramping */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.navbar-brand {
    display: flex;
    align-items: center;
}

.navbar-brand img {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.text-navbar {
    color: #ffffff;
    font-weight: bold;
    font-size: 18px;
}

.navbar-nav .nav-link {
    color: #ffffff !important;
    margin-left: 10px;
    padding: 8px 20px;
    font-size: 16px;
    transition: background-color 0.3s, color 0.3s;
    border-radius: 5px;
}

.navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ff9f0f !important;
}

/* Efek Hover Beranda */
navbar-nav .nav-item.active .nav-link {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ff9f0f !important;
}

/* Dropdown Menu */
.dropdown-menu {
    background-color: rgba(0, 0, 0, 0.9);
    border: none;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-20px);
    transition: all 0.4s ease-in-out;
}

/* Tampilkan dropdown dengan animasi */
.nav-item:hover .dropdown-menu,
.nav-item:focus-within .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Efek animasi pada item dropdown */
.dropdown-item {
    color: #ffffff;
    padding: 8px 20px;
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
    transform: translateX(-10px);
    opacity: 0;
    display: block;
    
}

/* Tampilkan item dropdown satu per satu dengan delay */
.dropdown-menu .dropdown-item {
    animation: slideIn 0.5s forwards;
}

.dropdown-item:nth-child(1) {
    animation-delay: 0.1s;
}
.dropdown-item:nth-child(2) {
    animation-delay: 0.2s;
}
.dropdown-item:nth-child(3) {
    animation-delay: 0.3s;
}
.dropdown-item:nth-child(4) {
    animation-delay: 0.4s;
}

/* Hover efek untuk item dropdown */
.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ff9f0f;
    transform: translateX(0);
}



/* Animasi keyframes */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-10px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Navbar Toggler */
.navbar-toggler {
    border: none;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.7%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Media Query untuk Responsif */
@media (max-width: 992px) {
    .navbar-nav {
        text-align: center;
    }
    .navbar-nav .nav-link {
        margin: 5px 0;
        padding: 10px;
    }
    .navbar-brand {
        flex-grow: 1;
        justify-content: center;
    }
}
        .hero-section {
            background-image: url('background/tampilan.jpg');
            background-size: contain; /* Memastikan seluruh gambar terlihat */
            background-position: center;
            background-attachment: fixed;
            height: 450px; /* Sesuaikan ketinggian agar proporsional dengan ukuran gambar */
            padding: 100px 0;
            text-align: center;
        }
        
        .hero-section h1 {
            font-size: 2.5rem;
            color: #ffffff;
            background-color: rgba(0, 123, 255, 0.6);
            display: inline-block;
            padding: 10px 20px;
            animation: animate__fadeInDown 1s; /* Efek animasi pada judul */
        }

  /* bagian efek logo di atas */
       .logo-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover; /* Menjaga proporsi gambar */
            margin-right: 10px;
        }

    /* */
     /* bagian efek untuk tampilan footer */
        footer {
    background-color: #06264c;
    color: #fff;
    padding: 20px 0;
    transition: background-color 0.3s; /* Tambahkan transisi untuk background */
}

.footer-contact p, .footer-operational p, .footer-services p, .footer-social a {
    transition: color 0.3s;
}

/* Efek hover pada teks footer */
.footer-contact p:hover, 
.footer-operational p:hover, 
.footer-services p:hover {
    color: #ff9f0f;
}

/* Efek hover pada ikon sosial media */
.footer-social a {
    color: #ff9f0f;
    margin-right: 10px;
    font-size: 20px;
    transition: transform 0.3s, color 0.3s;
}

.footer-social a:hover {
    transform: scale(1.2); /* Memperbesar ikon saat hover */
    color: #fff; /* Mengubah warna ikon menjadi putih saat hover */
}

/* Efek hover pada judul di setiap kolom */
.footer-contact h5, 
.footer-operational h5, 
.footer-services h5, 
.footer-social h5 {
    color: #ff9f0f;
    margin-bottom: 15px;
    transition: color 0.3s;
}

.footer-contact h5:hover, 
.footer-operational h5:hover, 
.footer-services h5:hover, 
.footer-social h5:hover {
    color: #fff;
}

/* Efek hover pada bagian copyright */
.copyright {
    margin-top: 30px;
    font-size: 14px;
    transition: color 0.3s;
}

.copyright:hover {
    color: #ff9f0f;
}
.copyright {
            margin-top: 30px; /* Menambahkan jarak di atas copyright */
            font-size: 14px;
        }

 /* bagian efek untuk font samping logo */
        .text-navbar {
            color: #faf5f5; /* warna font di samping logo */ 
        }
/* Memberikan jarak atas dan bawah bagian masukan kontak */
        .main-section {
        padding: 40px 0; /* Memberikan jarak atas dan bawah */
        margin-top: 80px; /* Tambahkan jarak agar form tidak tertutup navbar */
    }

      /* Penyesuaian bagian Tentang Kami */
      #tentang-kami {
            background-color: #f0f8ff;
            padding: 80px 0; /* Tambahkan lebih banyak padding agar lebih lega */
        }
        #tentang-kami h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #06264c;
        }
        #tentang-kami p {
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: justify;
            color: #333;
        }
        #tentang-kami img {
            border-radius: 10px; /* Membuat gambar lebih menarik dengan border radius */
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1); /* Menambahkan sedikit bayangan pada gambar */
        }
      
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top animate__animated animate__fadeInDown">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo/logo2.png') }}" alt="Logo" class="logo-circle">
                <span class="text-navbar">MyuMart</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KATEGORI</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('kategori') }}">Semua Kategori</a>
                            <a class="dropdown-item" href="{{ route('kuliner') }}">Kuliner & Camilan</a>
                            <a class="dropdown-item" href="{{ route('oleholeh') }}">Oleh-Oleh</a>
                            <a class="dropdown-item" href="{{ route('kerajinantangan') }}">Kerajinan Tangan</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create">KONTAK KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 <!-- Tentang Kami Section -->
 <section id="tentang-kami" class="section-padding text-center">
    <div class="container">
        <h2 class="mb-4">TENTANG KAMI</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>Selamat datang di informasi UMKM di Indramayu, platform yang dirancang untuk membantu memasarkan produk Usaha Mikro, Kecil, dan Menengah (UMKM) di Indramayu. Kami berkomitmen untuk memperkenalkan UMKM lokal kepada masyarakat, baik dari dalam maupun luar daerah, agar produk-produk berkualitas dari Indramayu dapat dikenal lebih luas.</p>
                <p>Website ini mempermudah pencarian UMKM di Indramayu dengan menyediakan informasi lengkap dan terperinci tentang berbagai produk. Kami juga dilengkapi dengan fitur Google Maps di setiap kategori, sehingga Anda dapat dengan mudah menemukan lokasi dan berinteraksi langsung dengan pelaku usaha.</p>
                <p>Kami percaya bahwa dengan dukungan dan visibilitas yang tepat, UMKM di Indramayu dapat berkembang dan memberikan kontribusi positif bagi perekonomian lokal. Bergabunglah dengan kami dalam mendukung dan mempromosikan produk-produk terbaik dari Indramayu!</p>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="text-center text-md-left">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-contact">
                    <h5>Hubungi Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Indramayu</p>
                    <p><i class="fas fa-phone-alt"></i> 08111480900</p>
                    <p><i class="fas fa-envelope"></i> UMKM@Gmail.com</p>
                    <p><i class="fab fa-whatsapp"></i> 08111480900</p>
                </div>
                <div class="col-md-4 footer-operational">
                    <h5>Jam Operasional UMKM</h5>
                    <p>Senin - Jumat, 08:30 sd 17:00 WIB</p>
                    <p>Sabtu-Minggu, 08:00 WIB sd 21:00 WIB</p>
                </div>
                <div class="col-md-2 footer-services">
                    <h5>Kategori</h5>
                    <p>Kuliner</p>
                    <p>Oleh-Oleh</p>
                    <p>Kerajinan Tangan</p>
                </div>
                <div class="col-md-2 footer-social">
                    <h5>Sosial Media</h5>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="text-center copyright">
                <p>&copy; 2024 Portal UMKM Indramayu. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</script>
</body>
</html>
