<?php

namespace App\Http\Controllers;

use App\Models\Selasa;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SelasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
    public function store(Request $kelas1)
    {
        $kelas1->slug = SlugService::createSlug(Selasa::class, 'slug', $kelas1->kegiatan);

        $validatedData = $kelas1->validate([
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ]);

        Selasa::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Selasa  $selasa
     * @return \Illuminate\Http\Response
     */
    public function show(Selasa $selasa)
    {
        //
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
    public function update(Request $request, Selasa $kelas1)
    {
        $rules = [
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ];

        if ($request->slug != $kelas1->slug) {
            $rules['slug'] = 'required|unique:selasas';
        }

        $validatedData = $request->validate($rules);

        Selasa::where('id', $kelas1->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selasa  $selasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selasa $selasa)
    {
        //
    }
}
