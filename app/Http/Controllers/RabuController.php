<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRabuRequest;
use App\Http\Requests\UpdateRabuRequest;
use App\Models\Rabu;

class RabuController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas2.create', [
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
    public function store(StoreRabuRequest $kelas2)
    {
        $validatedData = $kelas2->validated();

        Rabu::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rabu  $rabu
     * @return \Illuminate\Http\Response
     */
    public function edit(Rabu $kelas2)
    {
        return view('dashboard.kelas2.edit', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
            'rabu' => $kelas2
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rabu  $rabu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRabuRequest $request, Rabu $kelas2)
    {
        $validatedData = $request->validated();

        Rabu::where('id', $kelas2->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }
}
