<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Aquarium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        header {
            background-color: #000;
            padding: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            font-size: 24px;
            font-weight: bold;
            color: #64cc86;
        }
        header nav {
            display: flex;
            align-items: center;
        }

        header nav a {
            margin: 0 8px;
            color: white;
            text-decoration: none;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 15px; /* Jarak antar ikon */
        }

        .icon-link {
            text-decoration: none;
            color: #333; /* Warna ikon */
            font-size: 20px; /* Ukuran ikon */
            transition: color 0.3s; /* Transisi warna */
        }

        .icon-link:hover {
            color: #007bff; /* Warna saat hover */
        }

        header .icons a {
            color: white;
            margin: 0 8px;
            font-size: 18px;
        }

        header .icons a:hover {
            color: #64cc86;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .slider {
            margin: 20px 0;
            display: flex;
            align-items: center;
            overflow: hidden;
            width: 100%;
        }

        .slider-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider img {
            max-width: 400px;
            border-radius: 8px;
        }

        .slider-text {
            margin-left: 20px;
        }
        
        .slider-text h2 {
            font-size: 24px;
            color: #64cc86;
        }
        .slider-text p {
            font-size: 14px;
            color: #555;
        }
        .slider .arrow {
            font-size: 24px;
            color: #64cc86;
            cursor: pointer;
        }

        .slide {
            min-width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        footer {
            background-color: #222;
            color: #fff;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
        }

        ul{
            list-style: none;
            padding: 0;
        }
        

        .subscribe {
            display: flex;
            margin-top: 20px;
        }

        .subscribe input {
            padding: 10px;
            border: none;
            border-radius: 5px 0 0 5px;
            margin-right: 5px;
        }

        .subscribe button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border
        }

        .copyright{
           justify-content: 
           text-align: 
        }
        .footer {
            background-color: #222; /* Background color */
            padding: 40px 0;
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

         /* Mengatur Footer */
         .footer {
            background-color: #333;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .footer a {
            color: #28a745;
            text-decoration: none;
        }

        .footer a:hover {
            color: #ffffff;
        }
        .col-md-4 {
            position: absolute;
            top: 25%;
            right: 0;
            transform: translateY(-50%);
        }

        .col-md-4 img {
            width: 300px; /* Sesuaikan ukuran sesuai kebutuhan */
            height: auto;
            object-fit: cover;
        }

        .container {
            max-width: 1200px;
            margin: left;
            padding: 60px;
        }
        .footer {
            background-color: #222; /* Background color */
            padding: 40px 0;
            color: #fff;
        }

        .footer-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-col {
            flex: 1;
            min-width: 180px; /* Lebar minimum untuk kolom */
            margin: 20px;
        }

        .footer-col h4 {
            font-size: 20px;
            color: #32cd32; /* Warna hijau */
            margin-bottom: 15px;
            font-weight: bold;
        }

        .footer-col ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #ddd; /* Warna abu-abu terang untuk link */
            text-decoration: none;
            font-size: 16px;
        }

        .footer-col ul li a:hover {
            color: #32cd32;
        }

        .subscribe input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .subscribe button {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #32cd32;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        .subscribe button:hover {
            background-color: #28a428;
        }

        .social-links a {
            color: #fff;
            font-size: 20px;
            margin-right: 10px;
            text-decoration: none;
        }

        .social-links a:hover {
            color: #32cd32;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #aaa;
        }

        .product-info {
            text-align: center;
            margin-bottom: 10px;
        }

        .product-image img {
            width: 100%;
            max-width: 300px;
            height: auto;
        }

        button.prev, button.next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        button.prev {
            left: 10px;
        }

        button.next {
            right: 10px;
        }

        .hero {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 600px;
            margin: auto;
        }
        .social-icons a {
            color: #fff;
            margin-left: 10px;
        }

        .input-group {
            display: flex;
            align-items: center;
            margin-left: 10px; /* Jarak antar ikon dan input */
        }

        .form-control {
            border-radius: 4px; /* Sudut input */
            border: 1px solid #ccc; /* Border input */
            padding: 5px 10px; /* Padding input */
            width: 200px; /* Lebar input */
        }

        .input-group-text {
            border-radius: 4px; /* Sudut tombol */
            background-color: #007bff; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            border: none; /* Hilangkan border */
            cursor: pointer; /* Tanda kursor pointer */
        }

        .input-group-text .btn-go {
            padding: 5px 10px; /* Padding tombol */
            border: none; /* Hilangkan border */
            background: none; /* Hilangkan latar belakang */
            color: white; /* Warna teks */
            cursor: pointer; /* Tanda kursor pointer */
        }
</style>
</head>
<body>

    <header>
        <div class="social-icons">
            <a href="https://yourapp.com" target="_blank"><i class="fas fa-times"></i></a>
            <a href="https://www.facebook.com/yourpage" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        
        <h1>FAMILY AQUARUM</h1>
        <nav>
            <a href="{{url('home')}}">HOME</a>
            <a href="{{url('about')}}">ABOUT</a>
            <a href="{{url('toko')}}">TOKO</a>
            <a href="{{url('kontak')}}">KONTAK</a>
            <div class="icons">
                <a href="javascript:void(0);" onclick="toggleSearch()" class="icon-link"><i class="fas fa-search"></i></a>
                <div class="input-group" id="searchGroup" style="display: none;">
                    <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                    <div class="input-group-text">
                        <button type="button" onclick="submitSearch()" class="btn-go">Go</button>
                    </div>
                </div>
                
                <a href="{{ route('keranjang_Items.index') }}" class="icon-link"><i class="fas fa-shopping-cart"></i></a>
                <a href="{{ route('profil.index') }}" class="icon-link"><i class="fas fa-user"></i></a>
            </div>
            
            <!-- JavaScript -->
            <script>
                function toggleSearch() {
                    const searchGroup = document.getElementById('searchGroup');
                    searchGroup.style.display = searchGroup.style.display === "none" ? "flex" : "none"; // toggle display
                }
            
                function submitSearch() {
                    const query = document.getElementById('inputMobileSearch').value;
                    alert('Searching for: ' + query); // Ganti dengan logika pencarian yang sesuai
                }
            </script>
            </div>
            @if (Auth::check())
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: white; cursor: pointer; margin-left: 8px;">LOGOUT</button>
                </form>
            @else
                <a href="{{ route('login') }}" style="color: white; margin-left: 8px;">Login</a>
            @endif
        </nav>
    </header>

    <section class="hero">
        <div class="slider">
            <div class="slider-track">
                <!-- Slide 1 -->
                <div class="slide">
                    <div class="product-info">
                        <h2><span>Family</span> Aquarium</h2>
                        <p>Ikan Arwana</p>
                        <p>Harga: 20.000</p>
                        <p>Arwana adalah ikan air tawar yang terkenal dengan keindahan warna sisiknya dan dipercaya membawa keberuntungan.</p>
                    </div>
                    <div class="product-image">
                        <img src="img/arwana.jpg" alt="Ikan Arwana">
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide">
                    <div class="product-info">
                        <h2><span>Family</span> Aquarium</h2>
                        <p>Ikan Koi</p>
                        <p>Harga: 15.000</p>
                        <p>Ikan Koi adalah simbol keberuntungan dan persahabatan, sering dipelihara dalam kolam karena keindahan warnanya.</p>
                    </div>
                    <div class="product-image">
                        <img src="img/koi.jpg" alt="Ikan Koi">
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="slide">
                    <div class="product-info">
                        <h2><span>Family</span> Aquarium</h2>
                        <p>Ikan Cupang</p>
                        <p>Harga: 10.000</p>
                        <p>Cupang adalah ikan kecil dengan sirip yang berwarna-warni, mudah dipelihara, dan sering dijadikan ikan hias.</p>
                    </div>
                    <div class="product-image">
                        <img src="img/cupang.jpg" alt="Ikan Cupang">
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Buttons -->
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </section>
    
    <script>
        const sliderTrack = document.querySelector('.slider-track');
    const slides = Array.from(document.querySelectorAll('.slide'));
    let currentIndex = 0;
    
    function updateSlidePosition() {
        sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
    
    document.querySelector('.next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlidePosition();
    });
    
    document.querySelector('.prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlidePosition();
    });
    
    </script>
    
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Family Aquarium</h4>
                    <p>Jl. Jaya rambat wetan bangkir<br>0858-1029-1417<br>FamilyAquarium@gmail.com</p>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Produk</h4>
                    <ul>
                        <li><a href="#">Ikan Hias</a></li>
                        <li><a href="#">Pakan Ikan</a></li>
                        <li><a href="#">Lainnya</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Info lebih lanjut</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Shop Locations</a></li>
                        </ul>
                </div>
                <div class="footer-col subscribe">
                        <h4>Subscribe</h4>
                        <input type="email" placeholder="Email address">
                        <button>Subscribe</button>
                </div>
            </div>
            <div class="footer-bottom">
                    <p>&copy; 2024 Family Aquarium | Designed by Kelompok 2</p>
            </div>
            </div>
        </div>
</footer>
</body>
</html>
