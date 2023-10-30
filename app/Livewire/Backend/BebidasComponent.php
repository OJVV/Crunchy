<?php

namespace App\Livewire\Backend;

use App\Models\Bebida;
use Livewire\Component;

class BebidasComponent extends Component
{

    public $search = '';
    public $perPage = 5;

    public function deleteBebida($id)
    {
        $project = Bebida::find($id);
        $project->delete();
        session()->flash('success', 'Eliminado');
        redirect('/bebidas');
    }
    public function render()
    {
        $bebidas = Bebida::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.bebidas-component',compact('bebidas'));
    }
}
