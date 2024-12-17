<x-client-layout>
    <div id="default-carousel" class="w-full inset-0 absolute h-[48rem]" data-carousel="slide">
        <div class="relative h-[52rem] overflow-hidden object-cover z-10">
            <img src="{{ asset('storage/' . $data->thumbnail) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="bg-gradient-to-t from-white to-transparent absolute inset-0 z-20 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
            <!-- H5 Data Nama -->
            <h5 class="absolute top-1/4 left-1/2 transform -translate-x-1/2 text-6xl text-black z-30 font-bold w-6/12 text-center">
                {{ $data->nama }}
            </h5>
        </div>
        <div class="grid grid-cols-3 px-6 py-4 absolute bottom-0 w-full z-20">
            <div class="flex flex-row items-center gap-x-2 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 rounded-xl p-2 bg-red-50 text-red-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                </svg>
                <h5 class="text-xl lg:text-3xl font-bold">Visi Kami</h5>
            </div>
            <div class="flex justify-center items-center">
                <div class="h-20 w-0.5 bg-gray-100"></div>
            </div>
            <div class="flex flex-row items-center gap-x-2 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 rounded-xl p-2 bg-red-50 text-red-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                <h5 class="text-xl lg:text-3xl font-bold">Misi Kami</h5>
            </div>
        </div>
    </div>
<section class="grid grid-cols-1 lg:grid-cols-2 my-20 gap-6 mb-20 mt-[49rem]">
    <div>
        <div class="flex flex-row items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 rounded-xl p-2 bg-red-50 text-red-600">
              <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
            </svg>
            <h5 class="text-3xl font-bold">Visi Kami</h5>
        </div>
        <p class="text-justify mt-4 text-xl">Terwujudnya SMK Bina Bangsa yang berkualitas untuk membentuk tamatan berakhlak mulia, religius, disiplin, cerdas, menguasai iptek, Kompeten di dunia kerja, berjiwa kewirausahaan kuat dan peduli pada lingkungan </p>
    </div>
    <div>
        <div class="flex flex-row items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 rounded-xl p-2 bg-red-50 text-red-600">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
            </svg>
            <h5 class="text-3xl font-bold">Misi Kami</h5>
        </div>
        <div class="grid grid-cols-1 gap-y-2 mt-4">
            <div class="flex flex-row items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h5 class="text-xl text-justify">Menciptakan suasana pembelajaran yang kondusif, menarik dan dinamis.</h5>
            </div>
            <div class="flex flex-row items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h5 class="text-xl text-justify">Membentuk tamatan yang religius dan berakhlak mulia.</h5>
            </div>
            <div class="flex flex-row items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h5 class="text-xl text-justify">Menghasilkan tamatan yang cerdas, kompeten dan siap memasuki dunia kerja.</h5>
            </div>
            <div class="flex flex-row items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h5 class="text-xl text-justify">Meningkatkan potensi sekolah yang bernuansa industri dan berwawasan lingkungan</h5>
            </div>
            <div class="flex flex-row items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h5 class="text-xl text-justify">Menanamkan nilai nilai kedisiplinan, kejujuran, sosial budaya dan berkebangsaan</h5>
            </div>
            <div class="flex flex-row items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h5 class="text-xl text-justify">Menghasilkan tamatan yang dapat mengikuti perkembangan IPTEK</h5>
            </div>
        </div>
    </div>
</section>
<section class="flex flex-col space-y-4 my-20" id="keahlian">
    <h5 class="text-xl font-bold">Program Keahlian Unggulan Kami</h5>
    @livewire('CardProdi')
</section>
<section class="flex flex-col space-y-4 my-20" id="berita">
    <h5 class="text-xl font-bold">Pengumuman & Berita</h5>
    @livewire('Pengumuman')
</section>
</x-client-layout>
