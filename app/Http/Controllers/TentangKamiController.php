<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use App\Http\Requests\UpdateTentangKamiRequest;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tentangkami.index', [
            'title' => "TK Ma'arif Curug | Tentang Kami",
            'author' => 'Novy Nurlelasari',
            'tentangKami' => TentangKami::get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function show(TentangKami $tentang_kami)
    {
        return view('dashboard.tentangkami.show', [
            'title' => "TK Ma'arif Curug | Tentang Kami",
            'author' => 'Novy Nurlelasari',
            'tentangKami' => $tentang_kami
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function edit(TentangKami $tentang_kami)
    {
        return view('dashboard.tentangkami.edit', [
            'title' => "TK Ma'arif Curug | Tentang Kami",
            'author' => 'Novy Nurlelasari',
            'tentangKami' => $tentang_kami
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTentangKamiRequest  $request
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTentangKamiRequest $request, TentangKami $tentang_kami)
    {
        $validatedData = $request->validated();

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        TentangKami::where('id', $tentang_kami->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Halaman telah diubah.');

        return redirect('/dashboard/tentang-kami');
    }
}
