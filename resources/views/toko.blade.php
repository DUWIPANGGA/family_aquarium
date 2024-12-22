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
            height: 200px; /* Tinggi tetap untuk konsistensi tampilan */
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
                
                <a href="{{ route('keranjang_Items') }}" class="icon-link"><i class="fas fa-shopping-cart"></i></a>
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

    <!-- Row container with cards displayed in a row -->
    <div class="row mt-4 justify-content-center gap-3">
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('img/cupang.jpg')}}" class="card-img-top" alt="Produk 1">
                <div class="overlay-buttons">
                    <a href="link1.html"><button class="btn"><i class="fas fa-heart"></i></button></a>
                    <a href="detailProduk"><button class="btn"><i class="fas fa-eye"></i></button></a>
                    <a href="keranjang_Items"><button class="btn"><i class="fas fa-shopping-cart"></i></button></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ikan Cupang</h5>
                    <p class="card-text">Ikan hias dengan warna cerah dan sirip yang indah. Mudah dirawat dan cocok untuk akuarium kecil.</p>
                    <p class="card-text text-center">Tersedia</p>
                    <p class="text-danger fw-bold">Rp15.000</p>
                    <a href="{{ route('checkout.index') }}" class="btn btn-primary">
                        <i class="fas fa-shopping me-2"></i>Beli Sekarang
                    </a>                 
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('img/glofid.jpg')}}" class="card-img-top" alt="Produk 2">
                <div class="overlay-buttons">
                    <a href="link1.html"><button class="btn"><i class="fas fa-heart"></i></button></a>
                    <a href="detailProduk"><button class="btn"><i class="fas fa-eye"></i></button></a>
                    <a href="keranjang_Items"><button class="btn"><i class="fas fa-shopping-cart"></i></button></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ikan Glowfish</h5>
                    <p class="card-text">Ikan unik yang bisa menyala dengan warna fluorescent. Cocok untuk akuarium modern yang dilengkapi pencahayaan.</p>
                    <p class="card-text text-center">Tersedia</p>
                    <p class="text-danger fw-bold">Rp10.000</p>
                    <a href="{{ route('checkout.index') }}" class="btn btn-primary">
                        <i class="fas fa-shopping me-2"></i>Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('img/koi.jpg')}}" class="card-img-top" alt="Produk 3">
                <div class="overlay-buttons">
                    <a href="link1.html"><button class="btn"><i class="fas fa-heart"></i></button></a>
                    <a href="detailProduk"><button class="btn"><i class="fas fa-eye"></i></button></a>
                    <a href="keranjang_Items"><button class="btn"><i class="fas fa-shopping-cart"></i></button></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ikan Koi</h5>
                    <p class="card-text">Ikan koi cantik dengan pola warna-warni. Simbol keberuntungan, ideal untuk kolam atau akuarium besar.</p>
                    <p class="card-text text-center">Tersedia</p>
                    <p class="text-danger fw-bold">Rp25.000</p>
                    <a href="{{ route('checkout.index') }}" class="btn btn-primary">
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
                    <img src="{{ asset('img/ikann.png')}}" class="card-img-top" alt="Produk 4">
                    <div class="overlay-buttons">
                        <a href="link1.html"><button class="btn"><i class="fas fa-heart"></i></button></a>
                        <a href="detailProduk"><button class="btn"><i class="fas fa-eye"></i></button></a>
                        <a href="keranjang_Items"><button class="btn"><i class="fas fa-shopping-cart"></i></button></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ikan Koki</h5>
                        <p class="card-text">Ikan mas koki dengan tubuh bulat dan sirip panjang. Pilihan populer dengan warna cerah dan bentuk lucu.</p>
                        <p class="card-text text-center">Tersedia</p>
                        <p class="text-danger fw-bold">Rp45.000</p>
                        <a href="{{ route('checkout.index') }}" class="btn btn-primary">
                            <i class="fas fa-shopping me-2"></i>Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('img/mas.png')}}" class="card-img-top" alt="Produk 5">
                    <div class="overlay-buttons">
                        <a href="link1.html"><button class="btn"><i class="fas fa-heart"></i></button></a>
                        <a href="detailProduk"><button class="btn"><i class="fas fa-eye"></i></button></a>
                        <a href="keranjang_Items"><button class="btn"><i class="fas fa-shopping-cart"></i></button></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ikan Mas</h5>
                        <p class="card-text"> Ikan mas berwarna oranye, mudah dirawat, cocok untuk pemula. Tampak cantik di akuarium dan kolam.</p>
                        <p class="card-text text-center">Tersedia</p>
                        <p class="text-danger fw-bold">Rp8.000</p>
                        <a href="{{ route('checkout.index') }}" class="btn btn-primary">
                            <i class="fas fa-shopping me-2"></i>Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('img/oscar.jpg')}}" class="card-img-top" alt="Produk 6">
                    <div class="overlay-buttons">
                        <a href="link1.html"><button class="btn"><i class="fas fa-heart"></i></button></a>
                        <a href="detailProduk"><button class="btn"><i class="fas fa-eye"></i></button></a>
                        <a href="keranjang_Items"><button class="btn"><i class="fas fa-shopping-cart"></i></button></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ikan Oscar</h5>
                        <p class="card-text">Ikan besar yang cerdas dan berkarakter. Ideal untuk akuarium besar dengan pemeliharaan khusus.</p>
                        <p class="card-text text-center">Tersedia</p>
                        <p class="text-danger fw-bold">Rp85.000</p>
                        <a href="{{ route('checkout.index') }}" class="btn btn-primary">
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
