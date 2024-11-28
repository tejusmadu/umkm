<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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
        .sidebar .nav-link {
            color: #f4a261;
            font-weight: bold;
            padding: 8px 20px;
        }
        .main-content {
            margin-left: 250px; /* Offset to the right to avoid sidebar overlap */
            padding: 40px;
            text-align: center;
        }
        .container {
            margin-left: 250px; /* Adjust container to align with main content */
            max-width: calc(100% - 250px); /* Prevent overflow */
        }
        .card {
            margin-top: 20px;
        }
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
        .btn-kembali {
            margin-left: 10px;
            text-decoration: none; /* Remove underline from link */
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
                    <a class="nav-link" href="riwayat">
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
    </div>
    
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Pengguna</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('update_login', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password (Opsional)</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('riwayat') }}" class="btn btn-secondary">Batal</a>
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
