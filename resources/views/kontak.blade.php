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
        
        /* Table */
        #table-container {
            width: 100%;
            overflow-x: auto;
            margin: 20px auto;
        }

        #table {
            width: 100%;
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
            <h1>Data Terbaru</h1>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div id="table-container">
                <table id="table" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Pesan</th>
                            <th>Tanggal</th> <!-- Tambahkan kolom Tanggal -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at->format('d-m-Y') }}</td> <!-- Menampilkan tanggal -->
                            <td>
                                <a href="{{ route('edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('destroy', $contact->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No contacts available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
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
