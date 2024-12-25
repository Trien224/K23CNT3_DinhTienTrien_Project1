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
            background-color: rgb(255, 25, 255);
        }
        .custom-header .navbar-brand,
        .custom-header .nav-link {
            color: blue;
        }
        .custom-header .nav-link:hover {
            color: red; 
        }
        .navbar-collapse{
            font-size: 20px;
            color: white;
            
        }
    </style>
</head>
<body>
    <header class="custom-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light custom-header">
                <a class="navbar-brand" href="#">Trang Chủ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Thông Tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dttAdmin/dtt-Login">Đăng Nhập</a>
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