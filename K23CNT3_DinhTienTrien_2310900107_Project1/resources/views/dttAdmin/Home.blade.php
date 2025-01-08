@extends('_dttLayouts.backend._master')
@section('title', 'Dịch Vụ Chụp Ảnh')
@section('content-body')
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></head>
<body>
<h1 class="animate__animated animate__fadeIn animate__bounce animate__zoomIn" style="color: rgb(0, 0, 0)" > 
            <i class="fa-solid fa-circle-user">Chào Mừng Quý Khách Với Store Chụp Ảnh DttPhotoPhoto!</i>
            <p>Chúng tôi chuyên cung cấp dịch vụ chụp ảnh chuyên nghiệp cho các sự kiện, lễ cưới và nhiều dịch vụ ảnh khác.</p>
<main>
    <section id="services">
        <div>
            <h3>Chụp Ảnh Cưới</h3>
            <p>Lưu giữ những khoảnh khắc hạnh phúc trong ngày trọng đại của bạn.</p>
        </div>
        <div>
            <h3>Chụp Ảnh Gia Đình</h3>
            <p>Ghi lại những kỷ niệm đáng nhớ cùng gia đình thân yêu.</p>
        </div>
        <div>
            <h3>Chụp Ảnh Sản Phẩm</h3>
            <p>Giúp sản phẩm của bạn nổi bật và thu hút khách hàng.</p>
        </div>
    </section>
</main> </h1>
<footer id="contact" class="footer">
    <div class="container">
        <h2>Liên Hệ</h2>
        <p>Email: DttPhotoPhoto@photography.com | Hotline: 0123 456 789</p>
    </div>
</footer>
<style>
      h1{
            border-radius: 5px;
            text-align: center;
            /* font-weight: bold; ko hoạt động */
            padding: 50px;
            font-size: 36px;
            
        }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #000000; /* Light Text */
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    p {
        text-align: center;
        font-size: 1.1rem;
        color: #000000;
    }

    #services {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-top: 40px;
    }

    #services div {
        background-color: #34495e; /* Darker Blue-Green */
        border-radius: 8px;
        padding: 30px;
        width: 300px;
        margin: 15px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    #services div:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }
    #services p {
        color: #bdc3c7;
        font-size: 1.1rem;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        margin-top: 40px;
    }

    nav {
        background-color: #16a085; /* Teal/Blue-Green Background */
        padding: 0.5rem 0;
        text-align: center;
    }
    nav a:hover {
        color: #ecf0f1; /* Light Text Hover */
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        #services {
            flex-direction: column;
            align-items: center;
        }

        #services div {
            width: 90%;
            margin: 10px 0;
        }
    }
</style>

@endsection
