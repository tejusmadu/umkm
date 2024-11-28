<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background & Layout */
        body {
            background-image: url('{{ asset("background/tampilan.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        /* Glassmorphism Effect */
        .form-container {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 30px;
            width: 100%;
            max-width: 350px;
        }

        /* Form Layout */
        .centered-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Button Style */
        .btn-center {
            display: flex;
            justify-content: center;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.6);
        }

        /* Input Styling */
        .form-control {
            background: rgba(255, 255, 255, 0.6);
            border: none;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 15px;
        }

        /* Placeholder Text */
        .form-control::placeholder {
            color: #666;
        }

        /* Fade-in Animation */
        .form-container {
            animation: fadeIn 1s ease-in-out;
        }

        /* Keyframes for Fade-in */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Instruction Text */
        p {
            color: #333;
            font-size: 0.9rem;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#" style="position: absolute; left: 50%; transform: translateX(-50%);"></a>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 centered-form">
                <div class="text-center"></div>
                <div class="form-container">
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Username:</label>
                            <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="Masukan username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Masukan password">
                        </div>
                        <div class="btn-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <p style="text-align: center;">Masukan username dan password</p>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
