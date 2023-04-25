<div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-table title="Crias en Cuarentena">
                    <x-slot name="columns">
                        <x-th text="Nombre y descripción"> </x-th>
                        <x-th text="Dieta"> </x-th>
                        <x-th text="Tratamieno"> </x-th>
                        <x-th text="Corral Asignado"> </x-th>
                        <x-th text="Fecha de Cuarentena"> </x-th>
                    </x-slot>

                    @forelse ($dietas as $dieta)
                        <tr class="hover:bg-gray-100">
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    {{$dieta->cria->name}}
                                </span>
                                <p class="text-sm font-medium text-gray-900 truncate overflow-ellipsis w-36">
                                    {{$dieta->cria->descripcion}}
                                </p>
                            </x-td>
                            <x-td>
                                {{$dieta->dieta}}
                            </x-td>
                            <x-td>
                                {{$dieta->tratamiento}}
                            </x-td>
                            <x-td>
                                {{$dieta->cria->corral->name}}
                            </x-td>
                            <x-td>
                                {{$dieta->created_at}}
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
                        {{ $dietas->links() }}
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</div>



