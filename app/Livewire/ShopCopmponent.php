<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopCopmponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-copmponent',['products' => $products])->layout('layouts.base');
    }
}
