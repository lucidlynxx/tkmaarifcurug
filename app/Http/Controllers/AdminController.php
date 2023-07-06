<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.index', [
            'title' => "TK Ma'arif Curug | Admin",
            'author' => 'Novy Nurlelasari',
            'admins' => User::get()
        ]);
    }

    public function create()
    {
        return view('dashboard.admin.create', [
            'title' => "TK Ma'arif Curug | Admin",
            'author' => 'Novy Nurlelasari',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'alamat' => 'required|max:255',
            'noTelepon' => 'required|numeric|digits:12',
            'jenisKelamin' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data admin telah ditambahkan.');

        return redirect('/dashboard/admin');
    }
}
