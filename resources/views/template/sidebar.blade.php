<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Aquarium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <style>
        .dashboard-container{
            display: flex;
            flex-direction: row;
        }
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
</style> --}}
</head>
<aside class="col-md-2 bg-dark pt-10 " style="height: 100vh">
  <div class="p-3 mt-5">
  <h5 class="text-light">FAMILY AQUARIUM</h5>
</div>
  <nav class="nav flex-column">
    <a class="nav-link text-light active" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a class="nav-link text-light" href="{{ route('admin.products') }}"><i class="fas fa-boxes"></i> Products</a>
    <a class="nav-link text-light" href="{{ route('admin.delivery-schedules') }}"><i class="fas fa-truck"></i> Jadwal Pengantaran</a>
    <a class="nav-link text-light" href="#"><i class="fas fa-exchange-alt"></i> Transactions</a>
    <a class="nav-link text-light" href="{{ route('admin.monitoring') }}"><i class="fas fa-tint"></i> Monitoring Air</a>
    <a class="nav-link text-light" href="#"><i class="fas fa-file-alt"></i> Rekap</a>
    <a class="nav-link text-light" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
  </nav>
</aside>