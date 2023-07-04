<?php

namespace App\Http\Livewire;

use App\Models\Guru;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class GuruAlert extends Component
{
    public $guruId;

    public function render()
    {
        return view('livewire.guru-alert');
    }

    public function destroy($guruId)
    {
        $fileGambar = Guru::where('id', $guruId)->first();

        if ($fileGambar->image) {
            Storage::delete($fileGambar->image);
        }

        Guru::find($guruId)->delete();

        return redirect('/dashboard/guru');
    }
}
