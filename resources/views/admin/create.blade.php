<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rekap Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Rekap Penjualan</h2>
    
    <form action="{{route('admin.rekappenjualans.store')}}" method="POST">
       
        <!-- CSRF Token placeholder (replace with server-side implementation) -->
        <input type="hidden" name="_token" value="your-csrf-token-here">
         @csrf
        <!-- Nomor Pesanan -->
        <div class="form-group">
            <label for="nomor_pesanan">Nomor Pesanan</label>
            <input type="text" class="form-control" id="nomor_pesanan" name="nomor_pesanan" required>
        </div>

        <!-- Tanggal -->
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <!-- Username Pembeli -->
        <div class="form-group">
            <label for="username_pembeli">Username Pembeli</label>
            <input type="text" class="form-control" id="username_pembeli" name="username_pembeli" required>
        </div>

        <!-- Kategori Produk -->
        <div class="form-group">
            <label for="kategori_produk">Kategori Produk</label>
            <input type="text" class="form-control" id="kategori_produk" name="kategori_produk" required>
        </div>

        <!-- Kode Barang -->
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>

        <!-- Metode Pembayaran -->
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="Tunai">Tunai</option>
                <option value="E-Wallet">E-Wallet</option>
            </select>
        </div>

        <!-- Jumlah Pembelian -->
        <div class="form-group">
            <label for="jumlah_pembelian">Jumlah Pembelian</label>
            <input type="number" class="form-control" id="jumlah_pembelian" name="jumlah_pembelian" min="1" required>
        </div>

        <!-- Total Harga -->
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" min="0" required>
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/rekappenjualans" class="btn btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>
