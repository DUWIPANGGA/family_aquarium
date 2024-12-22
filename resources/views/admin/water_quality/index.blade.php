<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Kualitas Air</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <!-- Menampilkan pesan jika ada session 'success' -->
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="row" style="display: flex; flex-direction: row; height: 100vh">
        @include('template.sidebar')
        <div class="col-md-10" style="overflow-x: auto; height:100vh;" >
                        <h1>Monitoring Air</h1>
            <a href="{{ route('admin.water_quality.create') }}" class="btn btn-success mb-3">Tambah Data</a>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>aquarium</th>
                        <th>pH</th>
                        <th>Kekeruhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Looping data untuk menampilkan setiap item -->
                    @foreach ($water_qualities as $quality)
                        <tr>
                            <td>{{ $quality->device }}</td>
                            <td>{{ $quality->pH }}</td>
                            <td>{{ $quality->turbidity }}</td>
                            <td>
                                <!-- Print Button -->
                                <a
                                    href="{{ route('admin.water_quality.edit', $quality->id) }}"class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.water_quality.destroy', $quality->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="print-btn" onclick="window.print()">Cetak PDF</button>
        </div>
    </div>
</body>

</html>
