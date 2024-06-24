<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB</title>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    
    <style>
        body {
            position: relative;
            background-image: url('{{ asset('sma.png') }}'); /* Ganti dengan URL gambar latar belakang yang diinginkan */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; /* Menghentikan pengulangan gambar */
            display: flex;
            justify-content: flex-end; /* Memindahkan card ke sisi kanan */
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            width: 320px;
            margin-right: 200px; /* Menambahkan jarak yang lebih besar dari tepi kanan */
            margin-left: 50px; /* Menambahkan jarak dari tepi kiri */
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .card-content {
            text-align: center;
        }

        h2 {
            color: #333333;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666666;
        }

        input[type="text"] {
            width: calc(100% - 10px);
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="password"] {
            width: calc(100% - 10px);
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .toggle-password {
            float: right;
            color: #666666;
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .additional-options {
            margin-top: 20px;
        }

        .additional-options a {
            color: #007bff;
            text-decoration: none;
        }

        .additional-options span {
            margin: 0 10px;
            color: #666666;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center login-container">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('prosesLogin') }}" method="post">
                            @csrf
                            <h3 class="card-content">Sign In</h3>
                            <hr>
                            @if (session('success'))
                                <div id="alert" class="alert alert-success alert-dismissible fade show"
                                    role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @elseif (session('failed'))
                                <div id="alert" class="alert alert-danger alert-dismissible fade show"
                                    role="alert">
                                    {{ session('failed') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="mb-3 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control " required>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary">Login</button>
                                <p class="text-center additional-options">
                                    {{-- Route Ke Halaman Register --}}
                                    Don't have an account yet? <a href="{{ route('register') }}">Sign Up</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
