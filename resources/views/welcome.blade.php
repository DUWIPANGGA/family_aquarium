<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Aquarium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Global Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Top bar styling */
        .top-bar {
            display: flex;
            justify-content: space-between;
            background-color: #000;
            padding: 10px;
            color: #fff;
        }

        .contact-info a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }

        .social-icons a {
            color: #fff;
            margin-left: 10px;
        }

        .social-icons a:hover {
            color: #28a745;
        }

        /* Navigation styling */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 50px;
            border-bottom: 1px solid #ccc;
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #28a745;
        }

        .icons a {
            margin-left: 20px;
            color: #333;
        }

        .icons a:hover {
            color: #28a745;
        }

        /* Hero section styling */
        .hero-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: #28a745;
            color: #fff;
        }

        .hero-text h1 {
            font-size: 48px;
            font-weight: bold;
            margin: 0;
        }

        .hero-image img {
            max-width: 500px;
        }

        /* Update Hero section styling */
        .hero-section {
            display: flex;
            padding: 50px;
            background-color: #28a745;
            color: #fff;
        }

        .hero-text {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .hero-text h1 {
            font-size: 48px;
            font-weight: bold;
            margin: 0;
        }

        .hero-buttons {

            display: flex;
            gap: 10px; /* Atur jarak antara tombol Login dan Register */
            margin-top: 15px;
        }

        .hero-buttons a {
            text-decoration: none;
            color: #fff;
            background-color: #406e4b;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;  
            transition: background-color 0.3s;
        }

        .hero-buttons a:hover {
            background-color: #333;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="top-bar">
            <div class="contact-info">
                <a href="mailto:FamilyAquarium@gmail.com"><i class="fas fa-envelope"></i> FamilyAquarium@gmail.com</a>
                <a href="tel:085810291417"><i class="fas fa-phone"></i> 0858-1029-1417</a>
            </div>
            <div class="social-icons">
                <a href="https://yourapp.com" target="_blank"><i class="fas fa-times"></i></a>
                <a href="https://www.facebook.com/yourpage" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            
        </div>
        <nav>
            <a href="#" class="logo">FAMILY AQUARIUM</a>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SHOP</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <div class="icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="{{ route('profil.index') }}"><i class="fas fa-user"></i></a>

            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <div class="hero-section">
            <div class="hero-text">
                <h1>FAMILY AQUARIUM</h1>
                <div class="hero-buttons">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('img/tanaman.png') }}" alt="Coral Reef">
            </div>
        </div>        
    </main>
</body>
</html>
