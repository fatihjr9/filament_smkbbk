<x-client-layout>
    <div class="flex flex-col space-y-3 text-center mt-6">
        <img class="w-80 mx-auto" src="{{ asset('done.svg') }}" />
        <div class="flex flex-col space-y-1">
            <h5 class="text-3xl font-bold">Selamat, Anda berhasil mendaftar!</h5>
            <p class="text-gray-500">Klik tombol dibawah untuk mengunduh file kartu pendaftaran atau lainnya</h5>
        </div>
        <a href="{{ route('ppdb-track') }}" class="w-40 bg-red-800 text-white py-2 rounded-xl mx-auto text-center">Lanjutkan</a>
    </div>
</x-client-layout>
