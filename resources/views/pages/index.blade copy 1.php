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
                    <a href="" class="p-4 rounded-full border border-red-800 w-fit lg:m-auto text-red-800 font-bold flex items-center gap-x-1">
                        <p>Baca Selengkapnya</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </section>
        </div>
    </div>
    <div class="grid grid-cols-3 px-6 py-3 w-full mt-[48rem] border-y border-slate-100">
        <button data-modal-target="modal-visi" data-modal-toggle="modal-visi" class="flex flex-row items-center gap-x-2 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 rounded-xl p-2 bg-white shadow-sm border border-slate-100 text-red-800">
              <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
            </svg>
            <h5 class="text-xl lg:text-3xl font-bold">Visi Kami</h5>
        </button>
        <div id="modal-visi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Visi Kami
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-justify text-lg">Terwujudnya SMK Bina Bangsa yang berkualitas untuk membentuk tamatan berakhlak mulia, religius, disiplin, cerdas, menguasai iptek, Kompeten di dunia kerja, berjiwa kewirausahaan kuat dan peduli pada lingkungan </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="h-20 w-0.5 bg-gray-100"></div>
        </div>
        <button data-modal-target="modal-misi" data-modal-toggle="modal-misi" class="flex flex-row items-center gap-x-2 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 rounded-xl p-2 bg-white shadow-sm border border-slate-100 text-red-800">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
            </svg>
            <h5 class="text-xl lg:text-3xl font-bold">Misi Kami</h5>
        </button>
        <div id="modal-misi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Misi Kami
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <ul class="list-disc pl-5">
                            <li class="text-lg text-justify">Menciptakan suasana pembelajaran yang kondusif, menarik, dan dinamis.</li>
                            <li class="text-lg text-justify">Membentuk tamatan yang religius dan berakhlak mulia.</li>
                            <li class="text-lg text-justify">Menghasilkan tamatan yang cerdas, kompeten, dan siap memasuki dunia kerja.</li>
                            <li class="text-lg text-justify">Meningkatkan potensi sekolah yang bernuansa industri dan berwawasan lingkungan.</li>
                            <li class="text-lg text-justify">Menanamkan nilai-nilai kedisiplinan, kejujuran, sosial budaya, dan berkebangsaan.</li>
                            <li class="text-lg text-justify">Menghasilkan tamatan yang dapat mengikuti perkembangan IPTEK.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="grid grid-cols-1 space-y-4 my-20">
        <div>
            <h5 class="text-xl font-bold">Program Keahlian Unggulan Kami</h5>
        </div>
        <div class="mx-auto">
            @livewire('CardProdi')
        </div>
    </section>
</x-client-layout>
