<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kualitas Air</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h1>Tambah Data Kualitas Air</h1>

        <!-- Form untuk menambah data -->
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('admin.water_quality.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="aquarium">Aquarium</label>
                <select class="form-control" name="aquarium" id="aquarium" required>
                    <option value="" selected disabled>Pilih Aquarium</option>
                    @foreach ($devices as $device)
                        <option value="{{ $device->id_device }}" {{ old('aquarium') == $device->id_device ? 'selected' : '' }}>
                            {{ $device->nama_device }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="ph">pH</label>
                <input type="number" name="pH" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="turbidity">Turbidity</label>
                <input type="text" name="turbidity" class="form-control" min="5" max="100" required>
            </div>
            <button type="submit" class="btn btn-success">Create Data</button>
        </form>
    </div>

</body>

</html>
