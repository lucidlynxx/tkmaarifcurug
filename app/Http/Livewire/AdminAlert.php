<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminAlert extends Component
{
    public $adminId;

    public function render()
    {
        return view('livewire.admin-alert');
    }

    public function destroy($adminId)
    {
        User::find($adminId)->delete();

        return redirect('/dashboard/admin');
    }
}
