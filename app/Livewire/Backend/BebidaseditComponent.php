<?php

namespace App\Livewire\Backend;

use App\Models\Bebida;
use Livewire\Component;
use Livewire\WithFileUploads;

class BebidaseditComponent extends Component
{
    use WithFileUploads;
    public $categoria;
    public $title;
    public $precio;
    public $descripcion;
    public $project_image;
    public $bebida;
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
        $this->bebida = $id;
        $bebida = Bebida::find($id);
        $this->title = $bebida->title;
        $this->categoria = $bebida->categoria;
        $this->precio = $bebida->precio;
        $this->descripcion = $bebida->descripcion;
        $this->project_image = $bebida->project_image;
        
    }

    public function editBebida()
    {
        $this->validate();
        $bebida = Bebida::find($this->menu);
        $bebida->title = $this->title;
        $bebida->categoria = $this->categoria;
        $bebida->precio = $this->precio;
        $bebida->descripcion = $this->descripcion;
       
        if ($this->new_image) {
            $image = $this->new_image->store('public/bebida');
            $nombre_imagen = str_replace('public/bebida/', '', $image);
            $bebida->project_image = $nombre_imagen; 
        }

    
        $bebida->save();
        session()->flash('success','Editado Exitosamente');


 
    }
    public function render()
    {
        return view('livewire.backend.bebidasedit-component');
    }
}
