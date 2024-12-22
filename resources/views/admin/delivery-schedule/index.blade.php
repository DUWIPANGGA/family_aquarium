<!-- resources/views/delivery-schedule/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Schedules</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="overflow-x: hidden; ">
    <div class="row" style="display: flex; flex-direction: row; height: 100vh; " >
        @include('template.sidebar')
        <div class="col-md-10" style="overflow-x: hidden; height:100vh;" >
        <h1>Delivery Schedules</h1>
        <a href="{{ route('admin.delivery-schedules.create') }}" class="btn btn-success mb-3">Create New Delivery
            Schedule</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Produk</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                    <th>Jadwal Pengantaran</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (count($delivery_schedules) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data</td>
                    </tr>
                @endif
                @foreach ($delivery_schedules as $delivery_schedule)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $delivery_schedule->nama_pemesan }}</td>
                        <td>{{ $delivery_schedule->product->name }}</td>
                        <td>{{ $delivery_schedule->nomor_telepon }}</td>
                        <td>{{ $delivery_schedule->alamat_rumah }}</td>
                        <td>{{ \Carbon\Carbon::parse($delivery_schedule->jadwal_delivery)->format('D, d F Y') }}</td>
                        <td>
                            <a href="{{ route('admin.delivery-schedules.show', $delivery_schedule->id) }}"
                                class="btn btn-info">View</a>
                            <a href="{{ route('admin.delivery-schedules.edit', $delivery_schedule->id) }}"
                                class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.delivery-schedules.destroy', $delivery_schedule->id) }}"
                                method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>
