<x-app-layout>
    <x-slot name="header">
      <h1>Comprar produto</h1>
    </x-slot>  
            <form class=" flex flex-col px-4 pt-3">
                <div class="sm:flex align-center justify-center gap-3 mt-2">
                    <div class="flex-1 mr-3">
                        <x-jet-label for="produto" value="{{ __('Produto') }}" />
                        <select
                            id="produto"
                            type="text"
                            class="mt-1 block w-full"
                            wire:model.defer="state.name" autofocus
                            class="form-select"
                        >
                            <option value="">Paracetamol </option>
                            <option value="">Litio </option>
                            <option value=""> Pondera </option>
                            <option value=""> Dipirona </option>
                        </select>
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>
                    <div class="flex-1">
                        <x-jet-label for="quantidade" value="{{__('Quantidade') }}"/>
                        <x-jet-input id="quantidade" class="form-input block mt-1 w-full" type="number" name="quantidade" :value="old('quantidade')" required autofocus />
                    </div>
                </div>
                <div class="mt-2">
                    <x-jet-label for="codigo" value="{{__('Código') }}"/>
                    <x-jet-input id="codigo" class="block mt-1 w-full" type="number" name="quantidade" :value="old('name')" required />
                </div>

                {{-- Apenas visual --}}
                <div>
                    <p>Total a pagar:22,00</p>
                </div>
                <div class="flex justify-center items-center mt-3">
                    <a href="/dashboard">
                        <x-jet-button class="ml-4">
                            {{ __('comprar') }}
                        </x-jet-button>
                    </a>
             
                </div>
            </form>
           
        

</x-app-layout>
