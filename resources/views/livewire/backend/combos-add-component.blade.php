<div>
    
      
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
    </x-slot>

  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           @if (Session::has('success'))
           <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
              @elseif(Session::has('error'))
              <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
           @endif
            <div class="bg-white overflow-hidden shadow-xl rounded p-4">
                <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Añadir Nuevo Combo</h2>
                <form wire:submit.prevent ="addCombo" enctype="multipart/form-data" method="POST">
                    @csrf
                 <div class="form-group">
                    <x-label for="categoria" value="{{ __('Categoria') }}" />
                   <select name="categoria" id="categoria" class="form-control" wire:model = "categoria">
                    <option value="">Seleccionar Categoria</option>
                    <option value="Combos">Combos</option>
                  
               
                   </select>
                    @error('categoria')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                    <div class="form-group">
                        <x-label for="title" value="{{ __('Combo') }}" />
                        <x-input 
                        id="title" 
                        class="block mt-1 w-full" 
                        type="text" 
                        wire:model="title" 
             
                        placeholder="title"
                        />
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <x-label for="descripcion" value="{{ __('Descripción') }}" />
                        <x-input 
                        id="descripcion" 
                        class="block mt-1 w-full" 
                        type="text" 
                        wire:model="descripcion" 
                        placeholder="descripcion"
                        />
                        @error('descripcion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <x-label for="precio" value="{{ __('Precio') }}" />
                        <x-input 
                        id="precio" 
                        class="block mt-1 w-full" 
                        type="text" 
                        wire:model="precio" 
                        placeholder="precio"
                        />
                        @error('precio')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <x-label for="project_image" value="{{ __('Imagen') }}" />
                        <x-input 
                        id="project_image" 
                        class="block mt-1 w-full" 
                        type="file" 
                        wire:model="project_image" 
                    
                        />
                       @if($project_image)
                            <img src="{{ $project_image->temporaryurl()}}" width="120" alt="" class="">
                         @endif   
                    </div>


                    <div class="form-group">
                        <x-button class="mt-2 bg-blue-600">
                            {{ __('Guardar') }}
                        </x-button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

</div>


