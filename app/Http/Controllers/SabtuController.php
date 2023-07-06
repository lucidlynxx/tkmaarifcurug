<?php

namespace App\Http\Controllers;

use App\Models\Sabtu;
use Illuminate\Http\Request;

class SabtuController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas5.create', [
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
    public function store(Request $kelas5)
    {
        $validatedData = $kelas5->validate([
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ]);

        Sabtu::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sabtu  $sabtu
     * @return \Illuminate\Http\Response
     */
    public function edit(Sabtu $kelas5)
    {
        return view('dashboard.kelas5.edit', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
            'sabtu' => $kelas5
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sabtu  $sabtu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sabtu $kelas5)
    {
        $rules = [
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ];

        if ($request->slug != $kelas5->slug) {
            $rules['slug'] = 'required|unique:selasas';
        }

        $validatedData = $request->validate($rules);

        Sabtu::where('id', $kelas5->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }
}
