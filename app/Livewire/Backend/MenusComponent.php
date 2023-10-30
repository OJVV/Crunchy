<?php

namespace App\Livewire\Backend;

use App\Models\Menu;
use Livewire\Component;

class MenusComponent extends Component
{

    public $search = '';
    public $perPage = 5;

    public function deleteMenu($id)
    {
        $project = Menu::find($id);
        $project->delete();
        session()->flash('success', 'Eliminado');
        redirect('/menus');
    }
    public function render()
    {
        $menus = Menu::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.menus-component',compact('menus'));
    }
}
