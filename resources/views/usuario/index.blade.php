<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Listado de usuarios</h1>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Nombre</th>
                            <th class="border px-4 py-2">Email</th>
                            <th class="border px-4 py-2">Fecha de Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td class="border px-4 py-2">{{ $usuario->id }}</td>
                            <td class="border px-4 py-2">{{ $usuario->name }}</td>
                            <td class="border px-4 py-2">{{ $usuario->email }}</td>
                            <td class="border px-4 py-2">{{ $usuario->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>
</x-app-layout>
