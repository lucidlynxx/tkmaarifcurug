<?php

namespace App\Http\Livewire;

use App\Models\Selasa;
use Livewire\Component;

class Kelas1Alert extends Component
{
    public $selasaId;

    public function render()
    {
        return view('livewire.kelas1-alert');
    }

    public function destroy($selasaId)
    {
        Selasa::find($selasaId)->delete();

        return redirect('/dashboard/kelas');
    }
}
