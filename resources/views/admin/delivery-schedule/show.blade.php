<!-- resources/views/delivery-schedule/show.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Schedule Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        
        <h1>Delivery Schedule Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $delivery_schedule->id }}</td>
            </tr>
            <tr>
                <th>Nama Pemesan</th>
                <td>{{ $delivery_schedule->nama_pemesan }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ $delivery_schedule->nomor_telepon }}</td>
            </tr>
            <tr>
                <th>Alamat Rumah</th>
                <td>{{ $delivery_schedule->alamat_rumah }}</td>
            </tr>
            <tr>
                <th>Jadwal Pengantaran</th>
                <td>{{ \Carbon\Carbon::parse($delivery_schedule->jadwal_delivery)->format('D, d F Y') }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $delivery_schedule->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $delivery_schedule->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ route('admin.delivery-schedules') }}" class="btn btn-primary">Back to Delivery Schedule List</a>
    </div>
</body>

</html>
