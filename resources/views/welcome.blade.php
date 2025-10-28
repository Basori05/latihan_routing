<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.6);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #ffdd57;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px #000;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(255,255,255,0.3);
        }

        th, td {
            padding: 15px;
            text-align: center;
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
            color: #ffdd57;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 30px;
            color: #ccc;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>🌴 Selamat Datang di Sistem Tiket Wisata 🌊</h1>
        <p>Silakan pilih salah satu tempat wisata di bawah untuk melihat detail tiket:</p>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Harga Tiket</th>
                <th>Detail</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Pantai Papuma</td>
                <td>Rp 20.000</td>
                <td><a href="/tiket/Papuma/20000">Lihat Tiket</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Watu Ulo</td>
                <td>Rp 15.000</td>
                <td><a href="/tiket/WatuUlo/15000">Lihat Tiket</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pancer Puger</td>
                <td>Rp 10.000</td>
                <td><a href="/tiket/PancerPuger/10000">Lihat Tiket</a></td>
            </tr>
        </table>

        <footer>© 2025 Sistem Tiket Wisata - Laravel Blade View</footer>
    </div>
</body>
</html>
