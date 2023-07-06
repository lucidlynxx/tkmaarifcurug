<?php

namespace App\Http\Controllers;

use App\Models\Rabu;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
    public function store(Request $kelas2)
    {
        $kelas2->slug = SlugService::createSlug(Rabu::class, 'slug', $kelas2->kegiatan);

        $validatedData = $kelas2->validate([
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ]);

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
    public function update(Request $request, Rabu $kelas2)
    {
        $rules = [
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ];

        if ($request->slug != $kelas2->slug) {
            $rules['slug'] = 'required|unique:selasas';
        }

        $validatedData = $request->validate($rules);

        Rabu::where('id', $kelas2->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }
}
