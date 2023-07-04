<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Testimoni;
use Illuminate\Http\Request;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
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
    public function update(Request $request, Header $beranda)
    {
        $rules = [
            'namaTk' => 'required|max:255',
            'deskripsi' => 'required',
            'image' => 'image|file|max:5120'
        ];

        $validatedData = $request->validate($rules);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
    }
}
