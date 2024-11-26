<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ListProducts extends Component
{


    public function products()
    {
        return Product::query()
            ->select(['id', 'product_name', 'product_type', 'description', 'niche', 'url'])
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.list-products', [
                'products' => $this->products(),
            ])->layout('layouts.app');
    }
}
