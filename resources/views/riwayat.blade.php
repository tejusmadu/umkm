<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Riwayat Login</title>
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
            height: 100vh;
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
            padding: 10px 20px;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: #0b396a;
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 40px;
            text-align: center;
            overflow-y: auto;
        }

        .main-content h1 {
            font-size: 1.8em;
            color: #06264c;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 0.85em;
            color: #f4a261;
            background-color: #f5f5f5;
            position: absolute;
            bottom: 0;
            width: calc(100% - 250px);
            margin-left: 250px;
        }

        #table-container {
            width: 100%;
            overflow-x: auto;
            margin: 20px auto;
        }

        #table {
            width: 100%;
            margin-top: 20px;
        }

        /* Notification styling */
        .alert {
            font-size: 0.9em;
            padding: 10px 20px;
            margin: 20px auto;
            text-align: center;
            border-radius: 5px;
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

        <div class="main-content">
            <h1>Riwayat Login Admin</h1>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            <div class="d-flex align-items-center mb-3">
                <a href="{{ route('register.submit') }}" class="btn btn-primary mr-2">
                    Tambah Data Admin
                </a>
            </div>
            <div id="table-container">
                <table class="table table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('edit_login', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('delete_user', $user->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="footer">
            COPYRIGHT © 2024 UMKM INDRAMAYU
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
