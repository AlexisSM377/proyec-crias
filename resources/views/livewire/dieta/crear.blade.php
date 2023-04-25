<div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-jet-form-section submit="registrarCuarentena">
                    <x-slot name="title">
                        Registro de dieta de cuarentena
                    </x-slot>

                    <x-slot name="description">
                        Ingresar la dieta que tendra la cria en el periodo de cuarentena.
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-6">
                            <p class="font-bold text-gray-900">Información de la cría por enfermar:</p>
                            <span class="font-bold text-gray-700 bg-blue-100 rounded">
                                {{$cria->name}}
                            </span>
                            <p class="text-sm font-medium text-gray-900">
                                {{$cria->description}}
                            </p>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <x-jet-label for="corral" value="Corral para cuarentena" />
                            <select name="corral" id="corral" wire:model="corral" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona una corral</option>
                                @foreach ($corrales as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="corral" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <x-jet-label for="dieta" value="Dieta" />
                            <x-jet-input id="dieta" type="text" class="mt-1 block w-full" wire:model="dieta" autocomplete="dieta" />
                            <x-jet-input-error for="dieta" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <x-jet-label for="tratamiento" value="Tratamiento" />
                            <x-jet-input id="tratamiento" type="text" class="mt-1 block w-full" wire:model="tratamiento" autocomplete="tratamiento" />
                            <x-jet-input-error for="tratamiento" class="mt-2" />
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-jet-action-message class="mr-3" on="saved">
                            <span class="bg-green-300 rounded px-4 py-1 text-gray-700 font-bold mr-2">Registro exitoso</span>
                        </x-jet-action-message>
                        <x-jet-action-message class="mr-3" on="error">
                            <span class="bg-red-300 rounded px-4 py-1 text-gray-700 font-bold mr-2">Algo salió mal, inténtalo nuevamente</span>
                        </x-jet-action-message>

                        <x-jet-button>
                            Registrar
                        </x-jet-button>
                    </x-slot>
                </x-jet-form-section>

            </div>
        </div>
    </div>
</div>

