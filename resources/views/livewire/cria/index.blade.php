<div>
    <x-slot name="header">
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">Crías</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-table title="Listado de crías">
                    <x-slot name="columns">
                        <x-th text="Nombre y descripción"> </x-th>
                        <x-th text="Peso y costo"> </x-th>
                        <x-th text="Marmoleo y musculo color"> </x-th>
                        <x-th text="Clasificación y Corral"> </x-th>
                        <x-th text="Proveedor"> </x-th>
                        <x-th text="Cuarentena"> </x-th>
                        <x-th position="text-center" text="Fecha"> </x-th>
                    </x-slot>

                    <x-slot name="actions">
                        <a href="{{ route('crias.crear') }}" class="pointer-events-auto rounded-md bg-blue-600 py-2 px-3 font-semibold leading-5 text-white hover:bg-blue-500">Registrar</a>
                    </x-slot>

                    @forelse ($crias as $cria)
                        <tr class="hover:bg-gray-100">
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    {{$cria->name}}
                                </span>
                                <p class="text-sm font-medium text-gray-900 truncate overflow-ellipsis w-36">
                                    {{$cria->descripcion}}
                                </p>
                            </x-td>
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    {{$cria->peso}} kg
                                </span>
                                <p class="text-sm font-medium text-gray-900">
                                    ${{$cria->costo}}
                                </p>
                            </x-td>
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    Calidad {{$cria->mormoleo}}
                                </span>
                                <p class="text-sm font-medium text-gray-900">
                                    {{$cria->color_muscular}}
                                </p>
                            </x-td>
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 px-1 {{ $cria->clasificacionCarne->type == 1 ? 'bg-green-200' : 'bg-red-200' }} rounded">
                                    {{$cria->clasificacionCarne->name}}
                                </span>
                                <p class="text-sm font-medium text-gray-900">
                                    {{$cria->corral->name}}
                                </p>
                            </x-td>
                            <x-td>
                                {{$cria->proveedor->name}}
                            </x-td>
                            <x-td position="text-center">
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 px-1 {{ $cria->cria_cuarentena ? 'bg-red-200' : 'bg-green-200' }} rounded-full">
                                    {{ $cria->cria_cuarentena ? 'SI' : 'NO' }}
                                </span>
                            </x-td>
                            <x-td>
                                {{$cria->created_at}}
                            </x-td>
                        </tr>
                    @empty
                        <tr class="hover:bg-gray-100">
                            <x-td colspan="7" position="text-center font-bold">
                                No se encontrarón resultados...
                            </x-td>
                        </tr>
                    @endforelse

                    <x-slot name="links">
                        {{ $crias->links() }}
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</div>
