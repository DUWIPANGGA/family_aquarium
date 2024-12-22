<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peringatan Kualitas Air Akuarium</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: #ff4c4c;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 24px;
            font-weight: bold;
        }
        .body {
            padding: 20px;
        }
        .body p {
            margin: 10px 0;
            font-size: 16px;
        }
        .alert {
            color: #ff4c4c;
            font-weight: bold;
            font-size: 18px;
        }
        .data-box {
            margin: 20px 0;
            padding: 15px;
            background: #f4f4f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .data-box .label {
            font-weight: bold;
            color: #333;
        }
        .data-box .value {
            color: #ff4c4c;
            font-size: 20px;
            font-weight: bold;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            ⚠️ Peringatan Kualitas Air Akuarium
        </div>

        <!-- Body -->
        <div class="body">
            <p class="alert">Perhatian: Kualitas air di akuarium dengan id {{ $details['aquarium'] }} terdeteksi dalam kondisi tidak optimal.</p>
            <p>Berikut adalah hasil pengukuran terbaru:</p>

            <div class="data-box">
                <p><span class="label">Tingkat pH:</span> <span class="value">{{ $details['ph'] }}</span></p>
                <p><span class="label">Kekeruhan:</span> <span class="value">{{ $details['turbidity'] }} NTU</span></p>
            </div>

            <p>
                Mohon segera lakukan langkah berikut untuk menjaga kesehatan ikan dan ekosistem akuarium Anda:
            </p>
            <ul>
                <li>Periksa sistem filtrasi dan pastikan bekerja dengan baik.</li>
                <li>Tambahkan buffer pH jika tingkat pH terlalu rendah atau tinggi.</li>
                <li>Bersihkan kotoran atau sisa makanan yang mungkin menyebabkan kekeruhan.</li>
                <li>Ganti sebagian air dengan air bersih (jangan lebih dari 30% per hari).</li>
            </ul>
            <p>
                Keseimbangan air yang baik sangat penting untuk kesehatan ikan Anda. Mohon segera lakukan tindakan perbaikan dan periksa kembali setelah beberapa jam.
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} Sistem Monitoring Akuarium | Jaga Kesehatan Akuarium Anda
        </div>
    </div>
</body>
</html>
