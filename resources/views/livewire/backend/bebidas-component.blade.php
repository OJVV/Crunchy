<div>

      
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">  
        </h2>
    </x-slot>

  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl rounded p-4">
                <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Menú</h2>
                <div class="row">

                    <div class="col-md-3 float-left mb-3 ml-2">
                        <input type="search" name="search" id="search" class="form-control pull-left" wire:model="search" wire:poll.750ms>
                        
                    </div>
                    <div class="col-md-3 float-left mb-3 ml-2">
                        <select name="perPage" id="perPage" class="form-control" wire:model="perPage" wire:poll.750ms>
                            
                            <option value="">Select the Page Size</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{route('addBebida')}}"class="btn btn-success bg-yellow-600 font-bold">Añadir Bebida</a>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @forelse ($bebidas as $bebida )
                        
                        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                            <div class="leading-10">
                                <a href="#" class="text-xl font-bold text-black">
                                    {{$bebida->title}}
                                </a>
                                <img src="{{ asset('storage/bebida/' . $bebida->project_image) }}" width="120" class="img-thumbnail" alt="img"></td>
            
                            </div>
                
                            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                                <a href="{{route('editBebida', $bebida->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                                    Editar
                                </a>
                
                                <button type="button" wire:click.prevent="deleteBebida('{{$bebida->id}}')"  class="bg-red-600 py-2 px-4 rounded-lg text-blue text-xs font-bold uppercase text-center">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                
                    @empty 
                
                    <p class="p-3 text-center text-sm text-gray-600"> No Hay Trabajo Publicado</p>
                    @endforelse
                   
                </div>
            </div>
        </div>
    </div>

</div>


