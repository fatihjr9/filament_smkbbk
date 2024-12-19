<x-client-layout>
    <div class="w-full inset-0 absolute h-[48rem]">
        <div class="relative h-[54rem] overflow-hidden object-cover z-10">
            <img src="{{ asset('storage/' . $data->thumbnail) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="bg-gradient-to-t from-white h-full to-transparent absolute inset-0 z-20 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
            <section class="absolute left-1/2 bottom-10 w-full transform -translate-x-1/2 z-40 px-6">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-2 md:gap-4 items-start">
                    <div class="col-span-2 flex flex-col space-y-2">
                        <h5 class="text-5xl font-extrabold">{{ $data->nama }}</h5>
                    </div>
                    <div class="col-span-2 flex-col space-y-2 hidden lg:flex">
                        <h5 class=" text-lg text-justify text-gray-800">{!! $data->deskripsi !!}</h5>
                    </div>
                    <a href="{{ route('pengumuman-detail', $data->nama) }}" class="p-4 rounded-full border border-red-800 w-fit lg:m-auto text-red-800 font-bold flex items-center gap-x-1">
                        <p>Baca Selengkapnya</p>
                    </a>
                </div>
            </section>
        </div>
    </div>
    <section class="flex flex-col space-y-4 mt-[50rem]" id="berita">
        <h5 class="text-xl font-bold">Pengumuman & Berita</h5>
        @livewire('Pengumuman')
    </section>
</x-client-layout>
