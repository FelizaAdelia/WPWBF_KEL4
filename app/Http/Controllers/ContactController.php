<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Mengirimkan data ke tampilan 'contact.blade.php' 
        return view('contact');
    }
}
