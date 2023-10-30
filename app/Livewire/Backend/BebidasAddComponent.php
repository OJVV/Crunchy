<?php

namespace App\Livewire\Backend;

use App\Models\Bebida;
use Livewire\Component;
use Livewire\WithFileUploads;

class BebidasAddComponent extends Component
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


    public function addBebida()
    {
        $this->validate();
        $bebida = new Bebida();
        $bebida->title = $this->title;
        $bebida->categoria = $this->categoria;
        $bebida->descripcion = $this->descripcion;
        $bebida->precio = $this->precio;

        $image = $this->project_image->store('public/bebida');
        $nombre_imagen = str_replace('public/bebida/', '', $image);
          //  dd($nombre_imagen);
        $bebida->project_image = $nombre_imagen;
       

        $bebida->save();

        session()->flash('success', 'Añadido');
       
       
        
    }
    public function render()
    {
        return view('livewire.backend.bebidas-add-component');
    }
}
