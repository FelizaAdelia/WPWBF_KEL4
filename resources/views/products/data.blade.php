<!-- data.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tambahkan tag head sesuai kebutuhan -->
</head>
<body>
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="table-responsive"> <!-- Tambahkan class "table-responsive" untuk membuat tabel responsif -->
            <table class="table table-bordered">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">IDEbook</th>
                        <th scope="col">IDKategori</th>
                        <th scope="col">Judul_ebook</th>
                        <th scope="col">Tahun_ebook</th>
                        <th scope="col">Deskripsi_ebook</th>
                        <th scope="col">Harga_ebook</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ebooks as $ebook)
                    <tr>
                        <td>{{ $ebook->id_ebook }}</td>
                        <td>{{ $ebook->id_kategori }}</td>
                        <td>{{ $ebook->judul_ebook }}</td>
                        <td>{{ $ebook->tahun_ebook }}</td>
                        <td>{{ $ebook->deskripsi_ebook }}</td>
                        <td>{{ $ebook->harga_ebook }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('products.edit', $ebook->id_ebook) }}">Edit</a>
                            <form action="{{ 'product/destroy' }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
</body>
</html>
