<?php

namespace App\Livewire\Backend;

use App\Models\Pollo;
use Livewire\Component;

class PollosComponent extends Component
{

    public $search = '';
    public $perPage = 5;

    public function deletePollo($id)
    {
        $project = Pollo::find($id);
        $project->delete();
        session()->flash('success', 'Eliminado');
        redirect('/pollos');
    }
    public function render()
    {
        $pollos = Pollo::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.pollos-component',compact('pollos'));
    }
}
