<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\AboutComponent;
use App\Livewire\Backend\BebidasAddComponent;
use App\Livewire\Backend\BebidasComponent;
use App\Livewire\Backend\BebidaseditComponent;
use App\Livewire\Backend\CombosAddComponent;
use App\Livewire\Backend\CombosComponent;
use App\Livewire\Backend\CombosEditComponent;
use App\Livewire\Backend\MenusAddComponent;
use App\Livewire\Backend\MenusComponent;
use App\Livewire\Backend\MenusEditComponent;
use App\Livewire\Backend\PolloAddComponent;
use App\Livewire\Backend\PolloEditComponent;
use App\Livewire\Backend\PollosComponent;
use App\Livewire\WebFrontend\HomeComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", HomeComponent::class)->name("home");



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[Controller::class, 'index'])->name('dashboard');
    Route::get('/abouts',AboutComponent::class)->name('abouts');
    Route::get('/menus',MenusComponent::class)->name('menus');
    Route::get('/edit/menus/{id}',MenusEditComponent::class)->name('editMenu');
    Route::get('/add/menus',MenusAddComponent::class)->name('addMenu');

    Route::get('/bebidas',BebidasComponent::class)->name('bebidas');
    Route::get('/edit/bebidas/{id}',BebidaseditComponent::class)->name('editBebida');
    Route::get('/add/bebidas',BebidasAddComponent::class)->name('addBebida');

    Route::get('/pollos',PollosComponent::class)->name('pollos');
    Route::get('/edit/pollos/{id}',PolloEditComponent::class)->name('editPollo');
    Route::get('/add/pollo',PolloAddComponent::class)->name('addPollo');

    Route::get('/combos',CombosComponent::class)->name('combos');
    Route::get('/edit/combos/{id}',CombosEditComponent::class)->name('editCombo');
    Route::get('/add/combos',CombosAddComponent::class)->name('addCombo');
    
 

  
});
