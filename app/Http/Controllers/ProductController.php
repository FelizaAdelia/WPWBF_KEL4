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
}
