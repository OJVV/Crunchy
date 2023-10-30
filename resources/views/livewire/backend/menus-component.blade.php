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
                <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Entradas</h2>
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
                        <a href="{{route('addMenu')}}" class="btn btn-success">Agregar Nueva Entrada</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered w-full text-center">
                        <thead>
                            <tr>
                                <th class="flex-col  text-black">Id</th>
                                <th class="flex-col  text-black">Categoria</th>
                                <th class="flex-col  text-black">Title</th>
                                <th class="flex-col  text-black">Image</th>
                                <th class="flex-col  text-black">Descripcion</th>
                                <th class="flex-col  text-black">Precio</th>
                                <th class="flex-col  text-black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $menu)
                            <tr>
                                <td  class=" text-black" >{{$menu->id}}</td>
                                <td  class=" text-black">{{$menu->categoria}}</td>
                                <td  class=" text-black">{{$menu->title}}</td>
                                <td><img src="{{ asset('storage/menu/' . $menu->project_image) }}" width="120" class="img-thumbnail" alt="img"></td>
                                <td  class=" text-black">{{$menu->descripcion}}</td>
                                <td  class=" text-black">{{$menu->precio}}</td>
                                        
                                <td class="">
                                  
                                    <a href="{{route('editMenu', ['id'=>$menu->id])}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <button href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-1" wire:click.prevent="deleteMenu('{{$menu->id}}')">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


