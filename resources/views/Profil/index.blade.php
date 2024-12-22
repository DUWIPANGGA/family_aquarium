<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .alert {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
        background-color: #d4edda;
        color: #155724;
    }

    .btn-primary {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #64cc86;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #64cc86;
    }

    .btn-back {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #64cc86;
        color: white;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .btn-back:hover {
        background-color: #64cc86;
    }
</style>
<body>
    <div class="container">
        <h1>Profil Saya</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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

            <button type="submit" class="btn btn-back">Simpan Perubahan</button>
        </form>

        <!-- Tombol Kembali ke Dashboard -->
        <a href="{{ route('dashboard') }}">
            <button type="submit" class="btn btn-back">Kembali ke Dashboard</button>
        </a>
    </div>
</body>
</html>
