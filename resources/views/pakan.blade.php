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
        header .icons a {
            color: white;
            margin: 0 8px;
            font-size: 18px;
        }
        header .icons a:hover {
            color: #64cc86;
        }
        footer {
            text-align: center;
            padding: 16px;
            background-color: #333;
            color: white;
            margin-top: 32px;
        }
        .card img {
            object-fit: cover;
            width: 100%;
            height: 300px; /* Tinggi tetap untuk konsistensi tampilan */
        }

        .nav-link-active {
            color: #3434ff; 
            font-weight: bold;
            text-decoration: underline;
        }
        .social-icons a {
            color: #fff;
            margin-left: 10px;
        }

    </style>
</head>
<body>

    <header>
        <h1>FAMILY AQUARUM</h1>
        <nav>
            <a href="{{url('home')}}">HOME</a>
            <a href="{{url('about')}}">ABOUT</a>
            <a href="{{url('toko')}}">TOKO</a>
            <a href="{{url('kontak')}}">KONTAK</a>
            <div class="icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="{{ route('profil.index') }}"><i class="fas fa-user"></i></a>
            </div>
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

    <!-- Row container with cards displayed in a row -->
    <div class="row mt-4 justify-content-center gap-3">
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('img/pakan.png')}}" class="card-img-top" alt="Produk 1">
                <div class="overlay-buttons">
                    <button class="btn"><i class="fas fa-heart"></i></button>
                    <button class="btn"><i class="fas fa-eye"></i></button>
                    <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Takari</h5>
                    <p class="card-text">CPPETINDO Takari Fish Food 2mm mix - 500gr.</p>
                    <p class="card-text text-center">Tersedia</p>
                    <p class="text-danger fw-bold">Rp18.500</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-shopping me-2"></i>Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('img/takari_hijau.png')}}" class="card-img-top" alt="Produk 2">
                <div class="overlay-buttons">
                    <button class="btn"><i class="fas fa-heart"></i></button>
                    <button class="btn"><i class="fas fa-eye"></i></button>
                    <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Takari Turtle</h5>
                    <p class="card-text">CPPETINDO Takari Turtle 1mm - 100gr.</p>
                    <p class="card-text text-center">Tersedia</p>
                    <p class="text-danger fw-bold">Rp13.500</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-shopping me-2"></i>Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('img/takari_merah.png')}}" class="card-img-top" alt="Produk 3">
                <div class="overlay-buttons">
                    <button class="btn"><i class="fas fa-heart"></i></button>
                    <button class="btn"><i class="fas fa-eye"></i></button>
                    <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Takari</h5>
                    <p class="card-text">Takari Fish makanan ikan red 1mm - 100gr.</p>
                    <p class="card-text text-center">Tersedia</p>
                    <p class="text-danger fw-bold">Rp5.000</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-shopping me-2"></i>Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>

        <div class="row mt-4 justify-content-center gap-3">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('img/5.png')}}" class="card-img-top" alt="Produk 4">
                    <div class="overlay-buttons">
                        <button class="btn"><i class="fas fa-heart"></i></button>
                        <button class="btn"><i class="fas fa-eye"></i></button>
                        <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Taisho</h5>
                        <p class="card-text">Taisho pelet ikan koi 1Kg ukuran 2mm/5mm. Taisho merah / pelet koi / pelet ikan.</p>
                        <p class="card-text text-center">Tersedia</p>
                        <p class="text-danger fw-bold">Rp150.000</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-shopping me-2"></i>Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('img/asahi.jpg')}}" class="card-img-top" alt="Produk 5">
                    <div class="overlay-buttons">
                        <button class="btn"><i class="fas fa-heart"></i></button>
                        <button class="btn"><i class="fas fa-eye"></i></button>
                        <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Asahi</h5>
                        <p class="card-text">Pakan ikan asahi pelet 100gr.</p>
                        <p class="card-text text-center">Tersedia</p>
                        <p class="text-danger fw-bold">Rp15.000</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-shopping me-2"></i>Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('img/sankoi.jpg')}}" class="card-img-top" alt="Produk 6">
                    <div class="overlay-buttons">
                        <button class="btn"><i class="fas fa-heart"></i></button>
                        <button class="btn"><i class="fas fa-eye"></i></button>
                        <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">SAN KOI</h5>
                        <p class="card-text">SANKOI SPIRULINA 1Kg pakan ikan koi.</p>
                        <p class="card-text text-center">Tersedia</p>
                        <p class="text-danger fw-bold">Rp70.000</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-shopping me-2"></i>Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </div>  

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ Request::is('toko') ? 'nav-link-active' : '' }}">
                    <a class="page-link" href="{{ route('toko') }}">ikan hias</a>
                </li>
                <li class="page-item {{ Request::is('pakan') ? 'nav-link-active' : '' }}">
                    <a class="page-link" href="{{ route('pakan') }}">pakan</a>
                </li>
                <li class="page-item {{ Request::is('alat') ? 'nav-link-active' : '' }}">
                    <a class="page-link" href="{{ route('alat') }}">alat</a>
                </li>
            </ul>
        </nav>

    

    

    <footer>
        <p>&copy; 2024 Website Penjualan Family Aquarium</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoYapqoZ4zA1rQy5Yh5DOFvnk5Hr6TVj4u9d3ENmF5qL+9z" crossorigin="anonymous"></script>
</body>
</html>
