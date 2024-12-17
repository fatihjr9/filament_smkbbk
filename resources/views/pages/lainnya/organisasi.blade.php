<x-client-layout>
    <div class="flex flex-col space-y-1 mt-4">
        <h5 class="text-3xl font-bold">Struktur Organisasi</h5>
        <p class="text-base text-gray-500">Data Guru, Staff dan lainnya pada SMK Bina Bangsa Kersana</h5>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-6">
        @foreach($data as $d)
            <div class="relative flex flex-col h-fit rounded-xl overflow-hidden group border">
                <div class="bg-gradient-to-t from-black to-transparent absolute inset-0 z-10 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
                <img class="w-full object-cover h-96 lg:h-[36rem] group-hover:scale-110 transition-all duration-1000 rounded-xl" src="{{ asset('storage/' . $d->foto) }}" alt="Gambar {{ $d->nama }}"/>
                <div class="flex flex-col px-6 py-4 absolute bottom-4 w-fit text-white z-20">
                    <h5 class="text-xl font-bold">{{ $d->nama }}</h5>
                    <h5 class="font-medium mt-1">Jabatan : {{ $d->posisi }}</h5>
                    <h5 class="font-medium">NIDN    : {{ $d->nidn }}</h5>
                </div>
            </div>
        @endforeach
    </div>
</x-client-layout>
