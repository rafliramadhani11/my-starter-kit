<x-filament::button
    {{ $attributes->merge(['class' => 'dark:bg-white dark:font-medium  dark:text-black dark:hover:bg-zinc-300 bg-zinc-950 hover:bg-zinc-800 text-white']) }}>
    {{ $slot }}
</x-filament::button>
