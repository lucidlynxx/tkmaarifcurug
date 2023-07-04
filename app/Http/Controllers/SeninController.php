<?php

namespace App\Http\Controllers;

use App\Models\Jumat;
use App\Models\Kamis;
use App\Models\Rabu;
use App\Models\Sabtu;
use App\Models\Selasa;
use App\Models\Senin;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SeninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kelas.index', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
            'senins' => Senin::get(),
            'selasas' => Selasa::get(),
            'rabus' => Rabu::get(),
            'kamis' => Kamis::get(),
            'jumats' => Jumat::get(),
            'sabtus' => Sabtu::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas.create', [
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
    public function store(Request $kela)
    {
        $kela->slug = SlugService::createSlug(Senin::class, 'slug', $kela->kegiatan);

        $validatedData = $kela->validate([
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ]);

        Senin::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Jadwal telah ditambahkan.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Senin  $senin
     * @return \Illuminate\Http\Response
     */
    public function show(Senin $senin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senin  $senin
     * @return \Illuminate\Http\Response
     */
    public function edit(Senin $kela)
    {
        return view('dashboard.kelas.edit', [
            'title' => "TK Ma'arif Curug | Kelas",
            'author' => 'Novy Nurlelasari',
            'senin' => $kela
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Senin  $senin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Senin $kela)
    {
        $rules = [
            'waktu' => 'required|max:255',
            'kegiatan' => 'required|max:255',
        ];

        if ($request->slug != $kela->slug) {
            $rules['slug'] = 'required|unique:senins';
        }

        $validatedData = $request->validate($rules);

        Senin::where('id', $kela->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Jadwal telah diubah.');

        return redirect('/dashboard/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Senin  $senin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Senin $senin)
    {
        //
    }
}
