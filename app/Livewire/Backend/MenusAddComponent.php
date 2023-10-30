<?php

namespace App\Livewire\Backend;

use Carbon\Carbon;
use App\Models\Menu;
use Livewire\Component;
use Livewire\WithFileUploads;

class MenusAddComponent extends Component
{
    use WithFileUploads;
    public $categoria;
    public $title;
    public $precio;
    public $descripcion;
    public $project_image;
    

    protected $rules =[
        'title' => 'required|string',
        'categoria' => 'required|string',
        'descripcion' => 'required|string',
        'precio' => 'required|string',
        'project_image' => 'required|mimes:jpg,jpeg.png'
    ];


    public function addMenu()
    {
        $this->validate();
        $menu = new Menu();
        $menu->title = $this->title;
        $menu->categoria = $this->categoria;
        $menu->descripcion = $this->descripcion;
        $menu->precio = $this->precio;

        $image = $this->project_image->store('public/menu');
        $nombre_imagen = str_replace('public/menu/', '', $image);
          //  dd($nombre_imagen);
        $menu->project_image = $nombre_imagen;
       

        $menu->save();

        session()->flash('success', 'Añadido');
       
       
        
    }
    public function render()
    {
        return view('livewire.backend.menus-add-component');
    }
}
