<?php

namespace App\Http\Controllers;

use App\Models\Ebook; // Import model Ebook
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari model Ebook
        $ebooks = Ebook::all();

        // Mengirimkan data Ebook ke tampilan 'product.blade.php'
        return view('products', compact('ebooks'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|string',
            'judul_ebook' => 'required|string',
            'tahun_ebook' => 'required|string',
            'deskripsi_ebook' => 'required|string',
            'harga_ebook' => 'required|numeric',
        ]);

        Ebook::create([
            'id_kategori' => $request->input('id_kategori'),
            'judul_ebook' => $request->input('judul_ebook'),
            'tahun_ebook' => $request->input('tahun_ebook'),
            'deskripsi_ebook' => $request->input('deskripsi_ebook'),
            'harga_ebook' => $request->input('harga_ebook'),
        ]);

        return redirect()->route('products.data')->with('success', 'Ebook berhasil ditambahkan!');
    }

    public function indexData()
    {
    $ebooks = Ebook::all(); // Cek struktur data yang dikirimkan ke view
    return view('products.data', compact('ebooks'));
    }

    public function edit($id)
    {
        $ebook = Ebook::findOrFail($id); // Temukan ebook berdasarkan ID
        $kategoriEbooks = KategoriEbook::all(); // Ambil semua kategori ebook

        return view('products.edit', compact('ebook', 'kategoriEbooks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kategori' => 'required|exists:kategori_ebooks,id_kategori',
            'judul_ebook' => 'required|string',
            'tahun_ebook' => 'required|string',
            'deskripsi_ebook' => 'required|string',
            'harga_ebook' => 'required|numeric',
        ]);

        $ebook = Ebook::findOrFail($id); // Temukan ebook berdasarkan ID

        $ebook->update([
            'id_kategori' => $request->input('id_kategori'),
            'judul_ebook' => $request->input('judul_ebook'),
            'tahun_ebook' => $request->input('tahun_ebook'),
            'deskripsi_ebook' => $request->input('deskripsi_ebook'),
            'harga_ebook' => $request->input('harga_ebook'),
        ]);

        return redirect()->route('products.data')->with('success', 'Ebook berhasil diperbarui!');
    }

}
