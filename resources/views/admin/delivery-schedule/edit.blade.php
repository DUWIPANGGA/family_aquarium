<!-- resources/views/delivery-schedule/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Product</h1>
        <form action="{{ route('admin.delivery-schedules.update', $delivery_schedule->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="product_id">Product</label>
                <select class="form-control" name="product_id" id="product_id">
                    <option value="" selected disabled>Choose Product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" @if ($delivery_schedule->product_id == $product->id) selected @endif>
                            {{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" class="form-control"
                    value="{{ $delivery_schedule->nama_pemesan }}" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">No Telp</label>
                <input type="text" name="nomor_telepon" class="form-control"
                    value="{{ $delivery_schedule->nomor_telepon }}" required>
            </div>
            <div class="form-group">
                <label for="alamat_rumah">Alamat Rumah</label>
                <textarea name="alamat_rumah" class="form-control">{{ $delivery_schedule->alamat_rumah }}</textarea>
            </div>
            <div class="form-group">
                <label for="jadwal_delivery">Jadwal Pengantaran</label>
                <input type="date" name="jadwal_delivery" class="form-control"
                    value="{{ \Carbon\Carbon::parse($delivery_schedule->jadwal_delivery)->format('Y-m-d') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Delivery Schedule</button>
        </form>
    </div>
</body>

</html>
