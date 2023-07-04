<?php

namespace App\Http\Livewire;

use App\Models\Rabu;
use Livewire\Component;

class Kelas2Alert extends Component
{
    public $rabuId;

    public function render()
    {
        return view('livewire.kelas2-alert');
    }

    public function destroy($rabuId)
    {
        Rabu::find($rabuId)->delete();

        return redirect('/dashboard/kelas');
    }
}
