<?php

namespace App\Livewire\Backend;

use App\Models\Pollo;
use Livewire\Component;
use Livewire\WithFileUploads;

class PolloEditComponent extends Component
{
    use WithFileUploads;
    public $categoria;
    public $title;
    public $precio;
    public $descripcion;
    public $project_image;
    public $pollo;
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
        $this->pollo = $id;
        $pollo = Pollo::find($id);
        $this->title = $pollo->title;
        $this->categoria = $pollo->categoria;
        $this->precio = $pollo->precio;
        $this->descripcion = $pollo->descripcion;
        $this->project_image = $pollo->project_image;
        
    }

    public function editPollo()
    {
        $this->validate();
        $pollo = Pollo::find($this->menu);
        $pollo->title = $this->title;
        $pollo->categoria = $this->categoria;
        $pollo->precio = $this->precio;
        $pollo->descripcion = $this->descripcion;
       
        if ($this->new_image) {
            $image = $this->new_image->store('public/pollo');
            $nombre_imagen = str_replace('public/pollo/', '', $image);
            $pollo->project_image = $nombre_imagen; 
        }

    
        $pollo->save();
        session()->flash('success','Editado Exitosamente');

        return redirect()->route('pollos');
 
    }
    public function render()
    {
        return view('livewire.backend.pollo-edit-component');
    }
}
