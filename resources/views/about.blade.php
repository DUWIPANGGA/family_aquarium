<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Aquarium</title>

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
                /* Mengatur Header */
            /* Styling untuk .header - bisa digunakan untuk bagian header utama */
        .header {
        background-color: #28a745;
        color: white;
        padding: 10%;
        text-align: center;
        }

        /* Styling link dalam .header */
        .header a {
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        }

        .header a:hover {
        background-color: #218838;
        color: white;
        }

        /* Styling untuk header utama - mengatur layout dasar */
        header {
        background-color: #000;
        padding: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        /* Judul dalam header */
        header h1 {
        font-size: 24px;
        font-weight: bold;
        color: #64cc86;
        }

        /* Navigasi dalam header */
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

        /* Ikon dalam header */
        header .icons a {
        color: white;
        margin: 0 8px;
        font-size: 18px;
        }

        header .icons a:hover {
        color: #64cc86;
        }

        /* Mengatur Banner */
        .banner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 20px;
            color: white;
            background-color: #28a745;
        }

        .banner h1 {
            font-size: 2.5em;
            margin: 0;
        }

        .banner p {
            margin-top: 10px;
            font-size: 1.2em;
        }

        #our-services {
            padding: 40px 20px;
            background-color: #f8f9fa;
            max-width: 800px; /* Mengatur lebar maksimum */
            margin: 0 auto; /* Pusatkan section */
            border-radius: 10px; /* Membuat sudut membulat */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
        }
        /* Mengatur Bagian Layanan */
        .service {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: #ffffff;
            transition: transform 0.3s; /* Efek transisi saat hover */
        }

        .service:hover {
            transform: translateY(-5px); /* Efek hover */
        }
        .service-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease;
            width: 200px; /* Atur lebar kartu agar seragam */
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 3em;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        h3 {
            color: #007bff; /* Warna subjudul */
            margin-top: 10px; /* Jarak di atas judul layanan */
        }

        .service-details {
            margin-top: 15px; /* Jarak di atas detail layanan */
            padding: 10px 15px;
            border-top: 1px solid #dee2e6;
        }
        .service-card i {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 15px;
        }

        .service-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }

        /* Mengatur Bagian Produk */
        .brands {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .carousel-wrapper {
            position: relative;
        }

        .carousel .carousel-inner {
            display: flex;
            gap: 20px;
        }

        .carousel .carousel-item {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .carousel .brand-img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .carousel-controls a {
            color: #333;
            font-size: 2em;
        }

        .carousel-controls a:hover {
            color: #28a745;
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
            top: 40%;
            right: 0;
            transform: translateY(-50%);
        }

        .col-md-4 img {
            width: 320px; /* Sesuaikan ukuran sesuai kebutuhan */
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
        .brands {
            background-color: #f8f9fa;
            text-align: center; /* Memusatkan semua teks dalam section */
        }

        .brands h1 {
            margin-bottom: 15px; /* Jarak di bawah judul */
        }

        .brands p {
            margin-bottom: 30px; /* Jarak di bawah paragraf */
        }
        .carousel-wrapper {
            position: relative;
        }

        .carousel-inner {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            justify-content: center; /* Membuat gambar lebih ke tengah */
        }

        .carousel-item {
            scroll-snap-align: start;
            flex: 0 0 auto;
            transition: transform 0.5s ease;
            padding: 0 10px; /* Memberikan padding pada setiap item agar ada jarak */
        }

        .carousel-item .row {
            display: flex;
            justify-content: center; /* Gambar akan berada di tengah kolom */
            align-items: center;
        }

        .carousel-item img {
            width: 100%;
            max-width: 120px;
            height: auto;
            opacity: 0.8;
            transition: opacity 0.3s ease;
            margin: 0 auto; /* Menempatkan gambar ke tengah */
        }

        .carousel-item img:hover {
            opacity: 1;
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-controls a {
            color: #333;
            text-decoration: none;
            font-size: 2rem;
            padding: 0 15px;
            opacity: 0.7;
        }

        .carousel-controls a:hover {
            opacity: 1;
        }
        .col-lg-6.m-auto {
            text-align: center; /* Membuat teks berada di tengah secara horizontal */
            padding: 20px; /* Menambahkan padding atas dan bawah agar ada jarak */
            align-items: center;
            display: flex; /* Menggunakan flexbox untuk center alignment */
            flex-direction: column; /* Menyusun elemen secara vertikal */
            justify-content: center;
        }

        .col-lg-6.m-auto h1 {
            font-size: 2em; /* Menyesuaikan ukuran font judul */
            font-weight: bold; /* Menebalkan teks judul */
            color: #000000; /* Mengatur warna teks */
        }

        .col-lg-6.m-auto p {
            font-size: 1em; /* Ukuran font deskripsi */
            color: #555; /* Warna teks deskripsi */
            margin-top: 10px; /* Memberikan jarak antara judul dan deskripsi */
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
                <a href="{{ route('login') }}" style="color: white; margin-left: 8px;">Register</a>
            @endif
        </nav>
    </header>
<!-- Start Banner -->
<section class="banner py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8">
                <h1>Family Aquarium</h1>
                <div class="col-md-4">
                    <img src="{{ asset('img/ikann.png') }}" alt="Ikan" class="w-full h-48 object-cover">
                </div>
                <p>
                    Merupakan toko penjualan berbagai macam Ikan Hias dan
                    Alat Pemeliharaan Aquarium yang tersedia dengan berbagai jenis dan ukuran.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Close Banner -->

<!-- Start Our Services Section -->
<section class="container-py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1>Our Services</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <section id="our-services">    
        <div class="service" onclick="toggleDetails('delivery-details')">
            <div class="service-icon text-success text-center">
                <i class="fa fa-truck fa-lg"></i>
            </div>
            <h3 class="service-title">Delivery Services</h3>
            <div id="delivery-details" class="service-details" style="display: none;">
                <p>Kami menyediakan layanan pengiriman yang cepat dan aman. Produk Anda akan dikirim menggunakan metode pengiriman terpercaya dengan estimasi waktu pengiriman sebagai berikut:</p>
                <ul>
                    <li>Pengiriman standar: 3-5 hari kerja</li>
                    <li>Pengiriman ekspres: 1-2 hari kerja</li>
                    <li>Area layanan: Seluruh Indonesia</li>
                </ul>
            </div>
        </div>
    
        <div class="service" onclick="toggleDetails('shipping-return-details')">
            <div class="service-icon text-success text-center">
                <i class="fa fa-undo fa-lg"></i>
            </div>
            <h3 class="service-title">Shipping & Return</h3>
            <div id="shipping-return-details" class="service-details" style="display: none;">
                <p>Kami memiliki kebijakan pengiriman dan pengembalian yang jelas untuk memastikan kepuasan pelanggan:</p>
                <ul>
                    <li>Biaya pengiriman dihitung berdasarkan berat barang dan lokasi pengiriman.</li>
                    <li>Produk dapat dikembalikan dalam waktu 30 hari setelah penerimaan.</li>
                    <li>Prosedur pengembalian mudah dan cepat. Hubungi layanan pelanggan untuk bantuan.</li>
                </ul>
            </div>
        </div>
    
        <div class="service" onclick="toggleDetails('promotion-details')">
            <div class="service-icon text-success text-center">
                <i class="fa fa-tag fa-lg"></i>
            </div>
            <h3 class="service-title">Promotion</h3>
            <div id="promotion-details" class="service-details" style="display: none;">
                <p>Kami menawarkan berbagai promosi dan diskon untuk meningkatkan pengalaman belanja Anda:</p>
                <ul>
                    <li>Diskon 20% untuk pembelian pertama.</li>
                    <li>Promo bundling: Beli 2 dapatkan 1 gratis.</li>
                    <li>Ikuti kami di media sosial untuk informasi promosi terkini!</li>
                </ul>
            </div>
        </div>
    
        <div class="service" onclick="toggleDetails('hours-service-details')">
            <div class="service-icon text-success text-center">
                <i class="fa fa-clock fa-lg"></i>
            </div>
            <h3 class="service-title">24 Hours Service</h3>
            <div id="hours-service-details" class="service-details" style="display: none;">
                <p>Kami tersedia 24 jam sehari untuk memenuhi kebutuhan Anda:</p>
                <ul>
                    <li>Layanan pelanggan siap membantu kapan saja.</li>
                    <li>Pemesanan dapat dilakukan kapan saja melalui aplikasi kami.</li>
                    <li>Dapatkan bantuan melalui live chat atau email kapan saja.</li>
                </ul>
            </div>
        </div>
    </section>
    
    <script>
        function toggleDetails(id) {
            var details = document.getElementById(id);
            if (details.style.display === "none") {
                details.style.display = "block"; // Tampilkan detail
            } else {
                details.style.display = "none"; // Sembunyikan detail
            }
        }
    </script>
        
            
    
<!-- End Our Services Section -->

<!-- Start Brands Section -->
<section class="brands py-5">
    <div class="container my-4">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1>Produk Family Aquarium</h1>
                <p>
                    Macam-macam Ikan Hias, Pakan Ikan dan
                    Alat Pemeliharaan Aquarium yang tersedia dengan berbagai jenis dan ukuran.
                </p>
            </div>
            <div class="col-lg-9 m-auto">
                <div class="carousel-wrapper">
                    <div class="carousel">
                        <div class="carousel-inner">
                            <!-- First slide -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-3 p-md-5">
                                        <img src="img/1.png" class="img-fluid" alt="Brand 1">
                                    </div>
                                    <div class="col-3 p-md-5">
                                        <img src="img/2.png" class="img-fluid" alt="Brand 1">
                                    </div>
                                    <div class="col-3 p-md-5">
                                        <img src="img/5.png" class="img-fluid" alt="Brand 1">
                                    </div>
                                    <div class="col-3 p-md-5">
                                        <img src="img/6.png" class="img-fluid" alt="Brand 1">
                                    </div>
                                </div>
                            </div>
                            <!-- End First slide -->
                    </div>
                    <!-- Carousel Controls -->
                    <div class="carousel-controls">
                        <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                            <i class="text-dark fas fa-chevron-left"></i>
                        </a>
                        <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                            <i class="text-dark fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <!-- End Carousel Controls -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Brands Section -->
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