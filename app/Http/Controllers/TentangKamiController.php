<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use App\Http\Requests\StoreTentangKamiRequest;
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
     * @param  \App\Http\Requests\StoreTentangKamiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTentangKamiRequest $request)
    {
        //
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
        $rules = [
            'visi' => 'required|max:255',
            'misi1' => 'required|max:255',
            'misi2' => 'required|max:255',
            'misi3' => 'required|max:255',
            'fasilitas1' => 'required|max:255',
            'fasilitas2' => 'required|max:255',
            'fasilitas3' => 'required|max:255',
            'fasilitas4' => 'required|max:255',
            'fasilitas5' => 'required|max:255',
            'fasilitas6' => 'required|max:255',
            'image' => 'image|file|max:5120'
        ];

        $validatedData = $request->validate($rules);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(TentangKami $tentangKami)
    {
        //
    }
}
