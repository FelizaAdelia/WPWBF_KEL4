<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ebook</title>
    <style>
        /* Style CSS disini */
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Ebook</h2>
        <form action="{{ route('products.update', $ebook->id_ebook) }}" method="POST">
            @csrf
            @method('PUT') <!-- Gunakan metode PUT untuk mengirimkan request update -->

            <div class="form-group">
                <label for="id_kategori">Kategori Ebook:</label>
                <input type="text" id="id_kategori" name="id_kategori" value="{{ $ebook->id_kategori }}" required>
            </div>
            <div class="form-group">
                <label for="judul_ebook">Judul Ebook:</label>
                <input type="text" id="judul_ebook" name="judul_ebook" value="{{ $ebook->judul_ebook }}" required>
            </div>
            <div class="form-group">
                <label for="tahun_ebook">Tahun Ebook:</label>
                <input type="text" id="tahun_ebook" name="tahun_ebook" value="{{ $ebook->tahun_ebook }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi_ebook">Deskripsi Ebook:</label>
                <textarea id="deskripsi_ebook" name="deskripsi_ebook" required>{{ $ebook->deskripsi_ebook }}</textarea>
            </div>
            <div class="form-group">
                <label for="harga_ebook">Harga Ebook:</label>
                <input type="number" id="harga_ebook" name="harga_ebook" value="{{ $ebook->harga_ebook }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Ebook</button>
        </form>
    </div>
</body>

</html>
