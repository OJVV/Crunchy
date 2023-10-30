<?php

namespace App\Livewire\WebFrontend;

use App\Models\Menu;
use App\Models\About;
use App\Models\Bebida;
use App\Models\Combo;
use App\Models\Pollo;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $abouts = About::all();
        $menus = Menu::all();
        $bebidas = Bebida::all();
        $pollos = Pollo::all();
        $combos = Combo::all();
        return view('livewire.web-frontend.home-component', ['abouts' => $abouts, 'menus' => $menus, 'bebidas' => $bebidas, 'pollos' => $pollos, 'combos' => $combos ])->layout("layouts.base");
    }
}
