<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Aquarium</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* General Styles */
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
        header .icons a {
            color: white;
            margin: 0 8px;
            font-size: 18px;
        }
        header .icons a:hover {
            color: #64cc86;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px;
            border: 2px solid #000; /* Dark border for social icons */
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .social-icons a:hover {
            background-color: #28a745; /* Change background color on hover */
            color: #fff; /* Change text color on hover */
        }

        .subscribe-section .form-control {
            background-color: #f8f9fa; /* Light background for input */
            border: 2px solid #000; /* Dark border */
        }

        .subscribe-section .btn-success {
            background-color: #28a745; /* Success color */
            border: none; /* No border for button */
        }

        .footer {
            background-color: #000; /* Black background for footer */
            color: #fff; /* White text for footer */
        }

        /* Divider */
        .border-top {
            border-top: 2px solid #000; /* Dark border for divider */
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
        <div class="profil-fields">
            @if (!empty($user))
                <div class="profil-field">Nama: {{ $user->name }}</div>
                <div class="profil-field">No. Telepon: {{ $user->phone }}</div>
                <div class="profil-field">Alamat Rumah: {{ $user->address }}</div>
                <div class="profil-field">Alamat Email: {{ $user->email }}</div>
            @endif
        </div>        
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
    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-4 pt-5">
                <h2 class="logo text-success border-bottom pb-3 border-light">FAMILY AQUARIUM</h2>
                <ul class="list-unstyled text-dark">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i> Jl. Raya Rambatn Wetan Bangkir
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:0858-1029-1417">0858-1029-1417</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:FamilyAquarium@gmail.com">FamilyAquarium@gmail.com</a>
                    </li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="col-md-8 pt-5">
                <div class="d-flex justify-content-between">
                    <div class="social-icons">
                        <a class="text-dark text-decoration-none" target="_blank" href="http://facebook.com/">
                            <i class="fab fa-facebook-f fa-lg fa-fw"></i>
                        </a>
                        <a class="text-dark text-decoration-none" target="_blank" href="https://www.instagram.com/">
                            <i class="fab fa-instagram fa-lg fa-fw"></i>
                        </a>
                        <a class="text-dark text-decoration-none" target="_blank" href="https://twitter.com/">
                            <i class="fab fa-twitter fa-lg fa-fw"></i>
                        </a>
                        <a class="text-dark text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                            <i class="fab fa-linkedin fa-lg fa-fw"></i>
                        </a>
                    </div>

                    <!-- Subscribe Section -->
                    <div class="subscribe-section">
                        <div class="input-group mb-2">
                            <input type="email" class="form-control" id="subscribeEmail" placeholder="Email address">
                            <button class="input-group-text btn-success text-light">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Horizontal Divider -->
        <div class="row text-dark mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w-100 footer py-3 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">
                        &copy; 2024 Family Aquarium | Designed by <span>Kelompok 7</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>