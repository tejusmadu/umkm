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

        <main role="main" class="main-content">
            <h1>SELAMAT DATANG DI DASHBOARD ADMIN</h1>
        </main>
    </div>

    <div class="footer">
        COPYRIGHT © 2024 UMKM INDRAMAYU
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
