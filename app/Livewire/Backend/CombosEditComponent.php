<?php

namespace App\Livewire\Backend;

use App\Models\Combo;
use Livewire\Component;
use Livewire\WithFileUploads;

class CombosEditComponent extends Component
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
        $bebida = Combo::find($id);
        $this->title = $bebida->title;
        $this->categoria = $bebida->categoria;
        $this->precio = $bebida->precio;
        $this->descripcion = $bebida->descripcion;
        $this->project_image = $bebida->project_image;
        
    }

    public function editCombo()
    {
        $this->validate();
        $combo = Combo::find($this->menu);
        $combo->title = $this->title;
        $combo->categoria = $this->categoria;
        $combo->precio = $this->precio;
        $combo->descripcion = $this->descripcion;
       
        if ($this->new_image) {
            $image = $this->new_image->store('public/combo');
            $nombre_imagen = str_replace('public/combo/', '', $image);
            $combo->project_image = $nombre_imagen; 
        }

    
        $combo->save();
        session()->flash('success','Editado Exitosamente');

        return redirect()->route('combos');
 
    }
    public function render()
    {
        return view('livewire.backend.combos-edit-component');
    }
}
