<?php

namespace App\Http\Livewire;

use App\Models\Sabtu;
use Livewire\Component;

class Kelas5Alert extends Component
{
    public $sabtuId;

    public function render()
    {
        return view('livewire.kelas5-alert');
    }

    public function destroy($sabtuId)
    {
        Sabtu::find($sabtuId)->delete();

        return redirect('/dashboard/kelas');
    }
}
