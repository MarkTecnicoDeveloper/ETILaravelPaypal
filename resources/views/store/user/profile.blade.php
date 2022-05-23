@extends('store.templates.master')

@section('title', 'Meu Perfil')

@section('content')

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-1 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informação Pessoal:</h3>
                    <p class="mt-1 text-sm text-gray-600">Formulario pra verificar seus dados do registro.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-1 gap-6">
                                <div class="col-span-6 sm:col-span-3 grid grid-cols-2 items-center">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Nome</label>
                                    <input type="text" name="name" id="first-name" placeholder="Meu Nome" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-3 grid grid-cols-2 items-center border-t pt-5">
                                    <label for="e-mail" class="block text-sm font-medium text-gray-700">E-Mail</label>
                                    <input type="text" name="email" id="e-mail" placeholder="Meu e-mail" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled>
                                </div>
                                <div class="col-span-6 sm:col-span-3 grid grid-cols-1 items-center border-t pt-5">
                                    <input type="submit" value="Enviar" class="w-full border rounded-md m-auto py-3 bg-gray-800 text-white cursor-pointer hover:bg-gray-900 transition-all">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection