<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
    @foreach($notif as $p)
    <div class="bg-white rounded-xl shadow-sm border border-slate-100">
        <img class="rounded-t-xl w-full h-32 object-cover" src="{{ asset('storage/' . $p->thumbnail) }}" alt="Gambar {{ $p->nama }}" />
        <div class="p-4">
            <h5 class="text-lg font-bold">{{ $p->nama }}</h5>
            <p class="text-gray-400 truncate">{{ $p->created_at->format('d F Y') }}</p>
            <button class="w-full border px-6 py-2 rounded-xl mt-2">Baca Selengkapnya</button>
        </div>
    </div>
    @endforeach
</div>
