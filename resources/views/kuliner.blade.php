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


        /* bagian efek untuk tampilan produk */

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 40px; /* Menambahkan margin untuk jarak antar produk dan elemen lainnya */
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2), 0px 4px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background: linear-gradient(145deg, #f0f0f0, #ffffff);
        }

       .product-card:hover {
           transform: scale(1.02) translateY(-5px); /* Menambah kesan terangkat saat hover */
           box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.3), 0px 6px 6px rgba(0, 0, 0, 0.15); /* Shadow lebih intens saat hover */
       }
        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-card .price {
            color: #ff9f0f;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .btn-custom {
            background-color: #06264c;
            color: white;
            border-radius: 5px;
        }
        .category {
          display: inline-block;
          background-color: #ff9f0f; /* Warna latar belakang kategori */
          color: #fff; /* Warna teks kategori */
          font-weight: bold;
          padding: 5px 10px; /* Memberikan ruang pada teks kategori */
          border-radius: 15px; /* Membuat sudut melingkar */
          font-size: 0.9rem; /* Ukuran font kategori */
          margin-top: 10px; /* Memberi jarak antara kategori dan gambar */
          margin-bottom: 10px; /* Memberi jarak antara kategori dan elemen lain */
        }
        
 /* */

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
<!--bagian produk-->
    <!-- Kategori Kuliner -->
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex">
            @foreach($images as $image)
                @if($image->category == 'kuliner')
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="product-card">
                            <img src="{{ asset($image->image_path) }}" alt="{{ $image->description }}">
                            <p class="category">{{ $image->category }}</p>
                            <h5 class="mt-3">{{ $image->description }}</h5>
                            <p class="price">Rp {{ number_format($image->price, 0, ',', '.') }}</p>
                            <a href="{{ $image->whatsapp_link }}" target="_blank" class="btn btn-custom btn-sm"><i class="fab fa-whatsapp"></i> Pesan</a>
                            <a href="{{ $image->google_maps_link }}" target="_blank" class="btn btn-custom btn-sm"><i class="fas fa-map-marker-alt"></i> Lokasi</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>   
    </div>
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
