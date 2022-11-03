<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>

                
            <div class="overflow-x-auto p-3">
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-500 bg-gray-50">
                        <tr>
                            <th class="p-2">
                                <div class="font-extrabold text-left">Product Name</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">Quantity</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">Total</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">Codígo</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-gray-100">
                        <!-- record 1 -->
                        <tr>
                            <td class="p-2">
                                <div class="font-medium text-gray-800">
                                    Dipirona
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left">1</div>
                            </td>
                            <td class="p-2">
                                <div class="text-left font-medium text-green-500">
                                  R$0,50
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left font-medium text-gray-800">
                                    <span>322342</span>
                                </div>
                            </td>
                        </tr>

                        <!-- record 2 -->
                        <tr>
                            <td class="p-2">
                                <div>
                                    <div class="font-medium text-gray-800">Litio</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left">2</div>
                            </td>
                            <td class="p-2">
                                <div class="text-left font-medium text-green-500">
                                    R$ 50,00
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left font-medium text-gray-800">
                                    <span>322342</span>
                                </div>
                            </td>
                        </tr>
                
                    </tbody>
                </table>
            </div>

        </div>
        
       

</x-app-layout>
