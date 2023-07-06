<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSelasaRequest;
use App\Http\Requests\UpdateSelasaRequest;
use App\Models\Selasa;

class SelasaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas1.create', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSelasaRequest $kelas1)
    {
        $validatedData = $kelas1->validated();

        Selasa::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Selasa  $selasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Selasa $kelas1)
    {
        return view('dashboard.kelas1.edit', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
            'selasa' => $kelas1
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selasa  $selasa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSelasaRequest $request, Selasa $kelas1)
    {
        $validatedData = $request->validated();

        Selasa::where('id', $kelas1->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }
}
