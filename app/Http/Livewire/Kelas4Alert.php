<?php

namespace App\Http\Livewire;

use App\Models\Jumat;
use Livewire\Component;

class Kelas4Alert extends Component
{
    public $jumatId;

    public function render()
    {
        return view('livewire.kelas4-alert');
    }

    public function destroy($jumatId)
    {
        Jumat::find($jumatId)->delete();

        return redirect('/dashboard/kelas');
    }
}
