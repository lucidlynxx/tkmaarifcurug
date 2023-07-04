<?php

namespace App\Http\Livewire;

use App\Models\Senin;
use Livewire\Component;

class KelasAlert extends Component
{
    public $seninId;

    public function render()
    {
        return view('livewire.kelas-alert');
    }

    public function destroy($seninId)
    {
        Senin::find($seninId)->delete();

        return redirect('/dashboard/kelas');
    }
}
