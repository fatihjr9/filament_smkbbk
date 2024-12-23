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
        <div class="bg-white drop-shadow-sm rounded-br-2xl rounded-bl-2xl border-b border-slate-100 px-6 py-4 grid grid-cols-1 md:grid-cols-2">
            <div>
                <p class="text-gray-600 text-md font-medium">Total Siswa PPDB 2025/2026</p>
                @if($pendaftaran)
                <h5 class="text-lg font-medium">{{$pendaftaran}} siswa</h5>
                @else
                <h5 class="text-lg font-medium">Belum tersedia</h5>
                @endif
            </div>
            @if($totalPerJurusan->isEmpty())
                <h5 class="text-lg font-medium">Belum tersedia</h5>
            @else
                <div class="grid grid-cols-3 w-full divide-x mt-6 md:mt-0">
                    @foreach($totalPerJurusan as $jurusan)
                        <div class="flex flex-col pl-4">
                            <p class="text-gray-600 text-md font-medium">
                                {{ $jurusan->nama }} <!-- Nama Jurusan -->
                            </p>
                            <h5 class="text-lg font-medium">{{ $jurusan->pendaftaran->count() }} siswa</h5> <!-- Count Pendaftaran -->
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 mt-[62rem] md:mt-[56rem] mb-40" id="berita">
        <div class="flex flex-col space-y-1 mb-6 md:mb-0">
            <h5 class="text-3xl font-bold">Fasilitas Sekolah Kami</h5>
            <p class="text-lg font-medium text-gray-500">Kami memiliki fasilitas sekolah terbaik <br class="hidden md:block"/> dan menjadi kebanggaan sekolah kami.</p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-3 lg:col-span-2">
            @foreach($fasilitas as $f)
                <div class="relative flex flex-col h-fit rounded-xl overflow-hidden group border">
                    <div class="bg-gradient-to-t from-black to-transparent absolute inset-0 z-10 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
                    <img class="w-full object-cover h-96 group-hover:scale-110 transition-all duration-1000 rounded-xl" src="{{ asset('storage/' . $f->foto) }}" alt="Gambar {{ $f->nama }}"/>
                    <div class="flex flex-col px-6 py-4 absolute bottom-4 w-fit text-white z-20">
                        <h5 class="text-xl font-bold">{{ $f->nama }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="grid grid-cols-1 gap-x-8 mb-40" id="berita">
        <div class="flex flex-col space-y-1 mb-6 w-fit mx-auto">
            <h5 class="text-3xl font-bold text-center">Ekstrakulikuler Sekolah Kami</h5>
            <p class="text-lg font-medium text-center text-gray-500">Kami memiliki kegiatan ekstrakulikuler yang terbaik dan berprestasi</p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-3">
            @foreach($fasilitas as $f)
                <div class="relative flex flex-col h-fit rounded-xl overflow-hidden group border">
                    <div class="bg-gradient-to-t from-black to-transparent absolute inset-0 z-10 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
                    <img class="w-full object-cover h-96 group-hover:scale-110 transition-all duration-1000 rounded-xl" src="{{ asset('storage/' . $f->foto) }}" alt="Gambar {{ $f->nama }}"/>
                    <div class="flex flex-col px-6 py-4 absolute bottom-4 w-fit text-white z-20">
                        <h5 class="text-xl font-bold">{{ $f->nama }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="flex flex-col space-y-4 mb-20" id="berita">
        <h5 class="text-3xl font-bold">Pengumuman & Berita</h5>
        @livewire('Pengumuman')
    </section>
</x-client-layout>
