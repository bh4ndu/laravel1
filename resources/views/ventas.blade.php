<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas') }}
        </h2>
        <a class="btn btn-primary registrar" href="#">registrar cliente</a>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
                        <tr>
                            <th>producto</th>
                            <th>tipo</th>
                            <th>codigo de serie</th>
                            <th>precio</th>
                        </tr>
                        @foreach ($listado as $venta)
                        <tr>
                            <td>{{ $venta -> productName }}</td>
                            <td>{{ $venta -> productLine }}</td>
                            <td>{{ $venta -> productCode }}</td>
                            <td>{{ $venta -> productScale }}</td>
                            <td>
                            <a href="#" class="btn btn-sucess">editar</a>
                            <a href="#" class="btn btn-danger">eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
