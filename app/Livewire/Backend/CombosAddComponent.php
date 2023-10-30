<?php

namespace App\Livewire\Backend;

use App\Models\Combo;
use Livewire\Component;
use Livewire\WithFileUploads;

class CombosAddComponent extends Component
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


    public function addCombo()
    {
        $this->validate();
        $combo = new Combo();
        $combo->title = $this->title;
        $combo->categoria = $this->categoria;
        $combo->descripcion = $this->descripcion;
        $combo->precio = $this->precio;

        $image = $this->project_image->store('public/combo');
        $nombre_imagen = str_replace('public/combo/', '', $image);
          //  dd($nombre_imagen);
        $combo->project_image = $nombre_imagen;
       

        $combo->save();

        session()->flash('success', 'Añadido');
       
       
        
    }
    public function render()
    {
        return view('livewire.backend.combos-add-component');
    }
}
