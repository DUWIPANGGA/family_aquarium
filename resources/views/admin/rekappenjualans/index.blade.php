<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Reset Margin dan Padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styling untuk link */
        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        /* Styling untuk tombol */
        button {
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Styling tabel */
        .table {
            width: 100%;
            margin-top: 20px;
        }

        /* Header tabel */
        .table th {
            background-color: #343a40;
            color: #ffffff;
        }

        /* Styling untuk baris tabel */
        .table tbody tr {
            background-color: #f8f9fa;
        }

        .table tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }

        .table tbody tr:hover {
            background-color: #e2e6ea;
        }

        /* Styling untuk form delete button */
        form button {
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #c82333;
        }

        /* Styling untuk container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Styling untuk heading */
        h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        /* List styling */
        ul {
            list-style-type: none;
            margin-bottom: 20px;
        }

        ul li {
            margin: 10px 0;
        }

        ul li a {
            font-size: 1rem;
            font-weight: 600;
            color: #007bff;
        }

        ul li a:hover {
            color: #0056b3;
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
    
<div class="container mt-5">
    <h2 class="mb-4">Rekap Penjualan</h2>
     <div class="text-center mb-4">
        <button onclick="location.href='{{ route('admin.rekappenjualans.create') }}'" class="btn btn-primary">Tambah Rekap Penjualan</button>
        <button onclick="location.href='{{ route('admin.rekappenjualans.showAll') }}'" class="btn btn-secondary">Lihat Semua Rekap Penjualan</button>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nomor Pesanan</th>
                <th>Tanggal</th>
                <th>Username Pembeli</th>
                <th>Kategori Produk</th>
                <th>Kode Barang</th>
                <th>Metode Pembayaran</th>
                <th>Jumlah Pembelian</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rekapPenjualans as $rekap)
                <tr>
                    <td>{{ $rekap->nomor_pesanan }}</td>
                    <td>{{ $rekap->tanggal }}</td>
                    <td>{{ $rekap->username_pembeli }}</td>
                    <td>{{ $rekap->kategori_produk }}</td>
                    <td>{{ $rekap->kode_barang }}</td>
                    <td>{{ $rekap->metode_pembayaran }}</td>
                    <td>{{ $rekap->jumlah_pembelian }}</td>
                    <td>Rp{{ number_format($rekap->total_harga, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('admin.rekappenjualans.edit', $rekap->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <form action="{{ route('admin.rekappenjualans.destroy', $rekap->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data rekap penjualan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>