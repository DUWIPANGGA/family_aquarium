@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Keranjang Belanja</h1>

    <!-- Tampilkan pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Daftar Item di Keranjang -->
    @if ($keranjangItems->isEmpty())
        <p>Keranjang Anda kosong.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keranjangItems as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td>
                            <!-- Form Update Jumlah -->
                            <form action="{{ route('keranjang_items.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control" style="width: 70px; display: inline-block;">
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>
                        </td>
                        <td>Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                        <td>
                            <!-- Tombol Hapus -->
                            <form action="{{ route('keranjang_items.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini dari keranjang?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Total Keseluruhan -->
        <div class="text-right">
            <h4>
                Total Keseluruhan: Rp {{ number_format($keranjangItems->sum(fn($item) => $item->price * $item->quantity), 0, ',', '.') }}
            </h4>
        </div>
    @endif

    <!-- Tombol Kembali -->
    <div class="mt-3">
        <a href="{{ route('toko') }}" class="btn btn-secondary">Kembali ke Toko</a>
    </div>
</div>
@endsection
