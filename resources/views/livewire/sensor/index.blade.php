<div>
    
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-table title="Registros de sensores">
                    <x-slot name="columns">
                        <x-th text="Cría"> </x-th>
                        <x-th text="Frecuencia cardiaca"> </x-th>
                        <x-th text="Frecuencia respiratoria"> </x-th>
                        <x-th text="Frecuencia saguínea"> </x-th>
                        <x-th text="Temperatura"> </x-th>
                        <x-th position="text-center" text="Por enfermarse"> </x-th>
                        <x-th position="text-center" text="Registrado el"> </x-th>
                        <x-th position="text-center" text="Acciones"> </x-th>
                    </x-slot>

                    @forelse ($sensorLogs->unique('cria_id') as $log)
                        <tr class="hover:bg-gray-100">
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    {{$log->cria->name}}
                                </span>
                                <p class="text-sm font-medium text-gray-900 truncate overflow-ellipsis w-64">
                                    {{$log->cria->descripcion}}
                                </p>
                            </x-td>
                            <x-td>
                                {{$log->ritmo_cardiaco}}
                            </x-td>
                            <x-td>
                                {{$log->frecuencia_respiratoria}}
                            </x-td>
                            <x-td>
                                {{$log->tasa_sangre}}
                            </x-td>
                            <x-td>
                                {{$log->temperatura}}
                            </x-td>
                            <x-td position="text-center">
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 px-1 {{ $log->saludable? 'bg-green-200' : 'bg-red-200' }} rounded-full">
                                    {{ $log->saludable ? 'NO' : 'SI' }}
                                </span>
                            </x-td>
                            <x-td>
                                {{$log->created_at}}
                            </x-td>
                            <x-td>
                                @if ($log->saludable == false )
                                <a href="{{route('dieta.crear',$log->cria_id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    Cuarentena
                                </a>
                                @endif

                            </x-td>

                        </tr>
                    @empty
                        <tr class="hover:bg-gray-100">
                            <x-td colspan="6" position="text-center font-bold">
                                No se encontrarón resultados...
                            </x-td>
                        </tr>
                    @endforelse

                    <x-slot name="links">
                        {{ $sensorLogs->links() }}
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</div>
