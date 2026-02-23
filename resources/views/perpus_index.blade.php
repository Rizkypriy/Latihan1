<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }

        li:last-child {
            border-bottom: none;
        }

        li:hover {
            background-color: #f1f1f1;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #3498db;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>📚 Daftar Koleksi Buku</h1>
        <ul>
            @foreach ($data_buku as $buku)
                <li>{{ $buku }}</li>
            @endforeach
        </ul>
        <a href="/" class="back-link">⬅ Kembali ke Beranda</a>
    </div>
</body>

</html>
