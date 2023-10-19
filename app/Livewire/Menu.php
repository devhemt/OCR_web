<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Menu extends Component
{
    public $check = false;

    public function render()
    {
        if (Auth::guard("web")->check()) {
            $this->check = true;
        }

        return view('livewire.menu');
    }
}
