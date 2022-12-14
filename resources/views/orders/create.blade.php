<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Adicionar Pedido
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('orders.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="flex flex-row bg-white">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label class="block font-medium text-sm text-gray-700">Produto</label>
                                <select name="produto_id" class="form-control" value="{{ old('produto_id', '') }}">
                                    <option> </option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->nome }}</option>
                                @endforeach
                                </select>
                                @error('Produto')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="nome" class="block font-medium text-sm text-gray-700">Quantidade</label>
                                <input type="number" name="quantidade" id="quantidade" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('quantidade', '') }}" />
                                @error('Quantidade')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label class="block font-medium text-sm text-gray-700">Pagamento</label>
                                <select name="pagamento" class="form-control" value="{{ old('pagamento', '') }}">
                                    <option></option>
                                    <option>Cart??o de Cr??dito</option>
                                    <option>Boleto Banc??rio</option>
                                    <option>Cart??o de D??bito</option>
                                    <option>Dinheiro</option>
                                </select>
                                @error('Pagamento')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-between flex-row bg-white">
                            <div class="flex items-center justify-end px-4 py-3 bg-white text-right sm:px-6">
                                <button lass="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    <a href="{{ route('orders.index') }}">Voltar</a>
                                </button>
                            </div>
                            <div class="flex items-center justify-end px-4 py-3 bg-white text-right sm:px-6">
                                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    Fazer pedido
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
