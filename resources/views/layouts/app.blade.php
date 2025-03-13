<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{
    darkMode: localStorage.getItem('darkMode') ||
        localStorage.setItem('darkMode', 'system')
}" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
    x-bind:class="{
        'dark': darkMode === 'dark' || (darkMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)')
            .matches)
    }">

    <head>
        @include('partials.head')
    </head>

    <body class="h-screen min-h-screen text-zinc-900 antialiased dark:bg-zinc-950 dark:text-zinc-100 lg:flex">

        <div x-data="{ isOpen: false }" @click.outside="isOpen = false" x-cloak>
            {{-- Sidebar --}}
            <livewire:layouts.sidebar />


            {{-- Header --}}
            <livewire:layouts.header />
        </div>


        {{-- Main Content --}}
        <main class="m-2 grow rounded-xl p-6 lg:ms-[19rem] lg:border dark:lg:border-darkTheme dark:lg:bg-darkCardTheme">
            {{ $slot }}
        </main>

        @livewireScripts
        @filamentScripts
    </body>

</html>
