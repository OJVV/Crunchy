<?php

namespace App\Livewire\Backend;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutComponent extends Component
{
    use WithFileUploads;

    public $descripcion;
    protected $rules = [
        'descripcion' => ['required'],
    ];

    public function mount(){
        $about = About::firstOrCreate(['id' => 1]);
        if($about){
            $this->descripcion = $about->descripcion;
        }
    }

    public function addAbout()
    {
        $this->validate([
            'descripcion' => 'required',
        ]);

        try{
    $about = About::firstOrCreate(['id' => 1]);
    if($about){
        $about->descripcion = $this->descripcion;
      
        $about->save();
        session()->flash('success' ,' Resume Update');
    } else {
        $about = new About();
        $about->descripcion = $this->descripcion;
    
        $about->save();
        session()->flash('success' ,' Resume Added');

    }

} catch(\Exception $e){
    $errMessage = $e->getMessage();
    session()->flash('error', $errMessage);
}

    }
    public function render()
    {
    return view('livewire.backend.about-component');
    }
}
