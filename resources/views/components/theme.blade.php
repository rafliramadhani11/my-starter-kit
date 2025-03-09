<x-filament::dropdown placement="bottom-start">
    <x-slot name="trigger">
        {{-- <x-filament::icon-button icon="heroicon-m-moon" size="sm" /> --}}
        <x-filament::button color="gray" size="sm" class="gap-3">
            Theme Preference
        </x-filament::button>
    </x-slot>

    <x-filament::dropdown.list>
        <x-filament::dropdown.list.item class="gap-3" icon="heroicon-m-moon" x-on:click="darkMode = 'dark'">
            Dark Theme
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item class="gap-3" icon="heroicon-m-sun" x-on:click="darkMode = 'light'">
            Light Theme
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item class="gap-3" icon="heroicon-m-computer-desktop"
            x-on:click="darkMode = 'system'">
            System Preferences
        </x-filament::dropdown.list.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
