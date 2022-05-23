@extends('store.templates.master')

@section('title', 'Meu Carrinho de Compras')

@section('content')

    <h1 class="uppercase text-gray-800 text-3xl my-7 font-bold">Meu Carrinho de Compras:</h1>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden border-2 rounded-lg">
                    <table class="min-w-full">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4">
                                    Item
                                </th>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4">
                                    Preço
                                </th>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4">
                                    Qtd
                                </th>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4">
                                    Subtotal
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                                <tr class="bg-white {{ ($i % 2) == 0 ? 'bg-gray-100' : '' }}">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <div class="flex flex-row items-center">
                                            <img src="{{ url('assets/img/temp/batman.jpg') }}" alt="batman" style="max-width: 80px;">
                                            <p class="ml-4">My Product Name</p>
                                        </div>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                        R$ 30.00
                                    </td>
                                    <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex flex-row items-center justify-center">
                                            <a class="text-2xl bg-gray-900 text-white rounded-full h-6 w-6 mr-2 flex justify-center items-center hover:bg-gray-600 transition-all" href="#">-</a>
                                            <span class="text-sm">2</span>
                                            <a class="text-2xl bg-gray-900 text-white rounded-full h-6 w-6 ml-2 flex justify-center items-center hover:bg-gray-600 transition-all" href="#">+</a>
                                        <div>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                        R$ 60.00
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 flex flex-row justify-end">
        <p class="text-right px-6 text-xl bg-slate-100 py-4 w-1/3">
            <strong>Total: </strong>R$ 5.000,00
        </p>
    </div>

    <div class="flex flex-row justify-center items-center my-6">
        <a href="#" class="block bg-green-700 py-4 px-6 rounded-md text-white hover:bg-green-500 transition-all">
            Finalizar Compra
        </a>
    </div>

@endsection