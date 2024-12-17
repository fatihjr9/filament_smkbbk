<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($prodi as $p)
    <div class="grid grid-cols-2 items-end bg-white border border-slate-200 p-4 rounded-xl shadow-sm">
        <div class="flex flex-col gap-2 overflow-hidden">
            <h5 class="text-xl font-bold">{{ $p->nama }}</h5>
            <a href="{{ route('jurusan-detail', $p->nama) }}" class="flex flex-row gap-x-2 items-center border border-red-800 px-4 py-2 rounded-full w-fit text-red-800">
                <p class="font-semibold">Lihat Detail</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                </svg>
            </a>
        </div>
        <img class="rounded-t-xl w-full h-48 object-cover" src="{{ asset('storage/' . $p->thumbnail) }}" alt="Gambar {{ $p->nama }}" />
    </div>
    @endforeach
</div>
