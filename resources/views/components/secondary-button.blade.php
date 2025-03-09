<x-filament::button
    {{ $attributes->merge(['class' => 'dark:bg-zinc-950 border dark:border-zinc-700 font-light dark:text-white dark:hover:bg-zinc-700 bg-white hover:bg-zinc-100 text-zinc-950 border-zinc-200 hover:border-zinc-200']) }}>
    {{ $slot }}
</x-filament::button>
