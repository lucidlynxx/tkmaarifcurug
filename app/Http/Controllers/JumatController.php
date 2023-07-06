<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJumatRequest;
use App\Http\Requests\UpdateJumatRequest;
use App\Models\Jumat;

class JumatController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas4.create', [
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
    public function store(StoreJumatRequest $kelas4)
    {
        $validatedData = $kelas4->validated();

        Jumat::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function edit(Jumat $kelas4)
    {
        return view('dashboard.kelas4.edit', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
            'jumat' => $kelas4
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJumatRequest $request, Jumat $kelas4)
    {
        $validatedData = $request->validated();

        Jumat::where('id', $kelas4->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }
}
