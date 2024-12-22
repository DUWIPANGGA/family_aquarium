<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Aquarium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
                /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
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
        header .icons a {
            color: white;
            margin: 0 8px;
            font-size: 18px;
        }
        header .icons a:hover {
            color: #64cc86;
        }
        /* Hero Section */
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
            background-color: #eeeeee;
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 600px;
            margin: auto;
        }

        .product-info {
            width: 40%;
            text-align: left;
            padding-right: 20px;
            text-align: center;
            margin-bottom: 10px;
        }

        .product-info h2 span {
            color: #6db167;
        }

        .product-image img {
            width: 100%;
            max-width: 200px;
            border-radius: 10px;
            height: auto;
        }

        /* Terlaris Bulan Ini */
        .terlaris {
            text-align: center;
            padding: 40px 20px;
            background-color: #ffffff;
        }

        .terlaris-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .terlaris .item {
            text-align: center;
        }

        .terlaris .item img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .terlaris button {
            background-color: #6db167;
            color: #ffffff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        /* Produk Unggulan */
        .unggulan {
            text-align: center;
            padding: 40px 20px;
            background-color: #f0f0f0;
        }

        .unggulan-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background-color: #ffffff;
            width: 200px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

                /* Footer container styling */
        .footer-container {
            background-color: #222;
            padding: 40px 0;
            color: #fff;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        /* Footer section */
        .footer-section {
            flex: 1;
            min-width: 180px;
            margin: 20px;
        }

        /* Heading style */
        .footer-section h4 {
            font-size: 20px;
            color: #32cd32; /* Green color */
            margin-bottom: 15px;
            font-weight: bold;
        }

        /* Paragraphs style within footer */
        .footer-section p {
            color: #ddd; /* Light gray text */
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Links styling */
        .footer-section p a {
            color: #ddd;
            text-decoration: none;
        }

        .footer-section p a:hover {
            color: #32cd32; /* Change to green on hover */
        }

        /* Footer bottom text */
        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #aaa;
            padding: 10px 0;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                text-align: center;
                margin: 10px 0;
            }
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

        .slider-track {
            display: flex;
            transition: transform 0.5s ease;
            
        }

        .slide {
            min-width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .social-icons a {
            color: #fff;
            margin-left: 10px;
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

<!-- Hero Section -->
<section class="hero">
    <div class="slider">
        <div class="slider-track">
            <!-- Slide 1 -->
            <div class="slide">
                <div class="product-info">
                    <h2><span>Family</span> Aquarium</h2>
                    <p>Ikan Arwana</p>
                    <p>20.000</p>
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
                    <p>15.000</p>
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
                    <p>10.000</p>
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


<!-- Section Terlaris Bulan Ini -->
<section class="terlaris">
    <h3>terlaris bulan ini</h3>
    <div class="terlaris-container">
        <div class="item">
            <img src="img/glofid.jpg" alt="Glowfish">
            <p>Glowfish</p>
            <button onclick="window.location.href='toko'">Go Shop</button>
        </div>
        <div class="item">
            <img src="img/manfis2.jpg" alt="Manfish">
            <p>Manfish</p>
            <button onclick="window.location.href='toko'">Go Shop</button>
        </div>
        <div class="item">
            <img src="img/koi.jpg" alt="Koi">
            <p>Koi</p>
            <button onclick="window.location.href='toko'">Go Shop</button>
        </div>
    </div>
    
</section>

<!-- Produk Unggulan -->
<section class="unggulan">
    <h3>Produk Unggulan</h3>
    <div class="unggulan-container">
        <div class="card">
            <img src="img/arwana.jpg" alt="Arwana">
            <h4>arwana</h4>
            <p>Lorem ipsum dolor sit amet...</p>
            <p>Rp600.000</p>
        </div>
        <div class="card">
            <img src="img/black gost.jpg" alt="Black Gost">
            <h4>black gost</h4>
            <p>Aenean gravida dignissim...</p>
            <p>Rp150.000</p>
        </div>
        <div class="card">
            <img src="img/oscar.jpg" alt="Oscar">
            <h4>oscar</h4>
            <p>Quisque cursus et...</p>
            <p>Rp85.000</p>
        </div>
    </div>
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

<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h4>FAMILY AQUARIUM</h4>
            <p>Jaya memberi wawasan berkarya</p>
            <p>📞 0896-1234-5678</p>
            <p>📧 FamilyAquarium@gmail.com</p>
        </div>
        <div class="footer-section">
            <h4>Produk</h4>
            <p>Ikan Hias</p>
            <p>Peralatan Ikan</p>
            <p>Lainnya</p>
        </div>
        <div class="footer-section">
            <h4>Info lebih lanjut</h4>
            <p>Home</p>
            <p>About Us</p>
            <p>Shop Locations</p>
        </div>
    </div>
</footer>

</body>
</html>
