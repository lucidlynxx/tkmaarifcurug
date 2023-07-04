<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galeri.index', [
            'title' => "TK Ma'arif Curug | Galeri",
            'author' => 'Novy Nurlelasari',
            'galeris' => Galeri::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galeri.create', [
            'title' => "TK Ma'arif Curug | Guru",
            'author' => 'Novy Nurlelasari',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleriRequest $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required|max:255',
            'slug' => 'required|unique:galeris',
            'image' => 'required|image|file|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Galeri::create($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Galeri telah ditambahkan.');

        return redirect('/dashboard/galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('dashboard.galeri.edit', [
            'title' => "TK Ma'arif Curug | Galeri",
            'author' => 'Novy Nurlelasari',
            'galeri' => $galeri
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleriRequest  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleriRequest $request, Galeri $galeri)
    {
        $rules = [
            'kategori' => 'required|max:255',
            'image' => 'image|file|max:5120',
        ];

        if ($request->slug != $galeri->slug) {
            $rules['slug'] = 'required|unique:galeris';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Galeri::where('id', $galeri->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Galeri telah diubah.');

        return redirect('/dashboard/galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        //
    }
}
