<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Keranjang Checkout</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($checkouts->isEmpty())
            <p>Tidak ada item di keranjang checkout.</p>
        @else
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($checkouts as $checkout)
                        <tr>
                            <td>{{ $checkout->product->name }}</td>
                            <td>Rp{{ number_format($checkout->product->price, 0, ',', '.') }}</td>
                            <td>{{ $checkout->quantity }}</td>
                            <td>Rp{{ number_format($checkout->total_price, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('checkout.destroy', $checkout->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
