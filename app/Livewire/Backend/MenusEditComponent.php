<?php

namespace App\Livewire\Backend;

use Carbon\Carbon;
use App\Models\Menu;
use Livewire\Component;
use Livewire\WithFileUploads;

class MenusEditComponent extends Component
{
    use WithFileUploads;
    public $categoria;
    public $title;
    public $precio;
    public $descripcion;
    public $project_image;
    public $menu;
    public $new_image;

    protected $rules =[
        'title' => 'required|string',
        'categoria' => 'required|string',
        'descripcion' => 'required|string',
        'precio' => 'required|string',
        'new_image' => 'nullable|mimes:jpg,jpeg.png'
      
    ];

    public function mount($id)
    {
        $this->menu = $id;
        $menu = Menu::find($id);
        $this->title = $menu->title;
        $this->categoria = $menu->categoria;
        $this->precio = $menu->precio;
        $this->descripcion = $menu->descripcion;
        $this->project_image = $menu->project_image;
        
    }

    public function editMenu()
    {
        $this->validate();
        $menu = Menu::find($this->menu);
        $menu->title = $this->title;
        $menu->categoria = $this->categoria;
        $menu->precio = $this->precio;
        $menu->descripcion = $this->descripcion;
       
        if ($this->new_image) {
            $image = $this->new_image->store('public/menu');
            $nombre_imagen = str_replace('public/menu/', '', $image);
            $menu->project_image = $nombre_imagen; 
        }

    
        $menu->save();
        session()->flash('success','Editado Exitosamente');

        return redirect()->route('menus');
 
    }

    public function render()
    {
        return view('livewire.backend.menus-edit-component');
    }
}
