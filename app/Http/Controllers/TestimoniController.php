<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
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
        return view('dashboard.testimoni.create', [
            'title' => "TK Ma'arif Curug | Beranda",
            'author' => 'Novy Nurlelasari',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->slug = SlugService::createSlug(Testimoni::class, 'slug', $request->nama);

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required',
            'image' => 'image|file|max:5120'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Testimoni::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Testimoni telah ditambahkan.');

        return redirect('/dashboard/beranda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $beranda1)
    {
        return view('dashboard.testimoni.edit', [
            'title' => "TK Ma'arif Curug | Beranda",
            'author' => 'Novy Nurlelasari',
            'testimoni' => $beranda1
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $beranda1)
    {
        $rules = [
            'nama' => 'required|max:255',
            'deskripsi' => 'required',
            'image' => 'image|file|max:5120'
        ];

        if ($request->slug != $beranda1->slug) {
            $rules['slug'] = 'required|unique:testimonis';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Testimoni::where('id', $beranda1->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Testimoni telah diubah.');

        return redirect('/dashboard/beranda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        //
    }
}
