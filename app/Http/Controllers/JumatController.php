<?php

namespace App\Http\Controllers;

use App\Models\Jumat;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class JumatController extends Controller
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
    public function store(Request $kelas4)
    {
        $kelas4->slug = SlugService::createSlug(Jumat::class, 'slug', $kelas4->kegiatan);

        $validatedData = $kelas4->validate([
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ]);

        Jumat::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function show(Jumat $jumat)
    {
        //
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
    public function update(Request $request, Jumat $kelas4)
    {
        $rules = [
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ];

        if ($request->slug != $kelas4->slug) {
            $rules['slug'] = 'required|unique:selasas';
        }

        $validatedData = $request->validate($rules);

        Jumat::where('id', $kelas4->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jumat $jumat)
    {
        //
    }
}
