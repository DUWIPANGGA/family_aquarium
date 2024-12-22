<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Family Aquarium</title>
    <style>
        /* Container utama */
        .dashboard-container {
            display: flex;
            background-color: #f4f4f4;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c2c2c;
            color: #fff;
            padding: 20px;
        }

        .brand {
            color: #28a745;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .menu {
            list-style: none;
            padding: 0;
        }

        .menu-item {
            color: #ffffff;
            padding: 10px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .menu-item.active, .menu-item:hover {
            background-color: #28a745;
        }

        /* Icon dalam menu sidebar */
        .menu-item i {
            margin-right: 10px;
        }

        /* Bagian utama konten */
        .content {
            flex: 1;
            padding: 20px;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
        }

        .search {
            position: relative;
        }

        .search input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-btn {
            position: absolute;
            right: 5px;
            top: 5px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .user-info {
            display: flex;
            align-items: center;
            color: #333;
        }

        /* Grid layout untuk konten utama */
        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        /* Komponen dalam konten utama */
        .sales-progress, .products, .shipment-schedule, .last-orders {
            background-color: #e6e6e6;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .view-all {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #28a745;
        }

        .view-all:hover {
            color: #218838;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        @include('template.sidebar')
        <main class="content">
            <header class="header">
                <h1 class="fw-bold">DASHBOARD</h1>
                <div class="search">
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="search-btn btn btn-primary">🔍</button>
                </div>
                <div class="user-info">
                    <i class="icon-bell"></i> OWNER
                </div>
            </header>
            <section class="main-content">
                <div class="sales-progress card">
                    <h2 class="card-title">Perkembangan Penjualan</h2>
                    <canvas id="salesChart" width="400" height="200"></canvas>
                </div>
                
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctx = document.getElementById('salesChart').getContext('2d');
                    const salesChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Oktober', 'November', 'Desember'],
                            datasets: [{
                                label: 'Jumlah Penjualan',
                                data: [10, 5, 15], // Ganti dengan data Anda
                                backgroundColor: [
                                    'rgba(75, 192, 192, 0.7)',
                                    'rgba(255, 99, 132, 0.7)',
                                    'rgba(54, 162, 235, 0.7)'
                                ],
                                borderColor: [
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
                
                <div class="products card">
                <li class="menu-item"><i class="icon-products"></i><a href="{{ route('admin.products') }}" class="text-decoration-none">Products</a></li>
                    <table class="table table-striped">
                        <tr>
                            <th>Products</th>
                            <th>Stok</th>
                        </tr>
                        <tr>
                            <td>Ikan Arwana</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Aerator</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
                
                <div class="shipment-schedule card">
                    <li class="menu-item"><i class="icon-statistics"></i> <a href="{{ route('admin.delivery-schedules') }}" class="text-decoration-none">Jadwal Pengantaran</a> </li>
                    <table class="table table-striped">
                        <tr>
                            <th>Products</th>
                            <th>Penerima</th>
                        </tr>
                        <tr>
                            <td>Ikan Arwana</td>
                            <td>Indah</td>
                        </tr>
                        <tr>
                            <td>Aerator</td>
                            <td>Maria</td>
                        </tr>
                    </table>
                    <p>Total Pengiriman: 2</p>
                </div>
                <div class="last-orders card">
                    <h2 class="card-title">Last Orders</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>Tia</td>
                            <td>Rp.50.000</td>
                            <td>Completed</td>
                            <td>11/10/2024</td>
                        </tr>
                        <tr>
                            <td>Dela</td>
                            <td>Rp.100.000</td>
                            <td>Completed</td>
                            <td>08/10/2024</td>
                        </tr>
                    </table>
                    <a href="#" class="view-all btn btn-primary">View All Orders</a>
                </div>
            </section>
        </main>
    </div>
   
</body>
</html>