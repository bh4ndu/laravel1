<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('registro de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/clientes/guardar">
                        @csrf 
                        
                        <label>nombre</label>
                        <input type="text" name="contactFirstName" class="form-control">

                        <label>apellido</label>
                        <input type="text" name="contactLastName" class="form-control">

                        <label>telefono</label>
                        <input type="text" name="phone" class="form-control">

                        <label>direccion</label>
                        <input type="text" name="addressLine1" class="form-control">

                        <br>
                        <button type="submit" class="btn btn-primary">registrar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
