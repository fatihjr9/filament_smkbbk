<?php

namespace App\Livewire;

use App\Models\Jurusan;
use Livewire\Component;

class CardProdi extends Component
{
    public function render()
    {
        return view("livewire.card-prodi", [
            "prodi" => Jurusan::all(),
        ]);
    }
}
