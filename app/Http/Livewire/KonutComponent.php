<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KonutComponent extends Component
{
    public function render()
    {
        return view('livewire.konut-component')->layout('layouts.detay');
    }
}
