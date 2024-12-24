<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>LOG IN</title>
    <style>
        body {
            background-color: #c1ef19;
        }
        .login-container {
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
        <h2 class="text-center">LOG IN</h2>

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
                <label for="dttMatkhau" class="form-label">Pass</label>
                <input type="text" name="dttMatkhau" id="dttMatkhau" class="form-control" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="dttRemember" id="dttRemember" class="form-check-input">
                <label for="dttRemember" class="form-check-label">Ghi nhớ</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>