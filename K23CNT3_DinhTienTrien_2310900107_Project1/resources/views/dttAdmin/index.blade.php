@extends('_dttLayouts.backend._master')
@section('title', 'Dịch Vụ Chụp Ảnh')
@section('content-body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<h1 class="animate__animated animate__fadeIn animate__bounce animate__zoomIn" style="color: rgb(0, 0, 0)"> 

<section id="about" class="container">
    <h2 class="section-title">Về Chúng tôi</h2>
    <p class="section-content">Chúng tôi là đội ngũ nhiếp ảnh gia chuyên nghiệp, cung cấp các dịch vụ chụp ảnh từ cá nhân, gia đình đến sự kiện doanh nghiệp.</p>
    <p class="section-content">Với kinh nghiệm lâu năm và thiết bị hiện đại, chúng tôi mang đến những khoảnh khắc đẹp nhất cho bạn.</p>
    
    <h2 class="section-title">Dịch Vụ Chụp Ảnh</h2>
    <ul class="section-content">
        <li>Chỉnh ảnh</li>
        <li>Chụp ảnh sự kiện</li>
        <li>Chụp ảnh cưới</li>
        <li>Chụp ảnh gia đình</li>
    </ul>
</section>

<section id="portfolio" class="container">
    <h2 class="section-title">Bộ Sưu Tập</h2>
    <div class="products">
        <div class="product-item">
            <img src="/images/gioithieu.jpg" alt="Ảnh Mẫu 1"><br>
            <h3>Khoảnh khắc đẹp</h3>
        </div>
        <div class="product-item">
            <img src="/images/gioithieu3.jpg" alt="Ảnh Mẫu 2"><br>
            <h3>Ảnh sự kiện</h3>
        </div>
        <div class="product-item">
            <img src="/images/gioithieu0.jpg" alt="Ảnh Mẫu 3"><br>
            <h3>Chỉnh ảnh</h3>
        </div>
    </div>
</section>

<footer id="contact" class="footer">
    <div class="container">
        <h2 class="section-title">Liên Hệ</h2>
        <p class="section-content">Email: DttPhoto@photography.com | Hotline: 0123 456 789</p>
    </div>
</footer>

<style>
    body {
        padding: 0;
        margin: 0;
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    h2.section-title {
        font-size: 2.5rem;  /* Adjusts the font size for h2 */
        margin-bottom: 1rem;
        color: #333;
    }

    p.section-content, ul.section-content {
        font-size: 1.2rem;  /* Adjusts the font size for paragraphs and lists */
        line-height: 1.6;
        margin-bottom: 1rem;
        color: #555;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .products {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .product-item {
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        margin: 10px;
        text-align: center;
        width: 300px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-item img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    .product-item:hover img {
        transform: scale(1.05);
    }

    .product-item:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .product-item h3 {
        margin-top: 10px;
        transition: color 0.3s ease;
    }

    .product-item:hover h3 {
        color: #f39c12;
    }

    .footer {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        margin-top: 20px;
    }

    .footer p {
        font-size: 1.1rem;
    }

    nav {
        background-color: #4CAF50;
        padding: 0.5rem 0;
        text-align: center;
    }

    /* Ensuring responsive design */
    @media screen and (max-width: 768px) {
        .products {
            flex-direction: column;
            align-items: center;
        }

        .product-item {
            width: 80%;
            margin: 10px 0;
        }
    }

    /* Ensuring animations work smoothly with proper spacing and styles */
    .animate__animated {
        animation-duration: 1.5s;
    }
</style>

@endsection
