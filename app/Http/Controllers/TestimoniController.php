<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimoniRequest;
use App\Http\Requests\UpdateTestimoniRequest;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
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
    public function store(StoreTestimoniRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Testimoni::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Testimoni telah ditambahkan.');

        return redirect('/dashboard/beranda');
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
    public function update(UpdateTestimoniRequest $request, Testimoni $beranda1)
    {
        $validatedData = $request->validated();

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
}
