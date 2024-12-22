<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rekap Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Rekap Penjualan</h2>
    
    <form action="{{ route('admin.rekappenjualans.update', $rekap->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Nomor Pesanan -->
        <div class="form-group">
            <label for="nomor_pesanan">Nomor Pesanan</label>
            <input type="text" class="form-control" id="nomor_pesanan" name="nomor_pesanan" value="{{ $rekap->nomor_pesanan }}" required>
        </div>

        <!-- Tanggal -->
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $rekap->tanggal }}" required>
        </div>

        <!-- Username Pembeli -->
        <div class="form-group">
            <label for="username_pembeli">Username Pembeli</label>
            <input type="text" class="form-control" id="username_pembeli" name="username_pembeli" value="{{ $rekap->username_pembeli }}" required>
        </div>

        <!-- Kategori Produk -->
        <div class="form-group">
            <label for="kategori_produk">Kategori Produk</label>
            <input type="text" class="form-control" id="kategori_produk" name="kategori_produk" value="{{ $rekap->kategori_produk }}" required>
        </div>

        <!-- Kode Barang -->
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $rekap->kode_barang }}" required>
        </div>

        <!-- Metode Pembayaran -->
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                <option value="Transfer Bank" {{ $rekap->metode_pembayaran == 'Transfer Bank' ? 'selected' : '' }}>Transfer Bank</option>
                <option value="Kartu Kredit" {{ $rekap->metode_pembayaran == 'Kartu Kredit' ? 'selected' : '' }}>Kartu Kredit</option>
                <option value="Tunai" {{ $rekap->metode_pembayaran == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                <option value="E-Wallet" {{ $rekap->metode_pembayaran == 'E-Wallet' ? 'selected' : '' }}>E-Wallet</option>
            </select>
        </div>

        <!-- Jumlah Pembelian -->
        <div class="form-group">
            <label for="jumlah_pembelian">Jumlah Pembelian</label>
            <input type="number" class="form-control" id="jumlah_pembelian" name="jumlah_pembelian" value="{{ $rekap->jumlah_pembelian }}" min="1" required>
        </div>

        <!-- Total Harga -->
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" value="{{ $rekap->total_harga }}" min="0" required>
        </div>

        <!-- Tombol Simpan -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.rekappenjualans.index') }}" class="btn btn-secondary ml-2">Batal</a>
        </div>
    </form>
</div>
</body>
</html>
