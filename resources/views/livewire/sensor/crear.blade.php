<div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-jet-form-section submit="registrarSensor">
                    <x-slot name="title">
                        Registro de información de sensor
                    </x-slot>

                    <x-slot name="description">
                        Ingresar los datos obtenidos por el sensor de la crías con clasificación de carne Grasa Tipo 2 para identificar cuando están por enfermarse.
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-6">
                            <x-jet-label for="cria" value="Cría" />
                            <select name="cria" id="cria" wire:model="cria" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona una cría</option>
                                @foreach ($crias as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="cria" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="corazon" value="Frecuencia cardiaca" />
                            <x-jet-input id="corazon" type="text" class="mt-1 block w-full" wire:model="corazon" autocomplete="corazon" />
                            <x-jet-input-error for="corazon" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="respiracion" value="Frecuencia respiratoria" />
                            <x-jet-input id="respiracion" type="text" class="mt-1 block w-full" wire:model="respiracion" autocomplete="respiracion" />
                            <x-jet-input-error for="respiracion" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="sangre" value="Frecuencia sanguínea" />
                            <x-jet-input id="sangre" type="text" class="mt-1 block w-full" wire:model="sangre" autocomplete="sangre" />
                            <x-jet-input-error for="sangre" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="temperatura" value="Temperatura" />
                            <x-jet-input id="temperatura" type="text" class="mt-1 block w-full" wire:model="temperatura" autocomplete="temperatura" />
                            <x-jet-input-error for="temperatura" class="mt-2" />
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
