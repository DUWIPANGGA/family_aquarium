<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kualitas Air</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Data Kualitas Air</h1>
        
        <!-- Form untuk mengedit data -->
        <form action="{{ route('admin.water_quality.update', $waterQuality->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- ID (tidak bisa diubah) -->
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" class="form-control" value="{{ $waterQuality->id }}" readonly>
            </div>
            
            <!-- Aquarium -->
            <div class="form-group">
                <label for="aquarium">Aquarium</label>
                <input type="text" name="aquarium" class="form-control" value="{{ $waterQuality->aquarium }}" required>
            </div>

            <!-- pH -->
            <div class="form-group">
                <label for="pH">pH</label>
                <input type="number" name="pH" class="form-control" value="{{ $waterQuality->pH }}" step="0.01" required>
            </div>

            <!-- Turbidity -->
            <div class="form-group">
                <label for="turbidity">Turbidity</label>
                <input type="number" name="turbidity" class="form-control" value="{{ $waterQuality->turbidity }}" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>

        <!-- Menampilkan Data yang baru diperbarui -->
        @if(session('updatedData'))
            <div class="alert alert-success mt-3">
                <h4>Data Berhasil Diperbarui:</h4>
                <ul>
                    <li><strong>ID:</strong> {{ session('updatedData')['id'] }}</li>
                    <li><strong>Aquarium:</strong> {{ session('updatedData')['aquarium'] }}</li>
                    <li><strong>pH:</strong> {{ session('updatedData')['pH'] }}</li>
                    <li><strong>Turbidity:</strong> {{ session('updatedData')['turbidity'] }}</li>
                </ul>
            </div>
        @endif
    </div>
</body>

</html>
