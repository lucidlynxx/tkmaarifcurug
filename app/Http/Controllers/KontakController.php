<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('dashboard.kontak.index', [
            'title' => "TK Ma'arif Curug | Kontak",
            'author' => 'Novy Nurlelasari',
            'kontaks' => Kontak::latest()->get()
        ]);
    }

    public function show(Kontak $kontak)
    {
        return view('dashboard.kontak.show', [
            'title' => "TK Ma'arif Curug | Kontak",
            'author' => 'Novy Nurlelasari',
            'kontak' => $kontak
        ]);
    }
}
