<x-client-layout>
    <div class="flex flex-col space-y-1 mt-6 mb-2">
        <h5 class="text-3xl font-bold">Produk TEFA</h5>
        <p class="text-gray-600">model pembelajaran yang menggabungkan proses produksi dan jasa ke dalam kurikulum pendidikan.</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($data as $p)
            <div class="flex flex-col space-y-2 mt-6">
                    <div class="relative flex flex-col h-fit rounded-xl overflow-hidden group border">
                        <div class="bg-gradient-to-t from-black to-transparent absolute inset-0 z-10 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
                        <img class="w-full object-cover h-96 group-hover:scale-110 transition-all duration-1000 rounded-xl" src="{{ asset('storage/' . $p->foto) }}" alt="Gambar {{ $p->nama }}"/>
                        <div class="flex flex-col px-6 py-4 absolute bottom-4 w-fit text-white z-20">
                            <h5 class="text-xl font-bold">{{ $p->nama }}</h5>
                            <h5 class="w-fit rounded-full mt-2 font-bold px-3 py-1 bg-red-50 text-red-800">{{ $p->jurusan->nama }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-client-layout>
