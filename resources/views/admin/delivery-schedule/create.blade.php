<!-- resources/views/delivery-schedule/create.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Delivery Schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Create New Delivery Schedule</h1>
        <form action="{{ route('admin.delivery-schedules.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_id">Product</label>
                <select class="form-control" name="product_id" id="product_id">
                    <option value="" selected disabled>Choose Product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">No Telp</label>
                <input type="text" name="nomor_telepon" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat_rumah">Alamat Rumah</label>
                <textarea name="alamat_rumah" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="jadwal_delivery">Jadwal Pengantaran</label>
                <input type="date" name="jadwal_delivery" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Create Delivery Schedule</button>
        </form>
    </div>
</body>

</html>
