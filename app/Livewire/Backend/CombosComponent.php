<?php

namespace App\Livewire\Backend;

use App\Models\Combo;
use Livewire\Component;

class CombosComponent extends Component
{
    public $search = '';
    public $perPage = 5;

    public function deleteCombo($id)
    {
        $project = Combo::find($id);
        $project->delete();
        session()->flash('success', 'Eliminado');
        redirect('/combos');
    }
    public function render()
    {
        $combos = Combo::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.combos-component', compact('combos'));
    }
}
