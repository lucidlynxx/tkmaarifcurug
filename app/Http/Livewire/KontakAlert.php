<?php

namespace App\Http\Livewire;

use App\Models\Kontak;
use Livewire\Component;

class KontakAlert extends Component
{
    public $kontakId;

    public function render()
    {
        return view('livewire.kontak-alert');
    }

    public function destroy($kontakId)
    {
        Kontak::find($kontakId)->delete();

        return redirect('/dashboard/kontak');
    }
}
