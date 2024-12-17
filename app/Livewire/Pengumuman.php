<?php

namespace App\Livewire;

use App\Models\Pengumuman as P;
use Livewire\Component;

class Pengumuman extends Component
{
    public function render()
    {
        return view("livewire.pengumuman", [
            "notif" => P::latest()->take(5)->get(),
        ]);
    }
}
