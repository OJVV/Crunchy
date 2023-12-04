<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slogan') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl mb-2">Slogan</h2>
                    <form wire:submit.prevent ="addAbout">
                        @csrf
                     <div class="form-group flex flex-row">
                        <x-label for="descripcion" value="{{ __('Slogan') }}" />
                        <textarea width: 100px; class=" w-full text-black"name="descripcion" id="descripcion" cols="1" rows="1" wire:model='descripcion'></textarea>
                        @error('descripcion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>                        
                        <div class="form-group">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-2 mx-2" type="submit" >
                                Guardar
                            </button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>

    
</div>