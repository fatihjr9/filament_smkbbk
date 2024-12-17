<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SMK Bina Bangsa Kersana</title>

        <!-- Fonts -->
        <link rel="icon" type="image/x-icon" href="/logo.png">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <section class="flex flex-col justify-between h-screen">
            <section>
                <section class="hidden lg:block">
                    <nav class="bg-white w-full px-6 py-3 z-50 relative flex flex-row items-center justify-between border-b border-slate-200">
                        <img class="w-16" src="{{ asset('/logo.png') }}" />
                        <div class="flex flex-row gap-x-6">
                            <div class=" flex flex-row items-center gap-x-3 justify-end">
                                <a href="{{ route('home') }}" class="
                                    @if(Route::currentRouteName() == 'home')
                                        text-red-800 border-b-2 border-red-800
                                    @else
                                        hover:text-red-800 hover:border-b-2 hover:border-red-800
                                    @endif
                                    transition-colors duration-300">Beranda
                                </a>
                                <a href="{{ route('profil-index') }}" class="
                                    @if(Route::currentRouteName() == 'profil-index')
                                        text-red-800 border-b-2 border-red-800
                                    @else
                                        hover:text-red-800 hover:border-b-2 hover:border-red-800
                                    @endif
                                    transition-colors duration-300">Profil
                                </a>
                                <a href="{{ route('pengumuman-index') }}" class="
                                    @if(Route::currentRouteName() == 'pengumuman-index')
                                        text-red-800 border-b-2 border-red-800
                                    @else
                                        hover:text-red-800 hover:border-b-2 hover:border-red-800
                                    @endif
                                    transition-colors duration-300">Pengumuman
                                </a>
                                <button id="dropdownDelayButton" class="hover:text-red-800 hover:border-b-2 hover:border-red-800" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" type="button">
                                    Lainnya
                                </button>
                                <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDelayButton">
                                    <li>
                                        <a href="{{ route('ppdb-track') }}"
                                            class="@if(Route::currentRouteName() == 'ppdb-track')
                                            text-red-800 block px-4 py-2 text-base
                                        @else
                                            hover:text-red-800 hover:border-b-2 hover:border-red-800 block px-4 py-2 text-base hover:bg-gray-100
                                        @endif
                                        transition-colors duration-300">Lacak PPDB</a>
                                        <a href="{{ route('org-index') }}"
                                            class="@if(Route::currentRouteName() == 'org-index')
                                            text-red-800 block px-4 py-2 text-base
                                        @else
                                            hover:text-red-800 hover:border-b-2 hover:border-red-800 block px-4 py-2 text-base hover:bg-gray-100
                                        @endif
                                        transition-colors duration-300">Struktur Organisasi</a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="{{ route('ppdb-index') }}" class="px-4 text-base py-2 rounded-full bg-red-800 text-white flex flex-row items-center gap-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <p>Pendaftaran PPDB</p>
                            </a>
                        </div>
                    </nav>
                </section>
                <section class="block lg:hidden">
                    <nav class="bg-white w-full px-6 py-3 z-50 relative flex flex-row items-center justify-between border-b border-slate-200">
                        <img class="w-16" src="{{ asset('/logo.png') }}" />
                        <button type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example" data-drawer-placement="top" aria-controls="drawer-top-example">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                        <div id="drawer-top-example" class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white" tabindex="-1" aria-labelledby="drawer-top-label">
                            <section>
                                <h5 class="text-gray-500 font-bold">Utama</h5>
                                <div class="flex flex-col space-y-2 mt-1">
                                    <a href="{{ route('home') }}" class="
                                        @if(Route::currentRouteName() == 'home')
                                            text-red-800 border-b-2 text-lg border-red-800 py-1
                                        @else
                                            hover:text-red-800 hover:border-b-2 text-lg hover:border-red-800 py-1
                                        @endif
                                        transition-colors duration-300">Beranda
                                    </a>
                                    <a href="{{ route('profil-index') }}" class="
                                        @if(Route::currentRouteName() == 'profil-index')
                                            text-red-800 border-b-2  text-lg border-red-800 py-1
                                        @else
                                            hover:text-red-800 hover:border-b-2 text-lg hover:border-red-800 py-1
                                        @endif
                                        transition-colors duration-300">Profil
                                    </a>
                                    <a href="{{ route('pengumuman-index') }}" class="
                                        @if(Route::currentRouteName() == 'pengumuman-index')
                                            text-red-800 border-b-2 text-lg border-red-800 py-1
                                        @else
                                            hover:text-red-800 hover:border-b-2 text-lg hover:border-red-800 py-1
                                        @endif
                                        transition-colors duration-300">Pengumuman
                                    </a>
                                </div>
                            </section>
                            <section class="mt-6">
                                <h5 class="text-gray-500 font-bold">Lainnya</h5>
                                <div class="flex flex-col space-y-2 mt-1">
                                    <a href="{{ route('ppdb-track') }}"
                                        class="@if(Route::currentRouteName() == 'ppdb-track')
                                        text-red-800 block text-lg py-1
                                    @else
                                        hover:text-red-800 hover:border-b-2 py-1 hover:border-red-800 block text-lg
                                    @endif
                                    transition-colors duration-300">Lacak PPDB</a>
                                    <a href="{{ route('org-index') }}"
                                        class="@if(Route::currentRouteName() == 'org-index')
                                        text-red-800 text-lg block py-1
                                    @else
                                        hover:text-red-800 hover:border-b-2 py-1 hover:border-red-800 block text-lg
                                    @endif
                                    transition-colors duration-300">Struktur Organisasi</a>
                                </div>
                            </section>
                        </div>
                    </nav>
                </section>

                <main class="px-6 py-2">
                    {{ $slot }}
                </main>
            </section>
            <footer class="bg-white p-6">
                <div class="w-full md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">SMK Bina Bangsa Kersana</a>. All Rights Reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
                </div>
            </footer>
        </section>
        @stack('modals')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </body>
</html>
