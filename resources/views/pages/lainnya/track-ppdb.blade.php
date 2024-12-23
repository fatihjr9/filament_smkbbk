<x-client-layout>
    <div class="grid grid-cols-1 lg:grid-cols-2 items-end mt-6">
        <div class="flex flex-col space-y-1">
            <h5 class="text-3xl font-bold">Lacak PPDB</h5>
            <p class="text-base text-gray-500">Gunakan Nama atau No Registrasi untuk mencari data siswa.</h5>
        </div>
        <form class="w-full" method="GET" action="{{ route('ppdb-track') }}">
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
                    placeholder="Cari data siswa dengan nama atau no registrasi"
                />
            </div>
        </form>
    </div>

    @if(is_null($data))
            <div class="flex flex-col space-y-8 mt-10">
                <img class="w-80 mx-auto" src="{{ asset('search.svg') }}" />
                <p class="text-center text-gray-500">Silakan masukkan Nama atau No Registrasi untuk mencari data siswa.</p>
            </div>
        @elseif($data->isEmpty())
            <div class="flex flex-col space-y-8 mt-10">
                <img class="w-80 mx-auto" src="{{ asset('nodata.svg') }}" />
                <p class="text-center text-gray-500">Tidak ada data yang sesuai dengan pencarian "{{ request('search') }}".</p>
            </div>
        @else
            <div class="mt-6 w-fit mx-auto">
                @foreach($data as $p)
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 h-fit">
                    <div class="p-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nama</th>
                                    <th scope="col" class="px-6 py-3">Program Studi yang dipilih</th>
                                    <th scope="col" class="px-6 py-3">Tanggal Registrasi</th>
                                    <th scope="col" class="px-6 py-3">No Registrasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-6 py-4">{{ $p->nama_siswa }}</td>
                                    <td class="px-6 py-4">{{ $p->jurusan->nama }}</td>
                                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($p->tgl_daftar)->translatedFormat('d F Y') }}</td>
                                    <td class="px-6 py-4">{{ $p->no_registrasi }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="{{ route('ppdb-download', $p->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="bg-red-50 text-red-800 p-2 rounded-lg w-full mt-4">Unduh Kartu Pendaftaran</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
</x-client-layout>
