<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profil</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Perbarui Profil</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tampilkan error validasi jika ada -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Update Profil -->
        <form action="{{ route('profil.update') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password Baru:</label>
                <input type="password" name="password" id="password" placeholder="Kosongkan jika tidak ingin mengubah">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Kosongkan jika tidak ingin mengubah">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        <div class="back-link">
            <a href="{{ route('profil.index') }}">&larr; Kembali ke Profil</a>
        </div>
    </div>
</body>
</html>
