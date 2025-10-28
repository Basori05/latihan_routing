<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Wisata - {{ ucfirst($tempat) }}</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470');
            background-size: cover;
            background-position: center;
            color: #fff;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.6);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1 {
            color: #ffdd57;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px #000;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(6px);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(255,255,255,0.3);
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background: rgba(255, 221, 87, 0.9);
            color: #333;
            font-size: 1.1em;
        }
        td {
            background: rgba(255,255,255,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        tr:last-child td {
            border-bottom: none;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #ffdd57;
            text-decoration: none;
            background: rgba(255,255,255,0.1);
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }
        a:hover {
            background: rgba(255,255,255,0.3);
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>🎫 Informasi Tiket Wisata</h1>
        <table>
            <tr>
                <th>Tempat Wisata</th>
                <td>{{ ucfirst($tempat) }}</td>
            </tr>
            <tr>
                <th>Harga Tiket</th>
                <td>Rp {{ number_format($harga, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Diskon Spesial</th>
                <td>
                    @if ($harga > 18000)
                        Dapat Diskon 10%
                    @else
                        Tidak Ada Diskon
                    @endif
                </td>
            </tr>
        </table>
        <a href="/">← Kembali ke Beranda</a>
    </div>
</body>
</html>
