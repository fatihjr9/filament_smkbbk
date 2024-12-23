<x-client-layout>
    <a class="mt-6 text-lg text-gray-500 flex flex-row items-center gap-x-1" href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
        <p>Kembali</p>
    </a>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
        <div class="relative flex flex-col h-fit rounded-xl overflow-hidden group">
            <div class="bg-gradient-to-t from-black to-transparent absolute inset-0 z-10 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
            <img class="w-full object-cover h-96 lg:h-[36rem] group-hover:scale-110 transition-all duration-1000 rounded-xl" src="{{ asset('storage/' . $data->thumbnail) }}" alt="Gambar {{ $data->nama }}"/>
            <div class="flex flex-col space-y-2 px-6 py-4 absolute bottom-4 w-fit text-white z-20">
                <h5 class="text-3xl font-bold">{{ $data->nama }}</h5>
            </div>
        </div>
        <div class="lg:col-span-2">
            <p class="text-justify text-lg">{{ $data->deskripsi }}</p>
        </div>
    </div>
</x-client-layout>
