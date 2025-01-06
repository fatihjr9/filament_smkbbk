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
                        <a href="{{ route('home') }}" class="flex flex-row items-center gap-x-2">
                            <img class="w-14" src="{{ asset('/logo.png') }}" />
                            <p class="text-lg font-bold">SMK Bina Bangsa Kersana</p>
                        </a>
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
                                {{-- <a href="{{ route('tefa-index') }}" class="
                                    @if(Route::currentRouteName() == 'tefa-index')
                                        text-red-800 border-b-2 border-red-800
                                    @else
                                        hover:text-red-800 hover:border-b-2 hover:border-red-800
                                    @endif
                                    transition-colors duration-300">TEFA
                                </a> --}}
                                <a href="{{ route('pengumuman-index') }}" class="
                                    @if(Route::currentRouteName() == 'pengumuman-index')
                                        text-red-800 border-b-2 border-red-800
                                    @else
                                        hover:text-red-800 hover:border-b-2 hover:border-red-800
                                    @endif
                                    transition-colors duration-300">Pengumuman
                                </a>
                                <button id="dropdownDelayButton-1" class="hover:text-red-800 hover:border-b-2 hover:border-red-800" data-dropdown-toggle="dropdownDelay-1" data-dropdown-delay="500" data-dropdown-trigger="hover" type="button">
                                    Program Studi
                                </button>
                                <div id="dropdownDelay-1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDelayButton-1">
                                        @php
                                            $navJurusan = \App\Models\Jurusan::all(); // Mengambil data Jurusan
                                        @endphp
                                        @foreach ($navJurusan as $jurusan)
                                            <li>
                                                <a href="{{ route('jurusan-detail', ['name' => $jurusan->nama]) }}"
                                                   class="block px-4 py-2 text-base transition-colors duration-300
                                                          {{ Route::currentRouteName() == 'jurusan-detail' && request('name') == $jurusan->nama ? 'text-red-800' : 'hover:text-red-800 hover:border-b-2 hover:border-red-800 hover:bg-gray-100' }}">
                                                    {{ $jurusan->nama }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
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
                                        <a href="{{ route('profil-index') }}" class="
                                            @if(Route::currentRouteName() == 'profil-index')
                                                text-red-800 block px-4 py-2 text-base
                                            @else
                                                hover:text-red-800 hover:border-b-2 hover:border-red-800 block px-4 py-2 text-base hover:bg-gray-100
                                            @endif
                                            transition-colors duration-300">Profil Sekolah
                                        </a>
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
                                <h5 class="text-gray-500 font-bold">Jurusan</h5>
                                @php
                                $navJurusan = \App\Models\Jurusan::all(); // Mengambil data Jurusan
                            @endphp
                            @foreach ($navJurusan as $jurusan)
                                <a href="{{ route('jurusan-detail', ['name' => $jurusan->nama]) }}"
                                   class="block text-lg py-1 transition-colors duration-300 
                                          {{ Route::currentRouteName() == 'jurusan-detail' && request('name') == $jurusan->nama ? 'text-red-800' : 'hover:text-red-800 hover:border-b-2 hover:border-red-800' }}">
                                    {{ $jurusan->nama }}
                                </a>
                            @endforeach
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
                                    <a href="{{ route('profil-index') }}" class="
                                        @if(Route::currentRouteName() == 'profil-index')
                                            text-red-800 block text-lg py-1
                                        @else
                                            hover:text-red-800 hover:border-b-2 py-1 hover:border-red-800 block text-lg
                                        @endif
                                        transition-colors duration-300">Profil Sekolah
                                    </a>
                                    <a href="{{ route('org-index') }}"
                                        class="@if(Route::currentRouteName() == 'org-index')
                                        text-red-800 text-lg block py-1
                                    @else
                                        hover:text-red-800 hover:border-b-2 py-1 hover:border-red-800 block text-lg
                                    @endif
                                    transition-colors duration-300">Struktur Organisasi</a>
                                </div>
                            </section>

                        <a href="{{ route('ppdb-index') }}" class="w-full mt-4 text-lg font-bold py-2 rounded-full bg-red-800 text-white flex justify-center">
                            Pendaftaran PPDB
                        </a>
                        </div>
                    </nav>
                </section>

                <main class="px-6 py-2 mb-20">
                    {{ $slot }}
                </main>
            </section>
            <footer class="bg-slate-900 text-white">
                <div class="w-full p-6 md:py-8">
                    <div class=" grid grid-cols-4 items-start">
                        <div class="flex flex-row items-center gap-x-2 lg:col-span-3">
                            <img src="{{ asset('logo.png') }}" class="h-12" alt="Flowbite Logo" />
                            <p class="text-lg font-bold">SMK Bina Bangsa Kersana</p>
                        </div>
                        <ul class="grid grid-cols-1 gap-y-2">
                            <div class="flex flex-row items-start gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" px-3 py-1 h-10 w-16 rounded-full bg-slate-800">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                                </svg>
                                <a href="#" class="hover:underline text-slate-500 text-justify">Jl. Tanjung - Banjarharjo No.KM. 10, Kubangpari Satu, Kubangpari, Kec. Kersana, Kabupaten Brebes, Jawa Tengah 52264</a>
                            </div>
                            <div class="flex flex-row items-start gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" px-3 py-1 h-8 w-10 rounded-full bg-slate-800">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                <a href="#" class="hover:underline text-slate-500">(0283) 4582621</a>
                            </div>
                        </ul>
                    </div>
                    <hr class="my-6 border-slate-800 sm:mx-auto lg:my-8" />
                    <p class="text-sm text-gray-500 text-center">© 2024 SMK Bina Bangsa Kersana. All Rights Reserved.</p>
                </div>
            </footer>
        </section>

        @stack('modals')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </body>
</html>
