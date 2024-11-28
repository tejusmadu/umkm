<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f5f5f5;
            color: #1a1a1a;
        }

        .wrapper {
            display: flex;
        }

        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            background-color: #06264c;
            color: white;
            padding-top: 20px;
        }

        .sidebar h4 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f4a261;
            margin-bottom: 40px;
            font-size: 1.2em;
        }

        .sidebar h4 i {
            margin-right: 8px;
        }

        .sidebar .nav-link {
            color: #f4a261;
            font-weight: bold;
            padding: 8px 20px;
            font-size: 1em;
        }

        .sidebar .nav-link:hover {
            background-color: #0b396a;
            color: white;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            font-size: 1.1em;
        }

        .main-content {
            margin-left: 250px;
            padding: 40px;
            text-align: center;
        }

        .main-content h1 {
            font-size: 1.8em;
            color: #06264c;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 0.85em;
            color: #f4a261;
            position: fixed;
            bottom: 0;
            width: calc(100% - 250px);
            margin-left: 250px;
            background-color: #f5f5f5;
        }

        /* Form container styling */
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            border: 2px solid #000000; /* Add border */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Add shadow effect */
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
            <h4>
                <a href="dashboard" style="color: #f4a261; text-decoration: none;">
                    <i class="bi bi-speedometer2"></i> DASHBOARD ADMIN
                </a>
            </h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="inputdata">
                        <i class="bi bi-file-earmark-plus"></i> Input Data
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="bi bi-clock-history"></i> Riwayat Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts">
                        <i class="bi bi-telephone"></i> Kontak
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        
        <div class="main-content">
            <h1>Input Data Produk</h1>
            <div class="form-container">
                <form action="{{ route('inputdata.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="kuliner">Kuliner</option>
                            <option value="oleh-oleh">Oleh-oleh</option>
                            <option value="kerajinan tangan">Kerajinan Tangan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp_link" class="form-label">Link WhatsApp</label>
                        <input type="url" class="form-control" id="whatsapp_link" name="whatsapp_link" required>
                    </div>
                    <div class="mb-3">
                        <label for="google_maps_link" class="form-label">Link Google Maps</label>
                        <input type="url" class="form-control" id="google_maps_link" name="google_maps_link" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('inputdata') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        COPYRIGHT © 2024 UMKM INDRAMAYU
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
