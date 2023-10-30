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
                <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Añadir Nuevo Plato</h2>
                <form wire:submit.prevent ="addMenu" enctype="multipart/form-data" method="POST">
                    @csrf
                 <div class="form-group">
                    <label for="categoria" class="label-control">Categoria<b class="text-danger">*</b></label>
                   <select name="categoria" id="categoria" class="form-control" wire:model = "categoria">
                    <option value="">Seleccionar Categoria</option>
                    <option value="Entradas">Entradas</option>
               
                   </select>
                    @error('categoria')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                    <div class="form-group">
                        <label for="title" class="label-control">Nombre de Plato<b class="text-danger ">*</b></label>
                        <input type="text" name="title" id="title" class="form-control w-full mx-2" wire:model='title'>
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="label-control">Descripción<b class="text-danger ">*</b></label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control w-full mx-2" wire:model='descripcion'>
                        @error('descripcion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="precio" class="label-control">Precio<b class="text-danger ">*</b></label>
                        <input type="text" name="precio" id="precio" class="form-control w-full mx-2" wire:model='precio'>
                        @error('precio')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <label for="project_image" class="label-control">Project Image<b class="text-danger">*</b></label>
                        <input type="file" name="project_image" id="project_image" class="form-control w-full mx-2" wire:model='project_image'>
                       @if($project_image)
                            <img src="{{ $project_image->temporaryurl()}}" width="120" alt="" class="">
                         @endif   
                    </div>


                    <div class="form-group">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-2 mx-2" type="submit" >
                            Save
                        </button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

</div>


