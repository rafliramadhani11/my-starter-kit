@props(['placement' => ''])

<x-filament::dropdown placement="{{ $placement }}">
    <x-slot name="trigger" class="toggleThemeDashboard">
        {{-- <x-filament::icon-button icon="heroicon-m-moon" size="sm" /> --}}
        <x-filament::button outlined icon="heroicon-o-wrench" size="sm"
            {{ $attributes->merge(['class' => 'w-full sm:text-sm text-xs btnThemeDashboard']) }}>
            Theme Mode
        </x-filament::button>
    </x-slot>

    <x-filament::dropdown.list>
        <x-filament::dropdown.list.item class="gap-3" icon="heroicon-m-moon" x-on:click="darkMode = 'dark'">
            Dark Mode
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item class="gap-3" icon="heroicon-m-sun" x-on:click="darkMode = 'light'">
            Light Mode
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item class="gap-3" icon="heroicon-m-computer-desktop"
            x-on:click="darkMode = 'system'">
            System Preference
        </x-filament::dropdown.list.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
