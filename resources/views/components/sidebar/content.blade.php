<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- Examples --}}

    {{-- <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')" /> --}}
        
    <x-sidebar.dropdown title="Crias" :active="Str::startsWith(request()->route()->uri(), 'crias')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Listado" href="{{ route('crias.index') }}"
            :active="request()->routeIs('crias.index')" />
        <x-sidebar.sublink title="Crear Cria" href="{{ route('crias.crear') }}"
            :active="request()->routeIs('crias.crear')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Sensores" :active="Str::startsWith(request()->route()->uri(), 'sensor')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Registrar Datos" href="{{ route('sensor.crear') }}"
            :active="request()->routeIs('sensor.crear')" />
        <x-sidebar.sublink title="Crias por Enfermar" href="{{ route('sensor.index') }}"
            :active="request()->routeIs('sensor.index')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Dietas" :active="Str::startsWith(request()->route()->uri(), 'dieta')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>  

        <x-sidebar.sublink title="Listado" href="{{ route('dieta.index') }}"
            :active="request()->routeIs('dieta.index')" />
    </x-sidebar.dropdown>
       
</x-perfect-scrollbar>