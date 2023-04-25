<div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-jet-form-section submit="registerCalf">
                    <x-slot name="title">
                        Registro de cría
                    </x-slot>

                    <x-slot name="description">
                        Ingresar los datos necesarios para el registro de la cría, de esta manera regresara la clasificación de la carne segun las datos registrados.
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="name" value="Nombre" />
                            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="name" autocomplete="name" />
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="descripcion" value="Descripción" />
                            <x-jet-input id="descripcion" type="text" class="mt-1 block w-full" wire:model="descripcion" autocomplete="descripcion" />
                            <x-jet-input-error for="descripcion" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="proveedor" value="Proveedor" />
                            <select name="proveedor" id="proveedor" wire:model="proveedor" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona un proveedor</option>
                                @foreach ($proveedores as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="proveedor" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="corral" value="Corral" />
                            <select name="corral" id="corral" wire:model="corral" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona un corral</option>
                                @foreach ($corrales as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="corral" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="proceso" value="proceso" />
                            <select name="proceso" id="proceso" wire:model="proceso" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona un proceso</option>
                                @foreach ($procesos as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="corral" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="peso" value="Peso (kg)" />
                            <x-jet-input id="peso" type="text" class="mt-1 block w-full" wire:model="peso" autocomplete="peso" />
                            <x-jet-input-error for="peso" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="musculo" value="Color musculo" />
                            <x-jet-input id="musculo" type="text" class="mt-1 block w-full" wire:model="musculo" autocomplete="musculo" />
                            <x-jet-input-error for="musculo" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="marmoleo" value="Marmoleo calidad" />
                            <x-jet-input id="marmoleo" type="text" class="mt-1 block w-full" wire:model="marmoleo" autocomplete="marmoleo" />
                            <x-jet-input-error for="marmoleo" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="costo" value="costo" />
                            <x-jet-input id="costo" type="text" class="mt-1 block w-full" wire:model="costo" autocomplete="costo" />
                            <x-jet-input-error for="costo" class="mt-2" />
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
