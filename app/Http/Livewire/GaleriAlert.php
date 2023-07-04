<?php

namespace App\Http\Livewire;

use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class GaleriAlert extends Component
{
    public $galeriId;

    public function render()
    {
        return view('livewire.galeri-alert');
    }

    public function destroy($galeriId)
    {
        $fileGambar = Galeri::where('id', $galeriId)->first();

        if ($fileGambar->image) {
            Storage::delete($fileGambar->image);
        }

        Galeri::find($galeriId)->delete();

        return redirect('/dashboard/galeri');
    }
}
