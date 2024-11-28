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
        /* tabel */
        #table-container {
            width: 100%;
            overflow-x: auto;
            margin: 20px auto;
        }

        #table {
            width: 100%;
            margin-top: 20px;
        }

        .wrapper {
            display: flex;
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
            <h1>Data Tabel Produk</h1>
        
            <!-- Wrapper for Button and Table -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- Tombol Tambah Produk -->
                <a href="test" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Tambah Produk
                </a>
            </div>
        
            <!-- Display success message -->
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
                            <th>NO</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>LINK WHATSAPP</th>
                            <th>LINK GOOGLE MAPS</th>
                            <th>GAMBAR</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data Loop -->
                        @foreach($images as $image)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $image->description }}</td>
                                <td>{{ $image->category }}</td>
                                <td>Rp {{ number_format($image->price, 0, ',', '.') }}</td>
                                <td><a href="{{ $image->whatsapp_link }}" target="_blank" class="btn btn-link">Chat</a></td>
                                <td><a href="{{ $image->google_maps_link }}" target="_blank" class="btn btn-link">View</a></td>
                                <td>
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#imageModal{{ $loop->index }}">
                                        <img src="{{ asset($image->image_path) }}" alt="{{ $image->description }}" style="max-width: 100px; max-height: 100px;">
                                    </button>
                                </td>
                                <td>
                                    <a href="{{ route('inputdata.edit', $image->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('inputdata.destroy', $image->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal for image preview -->
                            <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel">Gambar {{ $image->description }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset($image->image_path) }}" alt="{{ $image->description }}" style="width: 100%;">
                                            <p>{{ $image->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
        </div>
    </div>
</body>
</html>

