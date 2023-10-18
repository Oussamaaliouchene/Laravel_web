<?php

namespace App\Livewire;

use Livewire\Component;

class CartCopmponent extends Component
{
    public function render()
    {
        return view('livewire.cart-copmponent')->layout('layouts.base');
    }
}
