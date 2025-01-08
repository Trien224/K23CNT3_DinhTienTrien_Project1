<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Header</title>
    <link rel="icon" href=
"https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSvAM-W2pg68d53vo2QIkmHqLlDHE_8Zy8i8NLvpq3uYUx_7BFU"
        type="image/x-icon" />
    <style>
        .custom-header {
            background-color: rgb(00, 33, 66);
        }
        .custom-header .navbar-brand,
        .custom-header .nav-link {
            color: blue;
        }
        .custom-header .nav-link:hover {
            color: red; 
        }
        .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        }
        .navbar-collapse{
            font-size: 20px;
            color: white;
            
        }
        .navbar-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            font-weight: bold;
            color: rgb(255, 255, 255);
        }
        nav a {
        padding: 0.5rem 1rem;
        margin: 0 1rem;
    }
    body {
        font-family: 'Arial', sans-serif;

    }

    </style>
</head>
<body>
    <header class="custom-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light custom-header">
                <a class="btn btn-light" href="/dttAdmin/Home" role="button">Trang Chủ</a>
                <div class="navbar-center">
                    <h1>Store DttPhotoPhoto</h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="btn btn-light" href="/dttAdmin" role="button">Thông Tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light" href="/dttAdmin/dtt-Login" role="button">Đăng Nhập</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>