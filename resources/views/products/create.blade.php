<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Tambah Ebook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .form-group textarea {
            height: 100px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Ebook Baru</h2>
        <form method="POST" action="{{ route('products.store') }}"> <!-- Ganti route ke 'products.store' -->
            @csrf
            <div class="form-group">
                <label for="id_kategori">Kategori Ebook:</label>
                <input type="text" id="id_kategori" name="id_kategori" required>
            </div>
            <div class="form-group">
                <label for="judul_ebook">Judul Ebook:</label>
                <input type="text" id="judul_ebook" name="judul_ebook" required>
            </div>
            <div class="form-group">
                <label for="tahun_ebook">Tahun Ebook:</label>
                <input type="text" id="tahun_ebook" name="tahun_ebook" required>
            </div>
            <div class="form-group">
                <label for="deskripsi_ebook">Deskripsi Ebook:</label>
                <textarea id="deskripsi_ebook" name="deskripsi_ebook" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga_ebook">Harga Ebook:</label>
                <input type="number" id="harga_ebook" name="harga_ebook" required>
            </div>
            <button type="submit" class="btn-primary">Tambah Ebook</button>
        </form>
    </div>
</body>

</html>
