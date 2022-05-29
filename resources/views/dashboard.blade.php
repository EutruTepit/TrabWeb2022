<x-app-layout>
    <x-slot name="header">
        <!---<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>--->
       
     
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-a= sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                    <div class="row col-4">
                        <div class="col"><a href="#" class="btn btn-danger border-dark">Novo Fornecedor</a></div>
                        <div class="col"><a href="{{ route('produto_novo') }}" class="btn btn-danger border-dark">Novo Produto</a></div>
                        <div class="w-100 h-4"></div>
                        <div class="col"><a href="#" class="btn btn-danger border-dark">Listar Fornecedor</a></div>
                        <div class="col"><a href="#" class="btn btn-danger border-dark">Listar Produto</a></div>
                    </div>
                    </div>
                </div>  
                </div>
            </div>
        </div>
        
            <div class="py-12">
                <div class="max-w-7xl mx-a= sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-10">@yield('formulario')</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>     
</x-app-layout>


             