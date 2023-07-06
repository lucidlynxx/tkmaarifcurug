<?php

namespace App\Http\Controllers;

use App\Models\Kamis;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class KamisController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas3.create', [
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
    public function store(Request $kelas3)
    {
        $kelas3->slug = SlugService::createSlug(Kamis::class, 'slug', $kelas3->kegiatan);

        $validatedData = $kelas3->validate([
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ]);

        Kamis::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamis  $kamis
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamis $kelas3)
    {
        return view('dashboard.kelas3.edit', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
            'kamis' => $kelas3
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamis  $kamis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamis $kelas3)
    {
        $rules = [
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ];

        if ($request->slug != $kelas3->slug) {
            $rules['slug'] = 'required|unique:selasas';
        }

        $validatedData = $request->validate($rules);

        Kamis::where('id', $kelas3->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }
}
