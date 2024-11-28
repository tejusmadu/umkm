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
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
            margin-left: 15px; /* Menambahkan jarak antara link */
            padding: 8px 20px;
            font-size: 16px;
            transition: background-color 0.3s; /* Transisi untuk efek hover */
        }
        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
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
            height: 400px; /* Sesuaikan ketinggian agar proporsional dengan ukuran gambar */
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

        .product-container {
         display: flex;
         gap: 20px;
         flex-wrap: wrap;
         justify-content: center;
         padding: 20px;
         } 

         .product-card {
          width: 250px;
          border-radius: 15px;
          box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Shadow yang lebih dalam untuk efek 3D */
          overflow: hidden;
          text-align: center;
          background-color: white;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          transform-style: preserve-3d; /* Untuk efek perspektif */
       }

       .product-card:hover {
         transform: translateY(-10px) rotateX(5deg) rotateY(5deg); /* Sedikit rotasi untuk kesan 3D */
         box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3); /* Perbesar shadow saat dihover */
       }

       .product-image {
         transition: transform 0.3s ease;
       }

      .product-card:hover .product-image {
         transform: scale(1.05); /* Sedikit zoom-in pada gambar saat dihover */
       }

      .product-card img {
         width: 100%;
         aspect-ratio: 1 / 1; /* Memastikan gambar tetap proporsional */
         object-fit: cover; /* Menjaga proporsi gambar */
         max-height: 200px; /* Menjaga gambar agar tidak terlalu tinggi */
      }

    .product-info {
      padding: 15px;
    }

    .product-info h4 {
        font-size: 1.2em;
        margin: 10px 0 5px;
        font-weight: bold;
        color: #333;
    }

    .product-info p {
      font-size: 1em;
      color: #666;
      margin: 0;
    }

    .read-more-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #0a6478;
      color: white;
      border-radius: 20px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s;
    }

  .read-more-btn:hover {
    background-color: #fcfcfc;
    color: #0a6478;
   }


       .logo-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover; /* Menjaga proporsi gambar */
            margin-right: 10px;
        }
        footer {
            background-color: #06264c;
            color: #fff;
            padding: 20px 0;
        }
        .footer-logo img {
            max-width: 100%;
            height: auto;
        }
        .footer-contact, .footer-operational, .footer-services, .footer-social {
            margin-bottom: 20px;
        }
        .footer-contact h5, .footer-operational h5, .footer-services h5, .footer-social h5 {
            color: #ff9f0f;
            margin-bottom: 15px;
        }
        .footer-contact p, .footer-operational p, .footer-services p, .footer-social p {
            margin-bottom: 10px;
        }
        .footer-social a {
            color: #ff9f0f;
            margin-right: 10px;
            font-size: 20px;
        }
        .section-padding {
            padding: 60px 0;
        }
        .text-navbar {
            color: #faf5f5; /* warna font di samping logo */ 
        }
        .copyright {
            margin-top: 30px; /* Menambahkan jarak di atas copyright */
            font-size: 14px;
        }
        dropdown-menu .dropdown-item {
            color: #000; /* Warna teks default untuk item dropdown */
            transition: background-color 0.3s; /* Transisi untuk efek hover */
        }
        .dropdown-menu .dropdown-item:hover {
            background-color: rgba(201, 200, 116, 0.2); /* Efek hover pada item dropdown */
            color: #000; /* Mengatur warna teks saat hover */
        }
        .product-image {
         width: 100%;
         height: auto;
         object-fit: cover; /* Menjaga proporsi gambar */
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
                        <a class="dropdown-item" href="{{ route('kuliner') }}">Kuliner</a>
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


<!-- Hero Section -->
<section class="hero-section mt-5">
    <div class="container">
        <h1 class="animate__animated animate__zoomIn">Selamat Datang di UMKM Indramayu</h1>
    </div>
</section>


    <div class="container my-5">
        <h2 class="text-center mb-4">Kategori UMKM</h2>
        <div class="product-container">
            <!-- Carousel Kuliner -->
            <div class="product-card">
                <div id="carouselKuliner" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('kategori/kuliner.png') }}" alt="Kuliner" class="product-image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('kategori/sempol.png') }}" alt="Kuliner" class="product-image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('kategori/blengep.png') }}" alt="Kuliner" class="product-image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('kategori/gomyangmayung.png') }}" alt="Kuliner" class="product-image">
                        </div>
                    </div>
                    <!-- Controls for carousel -->
                    <a class="carousel-control-prev" href="#carouselKuliner" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselKuliner" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="product-info">
                    <h4>Kuliner</h4>
                    <p>Rekomendasi Kuliner & Camilan di Indramayu</p>
                    <a href="{{ route('kuliner') }}" class="read-more-btn">Jelajahi ➔</a>
                </div>
            </div>
            
            <!-- Carousel Oleh-Oleh -->
            <div class="product-card">
                <div id="carouselOleh" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('kategori/oleh.png') }}" alt="Oleh-Oleh" class="product-image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('kategori/mangga2.png') }}" alt="Oleh-Oleh" class="product-image">
                        </div>
                    <div class="carousel-item">
                        <img src="{{ asset('kategori/dodol.png') }}" alt="Oleh-Oleh" class="product-image">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselOleh" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselOleh" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="product-info">
                    <h4>Oleh-Oleh</h4>
                    <p>Temukan berbagai oleh-oleh khas dari Indramayu.</p>
                    <a href="{{ route('oleholeh') }}" class="read-more-btn">Jelajahi ➔</a>
                </div>
            </div>
    
            <!-- Carousel Kerajinan Tangan -->
            <div class="product-card">
                <div id="carouselKerajinan" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('kategori/tas.png') }}" alt="Kerajinan Tangan" class="product-image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('kategori/anyamanbambu.png') }}" alt="Kerajinan Tangan" class="product-image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('kategori/kaintanun.png') }}" alt="Kerajinan Tangan" class="product-image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselKerajinan" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselKerajinan" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="product-info">
                    <h4>Kerajinan Tangan</h4>
                    <p>Aneka produk kerajinan tangan asli Indramayu.</p>
                    <a href="{{ route('kerajinantangan') }}" class="read-more-btn">Jelajahi ➔</a>
                </div>
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
</body>
</html>