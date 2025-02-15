<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Produk Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Buat Produk Baru</h1>
        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Produk</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Harga Produk (Rp)</label>
                <input type="number" name="price" class="form-control" step="100" min="0" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Produk</button>
        </form>
    </div>
</body>

</html>
