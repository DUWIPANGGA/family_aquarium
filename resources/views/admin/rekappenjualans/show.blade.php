<!-- resources/views/admin/rekappenjualans/show.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Rekap Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        @include('template.sidebar')
        <h2>Semua Rekap Penjualan</h2>
<!-- Print Button -->
<button class="print-btn" onclick="window.print()">Cetak PDF</button>


        <table>
            <thead>
                <tr>
                    <th>Nomor Pesanan</th>
                    <th>Tanggal</th>
                    <th>Username Pembeli</th>
                    <th>Kategori Produk</th>
                    <th>Kode Barang</th>
                    <th>Metode Pembayaran</th>
                    <th>Jumlah Pembelian</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekapPenjualans as $rekap)
                    <tr>
                        <td>{{ $rekap->nomor_pesanan }}</td>
                        <td>{{ $rekap->tanggal }}</td>
                        <td>{{ $rekap->username_pembeli }}</td>
                        <td>{{ $rekap->kategori_produk }}</td>
                        <td>{{ $rekap->kode_barang }}</td>
                        <td>{{ $rekap->metode_pembayaran }}</td>
                        <td>{{ $rekap->jumlah_pembelian }}</td>
                        <td>{{ $rekap->total_harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Kembali ke Daftar Rekap Penjualan -->
        <a href="{{ route('admin.rekappenjualans.index') }}" class="btn">Kembali ke Daftar</a>
    </div>

</body>
</html>
