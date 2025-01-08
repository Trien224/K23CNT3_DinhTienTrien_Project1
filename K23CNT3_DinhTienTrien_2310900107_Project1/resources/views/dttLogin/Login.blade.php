<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>LOG IN</title>
    <link rel="icon" href=
    "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSvAM-W2pg68d53vo2QIkmHqLlDHE_8Zy8i8NLvpq3uYUx_7BFU"
            type="image/x-icon" />
    <style>
        body {
            background-color: #c1ef19;
            background-image: url('{{ asset('/images/27e7896143a04cf6b0549f2771f29201~tplv-photomode-image.jpg')}}');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
        }
        .login-container {
            background-image: url('{{ asset('/images/gioithieu3.jpg')}}');
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgb(250, 14, 191);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">Log In</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tientrien.Login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="dttTaikhoan" class="form-label">Account</label>
                <input type="text" name="dttTaikhoan" id="dttTaikhoan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dttMatkhau" class="form-label">Password</label>
                <input type="password" name="dttMatkhau" id="dttMatkhau" class="form-control" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="dttRemember" id="dttRemember" class="form-check-input">
                <label for="dttRemember" class="form-check-label">Remember</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>