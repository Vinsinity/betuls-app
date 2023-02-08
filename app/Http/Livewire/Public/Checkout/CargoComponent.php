<?php

namespace App\Http\Livewire\Public\Checkout;

use App\Models\Cargo;
use Livewire\Component;

class CargoComponent extends Component
{
    public $cargo;

    public function render()
    {
        $cargos = Cargo::all();
        return view('livewire.public.checkout.cargo-component', compact('cargos'));
    }

    public function cargo(Cargo $cargo)
    {
        $this->emit('cargo_select', $cargo);
    }
}
