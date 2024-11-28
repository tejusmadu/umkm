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
            margin-left: 250px;
            padding: 40px;
            text-align: center;
        }
        .main-content h1 {
            font-size: 1.8em;
            color: #06264c;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .table th, .table td {
            border: 1px solid #ccc; /* Add border to table cells */
        }
        .table th {
            background-color: #f8f9fa; /* Light background for header */
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

        <div class="main-content">
            <h1>Edit Data</h1>
            <div class="form-container">
                <form method="POST" action="{{ route('update', $contact) }}">
                    @csrf
                    @method('PUT')

                    <table class="table">
                        <tr>
                            <th><label for="name">Nama:</label></th>
                            <td><input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required></td>
                        </tr>
                        <tr>
                            <th><label for="phone">Nomor Telepon:</label></th>
                            <td><input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" required></td>
                        </tr>
                        <tr>
                            <th><label for="email">Email:</label></th>
                            <td><input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required></td>
                        </tr>
                        <tr>
                            <th><label for="message">Pesan:</label></th>
                            <td><textarea class="form-control" id="message" name="message" rows="4" required>{{ $contact->message }}</textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <button type="submit" class="btn btn-primary">Perbarui Kontak</button>
                                <a href="{{ route('kontak') }}" class="btn btn-secondary btn-kembali">Kembali</a>
                            </td>
                        </tr>
                    </table>
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
