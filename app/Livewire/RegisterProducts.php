<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterProducts extends Component
{
    public function render()
    {
        return view('livewire.register-products')
                ->layout('layouts.app');
    }
}