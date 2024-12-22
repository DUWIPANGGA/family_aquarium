<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-detail {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-top: 20px;
        }
        .product-images img {
            width: 100px;
            height: 100px;
            cursor: pointer;
        }
        .product-images img.active {
            border: 2px solid #64cc86;
        }
        .product-info {
            width: 50%;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="my-4">
        <h1>Family Aquarium</h1>
    </header>
    <div class="product-detail">
        <div class="product-images">
            <img src="{{ asset('storage/' . $produk->image) }}" alt="Produk utama" id="mainImage" class="img-fluid">
            <div class="d-flex mt-2">
                @foreach ($produk->additional_images as $image)
                    <img src="{{ asset('storage/' . $image) }}" onclick="changeImage('{{ asset('storage/' . $image) }}')" class="mx-2 img-thumbnail">
                @endforeach
            </div>
        </div>
        <div class="product-info">
            <h2>{{ $produk->name }}</h2>
            <p>Rp {{ number_format($produk->price, 0, ',', '.') }}</p>
            <p>{{ $produk->description }}</p>
            <ul>
                <li>Stok: {{ $produk->stock }}</li>
                <li>Ukuran: {{ $produk->size }}</li>
                <!-- Tambahkan spesifikasi lain di sini -->
            </ul>
            <div class="d-flex align-items-center">
                <label for="quantity">Jumlah:</label>
                <input type="number" id="quantity" value="1" class="form-control mx-2" style="width: 60px;">
                <button class="btn btn-primary">Beli</button>
                <button class="btn btn-secondary ms-2">Tambah ke Keranjang</button>
            </div>
        </div>
    </div>
</div>

<script>
    function changeImage(imageUrl) {
        document.getElementById('mainImage').src = imageUrl;
    }
</script>
</body>
</html>
