<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Intervention\Image;

class Tableimage extends Component
{
    public $data;

    public function render()
    {
        $this->data = DB::table('image')
            ->join('users', 'image.user_id','=', 'users.id')
            ->select('image.*','users.name','users.email')
            ->get();

        return view('livewire.tableimage');
    }
}
