<?php

namespace App\Http\Controllers;

use App\Models\KategoriEbook;
use App\Models\Ebook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Mengambil 5 kategori eBook pertama dari tabel 'kategori_ebooks'
        $categories = KategoriEbook::limit(3)->get();

        // Mengambil 5 buku terbaru dari tabel 'ebooks'
        $latestEbooks = Ebook::latest()->limit(5)->get();

        // Mengirimkan data kategori eBook dan buku terbaru ke tampilan 'home'
        return view('home', compact('categories', 'latestEbooks'));
    }
}
