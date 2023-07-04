<?php

namespace App\Http\Livewire;

use App\Models\Kamis;
use Livewire\Component;

class Kelas3Alert extends Component
{
    public $kamisId;

    public function render()
    {
        return view('livewire.kelas3-alert');
    }

    public function destroy($kamisId)
    {
        Kamis::find($kamisId)->delete();

        return redirect('/dashboard/kelas');
    }
}
