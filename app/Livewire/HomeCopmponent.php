<?php

namespace App\Livewire;

use Livewire\Component;

class HomeCopmponent extends Component
{
    public function render()
    {
        return view('livewire.home-copmponent')->layout('layouts.base');
    }
}
