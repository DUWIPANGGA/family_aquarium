<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 h-100">
        @include('template.sidebar')
        <h1>Detail Produk</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Dibuat Pada</th>
                <td>{{ $product->created_at }}</td>
            </tr>
            <tr>
                <th>Diperbarui Pada</th>
                <td>{{ $product->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ route('admin.products') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
    </div>
</body>

</html>
