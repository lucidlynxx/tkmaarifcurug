<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.guru.index', [
            'title' => "TK Ma'arif Curug | Guru",
            'author' => 'Novy Nurlelasari',
            'gurus' => Guru::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.guru.create', [
            'title' => "TK Ma'arif Curug | Guru",
            'author' => 'Novy Nurlelasari',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuruRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'noTelepon' => 'required|numeric|digits:12',
            'jenisKelamin' => 'required',
            'image' => 'image|file|max:5120'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Guru::create($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Guru telah ditambahkan.');

        return redirect('/dashboard/guru');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('dashboard.guru.edit', [
            'title' => "TK Ma'arif Curug | Guru",
            'author' => 'Novy Nurlelasari',
            'guru' => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuruRequest  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuruRequest $request, Guru $guru)
    {
        $rules = [
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'noTelepon' => 'required|numeric|digits:12',
            'jenisKelamin' => 'required',
            'image' => 'image|file|max:5120'
        ];

        if ($request->slug != $guru->slug) {
            $rules['slug'] = 'required|unique:gurus';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Guru::where('id', $guru->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Guru telah diubah.');

        return redirect('/dashboard/guru');
    }
}
