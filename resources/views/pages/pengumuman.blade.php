<x-client-layout>
    <div class="flex flex-col space-y-4 col-span-2 my-6">
        <!-- Form Pencarian -->
        <form class="w-full" method="GET" action="{{ route('pengumuman-index') }}">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input
                    type="search"
                    name="search"
                    id="default-search"
                    class="block w-full p-2 ps-10 text-md text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-800 focus:border-red-800"
                    placeholder="Cari Pengumuman atau berita"
                    value="{{ request('search') }}"
                />
            </div>
        </form>
        <!-- Tampilkan Data -->
        @if($data->isEmpty())
            <p>Tidak ada pengumuman yang ditemukan.</p>
        @else
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($data as $p)
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 h-fit">
                    <img class="rounded-t-xl w-full h-32 object-cover" src="{{ asset('storage/' . $p->thumbnail) }}" alt="Gambar {{ $p->nama }}" />
                    <div class="p-4 flex flex-col">
                        <h5 class="text-lg font-bold">{{ $p->nama }}</h5>
                        <p class="text-gray-400 truncate">{{ $p->created_at->format('d F Y') }}</p>
                        <a href="{{ route('pengumuman-detail', $p->nama) }}" class="w-full text-center border px-6 py-2 rounded-xl mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</x-client-layout>
