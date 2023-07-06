<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBerandaRequest;
use App\Models\Header;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.beranda.index', [
            'title' => "TK Ma'arif Curug | Beranda",
            'author' => 'Novy Nurlelasari',
            'header' => Header::get(),
            'testimonis' => Testimoni::get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $beranda)
    {
        return view('dashboard.beranda.edit', [
            'title' => "TK Ma'arif Curug | Beranda",
            'author' => 'Novy Nurlelasari',
            'header' => $beranda
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBerandaRequest $request, Header $beranda)
    {
        $validatedData = $request->validated();

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        Header::where('id', $beranda->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Halaman telah diubah.');

        return redirect('/dashboard/beranda');
    }
}
