<?php

namespace App\Livewire\Backend;

use App\Models\Pollo;
use Livewire\Component;
use Livewire\WithFileUploads;

class PolloAddComponent extends Component
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


    public function addPollo()
    {
        $this->validate();
        $pollo = new Pollo();
        $pollo->title = $this->title;
        $pollo->categoria = $this->categoria;
        $pollo->descripcion = $this->descripcion;
        $pollo->precio = $this->precio;

        $image = $this->project_image->store('public/pollo');
        $nombre_imagen = str_replace('public/pollo/', '', $image);
          //  dd($nombre_imagen);
        $pollo->project_image = $nombre_imagen;
       

        $pollo->save();

        session()->flash('success', 'Añadido');

        return redirect()->route('pollos');
      
       
        
    }
    public function render()
    {
        return view('livewire.backend.pollo-add-component');
    }
}
