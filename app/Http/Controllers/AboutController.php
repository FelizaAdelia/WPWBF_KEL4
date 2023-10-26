<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Mengirimkan data ke tampilan 'about.blade.php' 
        return view('about');
    }
}
