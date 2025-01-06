<x-client-layout>
    <div class="grid grid-cols-1 lg:grid-cols-3 my-6 gap-4">
        <div class="relative flex flex-col h-fit rounded-xl overflow-hidden group">
            <div class="bg-gradient-to-t from-black/50 to-transparent absolute inset-0 z-10 group-hover:from-red-600/50 group-hover:to-transparent transition-all duration-500"></div>
            <img class="w-full object-cover h-96 lg:h-[36rem] group-hover:scale-110 transition-all duration-1000 rounded-xl" src="{{ asset('hero-1.jpg') }}"/>
            <div class="flex flex-col space-y-2 px-6 py-4 absolute bottom-4 w-fit text-white z-20">
                <h5 class="text-3xl font-bold">PPDB SMK Bina Bangsa Kersana <br> Tahun Ajaran {{ $thnAjaran->nama }}</h5>
            </div>
        </div>
        <form action="{{ route('ppdb-post') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 space-y-4 col-span-2">
            @csrf
            <div class="w-full border p-4 rounded-xl bg-white shadow-sm">
                <h5 class="text-xl font-bold border-b border-slate-200 pb-2">Data Registrasi</h5>
                <div class="mt-4 gap-2 flex flex-col">
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tanggal Pendaftaran</label>
                            <input type="date" name="tgl_daftar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" value="{{ date('Y-m-d') }}" readonly/>
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tingkat</label>
                            <input type="text" name="tingkat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" value="Kelas X" readonly />
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Registrasi</label>
                            <input type="text" name="no_registrasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" value="{{ $noReg }}" readonly />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Program</label>
                            <select name="jurusan_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option>Pilih Jurusan</option>
                                @foreach($jurusan as $j)
                                <option value="{{ $j->id }}">{{ $j->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </section>
                </div>
            </div>
            <div class="w-full border p-4 rounded-xl bg-white shadow-sm">
                <h5 class="text-xl font-bold border-b border-slate-200 pb-2">Biodata</h5>
                <div class="mt-4 gap-2 flex flex-col">
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Nama Siswa</label>
                            <input type="text" name="nama_siswa" value="{{ old('nama_siswa') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('nama_siswa')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Asal Sekolah</label>
                            <div class="grid grid-cols-2 gap-x-2">
                                <select id="asal_sekolah_select" name="asal_sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                    <option selected>Pilih Asal Sekolah</option>
                                    <option value="MTS AL ADHAR CIKEUSAL">MTS AL ADHAR CIKEUSAL</option>
                                    <option value="MTS AL FALAH CIHAUR">MTS AL FALAH CIHAUR</option>
                                    <option value="MTS AL HIDAYAH BANJARHARJO">MTS AL HIDAYAH BANJARHARJO</option>
                                    <option value="MTS AL IKHLAS PENDE BANJARHARJO">MTS AL IKHLAS PENDE BANJARHARJO</option>
                                    <option value="MTS AL KAUTSAR DUKUH BADAG">MTS AL KAUTSAR DUKUH BADAG</option>
                                    <option value="MTS AL MIFTAH SINDANGJAYA">MTS AL MIFTAH SINDANGJAYA</option>
                                    <option value="MTS ANNUR KARANGJUNTI">MTS ANNUR KARANGJUNTI</option>
                                    <option value="MTS DAAR ES SALAM LUWUNGGEDE TANJUNG">MTS DAAR ES SALAM LUWUNGGEDE TANJUNG</option>
                                    <option value="MTS HIDAYATUL UMMAH MALAHAYU">MTS HIDAYATUL UMMAH MALAHAYU</option>
                                    <option value="MTS I'ANATULMUTAALIMIN KUBANGWUNGU">MTS I'ANATULMUTAALIMIN KUBANGWUNGU</option>
                                    <option value="MTS KEDAWON TANJUNG">MTS KEDAWON TANJUNG</option>
                                    <option value="MTS MA'ARIF NU 6 BANDUNGSARI">MTS MA'ARIF NU 6 BANDUNGSARI</option>
                                    <option value="MTS MA'ARIF NU 9 PENDE KERSANA">MTS MA'ARIF NU 9 PENDE KERSANA</option>
                                    <option value="MTS MAFATIHUL HUDA PADAKATON KETANGGUNGAN">MTS MAFATIHUL HUDA PADAKATON KETANGGUNGAN</option>
                                    <option value="MTS N 1 BREBES">MTS N 1 BREBES</option>
                                    <option value="MTS N 5 BREBES">MTS N 5 BREBES</option>
                                    <option value="MTS PLUS AL BUKHORI TANJUNG">MTS PLUS AL BUKHORI TANJUNG</option>
                                    <option value="MTS S AN NASHUHA">MTS S AN NASHUHA</option>
                                    <option value="MTS SUBULUL IHKSAN KERSANA">MTS SUBULUL IHKSAN KERSANA</option>
                                    <option value="SMP AL MAARIF KETANGGUNGAN">SMP AL MAARIF KETANGGUNGAN</option>
                                    <option value="SMP ISLAM BUSTANUL ULUM BANJARHARJO">SMP ISLAM BUSTANUL ULUM BANJARHARJO</option>
                                    <option value="SMP MAARIF FATUROHMAH KERSANA">SMP MAARIF FATUROHMAH KERSANA</option>
                                    <option value="SMP MANBAUL ANWAR AL MAHDY BANJARHARJO">SMP MANBAUL ANWAR AL MAHDY BANJARHARJO</option>
                                    <option value="SMP N 1 BANJARHARJO">SMP N 1 BANJARHARJO</option>
                                    <option value="SMP N 1 KERSANA">SMP N 1 KERSANA</option>
                                    <option value="SMP N 1 KETANGGUNGAN">SMP N 1 KETANGGUNGAN</option>
                                    <option value="SMP N 1 TANJUNG">SMP N 1 TANJUNG</option>
                                    <option value="SMP N 2 BANJARHARJO">SMP N 2 BANJARHARJO</option>
                                    <option value="SMP N 2 KERSANA">SMP N 2 KERSANA</option>
                                    <option value="SMP N 2 KETANGGUNGAN">SMP N 2 KETANGGUNGAN</option>
                                    <option value="SMP N 2 LOSARI">SMP N 2 LOSARI</option>
                                    <option value="SMP N 2 TANJUNG">SMP N 2 TANJUNG</option>
                                    <option value="SMP N 3 BANJARHARJO">SMP N 3 BANJARHARJO</option>
                                    <option value="SMP N 3 KERSANA">SMP N 3 KERSANA</option>
                                    <option value="SMP N 3 KETANGGUNGAN">SMP N 3 KETANGGUNGAN</option>
                                    <option value="SMP N 4 BANJARHARJO">SMP N 4 BANJARHARJO</option>
                                    <option value="SMP N 4 KETANGGUNGAN">SMP N 4 KETANGGUNGAN</option>
                                    <option value="SMP N 4 LOSARI">SMP N 4 LOSARI</option>
                                    <option value="SMP N 4 TANJUNG">SMP N 4 TANJUNG</option>
                                    <option value="SMP N 5 TANJUNG">SMP N 5 TANJUNG</option>
                                    <option value="SMP NU HASYIM ASY'ARI BANJARHARJO">SMP NU HASYIM ASY'ARI BANJARHARJO</option>
                                    <option value="SMP PONPES NURUL HAYAH KETANGGUNGAN">SMP PONPES NURUL HAYAH KETANGGUNGAN</option>
                                    <option value="other">Tidak ada sekolah yang dipilih</option>
                                </select>
                                <div id="custom_school_input" class="hidden">
                                    <input id="custom_school" 
                                           type="text" 
                                           name="custom_school" 
                                           placeholder="Nama sekolah Anda" 
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                                </div>
                            </div>
                            @error('asal_sekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alamat Asal Sekolah</label>
                            <input type="text" name="alamat_asal_sekolah" value="{{ old('alamat_asal_sekolah') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('alamat_asal_sekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">NISN</label>
                            <input type="text" min="0" name="nisn" value="{{ old('nisn') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NISN" />
                            @error('nisn')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">NIS</label>
                            <input type="text" min="0" name="nis" value="{{ old('nis') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NIS" />
                            @error('nis')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Nomor Induk Kependudukan ( NIK )</label>
                            <input type="text" min="0" name="nik" value="{{ old('nik') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NIK" />
                            @error('nik')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">NPSN Sekolah Asal <span class="text-sm text-gray-400">( Diisikan dari jenjang sebelumnya )</span></label>
                            <input type="text" min="0" name="npsn" value="{{ old('npsn') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NPSN" />
                            @error('npsn')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tempat, Tanggal Lahir</label>
                            <div class="grid grid-cols-3 gap-x-2 items-center">
                                <input type="text" name="tmpt_lahir_siswa" value="{{ old('tmpt_lahir_siswa') }}" class="bg-gray-50 col-span-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Tempat Lahir" />
                                <input type="date" name="tgl_lahir_siswa" value="{{ old('tgl_lahir_siswa') }}" class="bg-gray-50 col-span-1 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Tanggal Lahir Siswa" />
                                @error('tmpt_lahir_siswa')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                                @error('tgl_lahir_siswa')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Agama</label>
                            <select name="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen/Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                            @error('agama')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berkebutuhan Khusus</label>
                            <select name="kebutuhan_khusus_siswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra (A)">Netra (A)</option>
                                <option value="Rungu (B)">Rungu (B)</option>
                                <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                                <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
                                <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                <option value="Wicara (F)">Wicara (F)</option>
                                <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                                <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                                <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                                <option value="Narkoba (N)">Narkoba (N)</option>
                                <option value="Indigo (O)">Indigo (O)</option>
                                <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                                <option value="Autis (Q)">Autis (Q)</option>
                            </select>
                            @error('kebutuhan_khusus_siswa')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alamat tempat tinggal</label>
                            <input type="text" name="alamat_siswa" value="{{ old('alamat_siswa') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('alamat_siswa')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Dusun</label>
                            <input type="text" name="dusun" value="{{ old('dusun') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('dusun')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">RT/RW</label>
                            <div class="grid grid-cols-2 gap-x-2 items-center">
                                <input type="number" name="rt" value="{{ old('rt') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                                @error('rt')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                                <input type="number" name="rw" value="{{ old('rw') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                                @error('rw')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                            </div>
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kelurahan/Desa</label>
                            <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kelurahan')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kode Pos</label>
                            <input type="number" name="kodepos" value="{{ old('kodepos') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kodepos')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kecamatan</label>
                            <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kecamatan')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kabupaten/Kota</label>
                            <input type="text" name="kota" value="{{ old('kota') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kota')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Provinsi</label>
                            <input type="text" name="provinsi" value="{{ old('provinsi') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('provinsi')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alat Transportasi ke Sekolah</label>
                            <select name="transport" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                    <option value="Jalan kaki">Jalan kaki</option>
                                    <option value="Kendaraan pribadi">Kendaraan pribadi</option>
                                    <option value="Kendaraan Umum/angkot/Pete-pete">Kendaraan Umum/angkot/Pete-pete</option>
                                    <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                    <option value="Kereta Api">Kereta Api</option>
                                    <option value="Ojek">Ojek</option>
                                    <option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
                                    <option value="Perahu penyebrangan/Rakit/Getek">Perahu penyebrangan/Rakit/Getek</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            @error('transport')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Jenis Tinggal</label>
                            <select name="jenis_tinggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="Bersama Ortu">Bersama Ortu</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                            </select>
                            @error('jenis_tinggal')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">No Telp Rumah/ No Telp Hp</label>
                            <div class="grid grid-cols-2 gap-x-2 items-center">
                                <input type="text" name="telp_rmh" value="{{ old('telp_rmh') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Masukkan no telp rumah" />
                                @error('telp_rmh')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                                <input type="text" name="telp_hp" value="{{ old('telp_hp') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Masukkan no telp hp" />
                                @error('telp_hp')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                            </div>
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Email Pribadi**</label>
                            <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">No KKS**</label>
                            <input type="number" min="0" name="no_kks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Apakah Penerima KPS/KPH**</label>
                            <input type="text" name="kps" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">No KPS**</label>
                            <input type="number" min="0" name="no_kps" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Usulan dari sekolah layak KIP**</label>
                            <input type="text" name="usul_kip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alasan Layak**</label>
                            <input type="text" name="layak_kip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Penerima KIP**</label>
                            <input type="text" name="penerima_kip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">No KIP**</label>
                            <input type="number" name="no_kip" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Nama Tertera KIP**</label>
                            <input type="text" name="nama_kip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alasan menolak KIP**</label>
                            <input type="text" name="menolak_kip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                    </section>
                </div>
            </div>
            <div class="w-full border p-4 rounded-xl bg-white shadow-sm">
                <h5 class="text-xl font-bold border-b border-slate-200 pb-2">Data Orang tua ( Ayah )</h5>
                <div class="mt-4 gap-2 flex flex-col">
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Nama Ayah</label>
                            <input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('nama_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_ayah" value="{{ old('tgl_lahir_ayah') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('tgl_lahir_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berkebutuhan Khusus</label>
                            <select name="kebutuhan_khusus_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra (A)">Netra (A)</option>
                                <option value="Rungu (B)">Rungu (B)</option>
                                <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                                <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
                                <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                <option value="Wicara (F)">Wicara (F)</option>
                                <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                                <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                                <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                                <option value="Narkoba (N)">Narkoba (N)</option>
                                <option value="Indigo (O)">Indigo (O)</option>
                                <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                                <option value="Autis (Q)">Autis (Q)</option>
                            </select>
                            @error('kebutuhan_khusus_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pekerjaan</label>
                            <select name="pekerjaan_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="tidak-bekerja">Tidak bekerja</option>
                                <option value="nelayan">Nelayan</option>
                                <option value="petani">Petani</option>
                                <option value="peternak">Peternak</option>
                                <option value="pns-tni-polri">PNS/TNI/POLRI</option>
                                <option value="karyawan-swasta">Karyawan Swasta</option>
                                <option value="pedagang-kecil">Pedagang Kecil</option>
                                <option value="pedagang-besar">Pedagang Besar</option>
                                <option value="wiraswasta">Wiraswasta</option>
                                <option value="wirausaha">Wirausaha</option>
                                <option value="buruh">Buruh</option>
                                <option value="pensiunan">Pensiunan</option>
                                <option value="meninggal-dunia">Meninggal Dunia</option>
                            </select>
                            @error('pekerjaan_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pendidikan Terakhir</label>
                            <select name="pendidikan_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="tidak-sekolah">Tidak sekolah</option>
                                <option value="putus-sd">Putus SD</option>
                                <option value="sd-sederajat">SD Sederajat</option>
                                <option value="smp-sederajat">SMP Sederajat</option>
                                <option value="sma-sederajat">SMA Sederajat</option>
                                <option value="d1">D1</option>
                                <option value="d2">D2</option>
                                <option value="d3">D3</option>
                                <option value="d4-s1">D4/S1</option>
                                <option value="s2">S2</option>
                                <option value="s3">S3</option>
                            </select>
                            @error('pendidikan_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Penghasilan</label>
                            <select name="penghasilan_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="<500000">< Rp. 500.000</option>
                                <option value="500000-999999">Rp. 500.000 - Rp. 999.999</option>
                                <option value="1000000-1999999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                <option value="2000000-4999999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                <option value="5000000-20000000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                <option value=">20000000">> Rp. 20.000.000</option>
                                <option value="tidak-berpenghasilan">Tidak Berpenghasilan</option>
                            </select>
                            @error('penghasilan_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                </div>
            </div>
            <div class="w-full border p-4 rounded-xl bg-white shadow-sm">
                <h5 class="text-xl font-bold border-b border-slate-200 pb-2">Data Orang tua ( Ibu )</h5>
                <div class="mt-4 gap-2 flex flex-col">
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Nama Ibu</label>
                            <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('nama_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('tgl_lahir_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berkebutuhan Khusus</label>
                            <select name="kebutuhan_khusus_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra (A)">Netra (A)</option>
                                <option value="Rungu (B)">Rungu (B)</option>
                                <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                                <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
                                <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                <option value="Wicara (F)">Wicara (F)</option>
                                <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                                <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                                <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                                <option value="Narkoba (N)">Narkoba (N)</option>
                                <option value="Indigo (O)">Indigo (O)</option>
                                <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                                <option value="Autis (Q)">Autis (Q)</option>
                            </select>
                            @error('kebutuhan_khusus_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pekerjaan</label>
                            <select name="pekerjaan_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="tidak-bekerja">Tidak bekerja</option>
                                <option value="nelayan">Nelayan</option>
                                <option value="petani">Petani</option>
                                <option value="peternak">Peternak</option>
                                <option value="pns-tni-polri">PNS/TNI/POLRI</option>
                                <option value="karyawan-swasta">Karyawan Swasta</option>
                                <option value="pedagang-kecil">Pedagang Kecil</option>
                                <option value="pedagang-besar">Pedagang Besar</option>
                                <option value="wiraswasta">Wiraswasta</option>
                                <option value="wirausaha">Wirausaha</option>
                                <option value="buruh">Buruh</option>
                                <option value="pensiunan">Pensiunan</option>
                                <option value="meninggal-dunia">Meninggal Dunia</option>
                            </select>
                            @error('pekerjaan_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pendidikan Terakhir</label>
                            <select name="pendidikan_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="tidak-sekolah">Tidak sekolah</option>
                                <option value="putus-sd">Putus SD</option>
                                <option value="sd-sederajat">SD Sederajat</option>
                                <option value="smp-sederajat">SMP Sederajat</option>
                                <option value="sma-sederajat">SMA Sederajat</option>
                                <option value="d1">D1</option>
                                <option value="d2">D2</option>
                                <option value="d3">D3</option>
                                <option value="d4-s1">D4/S1</option>
                                <option value="s2">S2</option>
                                <option value="s3">S3</option>
                            </select>
                            @error('pendidikan_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Penghasilan</label>
                            <select name="penghasilan_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option value="<500000">< Rp. 500.000</option>
                                <option value="500000-999999">Rp. 500.000 - Rp. 999.999</option>
                                <option value="1000000-1999999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                <option value="2000000-4999999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                <option value="5000000-20000000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                <option value=">20000000">> Rp. 20.000.000</option>
                                <option value="tidak-berpenghasilan">Tidak Berpenghasilan</option>
                            </select>
                            @error('penghasilan_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                </div>
            </div>
            <div class="w-full border p-4 rounded-xl bg-white shadow-sm">
                <h5 class="text-xl font-bold border-b border-slate-200 pb-2">Data Orang tua ( Wali )**</h5>
                <div class="mt-4 gap-2 flex flex-col">
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Nama Wali</label>
                            <input type="text" name="nama_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5"  />
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berkebutuhan Khusus</label>
                            <select name="kebutuhan_khusus_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option selected value=""></option>
                                <option value="Tidak">Tidak</option>
                                <option value="Netra (A)">Netra (A)</option>
                                <option value="Rungu (B)">Rungu (B)</option>
                                <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                                <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
                                <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                <option value="Wicara (F)">Wicara (F)</option>
                                <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                                <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                                <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                                <option value="Narkoba (N)">Narkoba (N)</option>
                                <option value="Indigo (O)">Indigo (O)</option>
                                <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                                <option value="Autis (Q)">Autis (Q)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pekerjaan</label>
                            <select name="pekerjaan_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option selected value=""></option>
                                <option value="tidak-bekerja">Tidak bekerja</option>
                                <option value="nelayan">Nelayan</option>
                                <option value="petani">Petani</option>
                                <option value="peternak">Peternak</option>
                                <option value="pns-tni-polri">PNS/TNI/POLRI</option>
                                <option value="karyawan-swasta">Karyawan Swasta</option>
                                <option value="pedagang-kecil">Pedagang Kecil</option>
                                <option value="pedagang-besar">Pedagang Besar</option>
                                <option value="wiraswasta">Wiraswasta</option>
                                <option value="wirausaha">Wirausaha</option>
                                <option value="buruh">Buruh</option>
                                <option value="pensiunan">Pensiunan</option>
                                <option value="meninggal-dunia">Meninggal Dunia</option>
                            </select>
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pendidikan Terakhir</label>
                            <select name="pendidikan_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option selected value=""></option>
                                <option value="tidak-sekolah">Tidak sekolah</option>
                                <option value="putus-sd">Putus SD</option>
                                <option value="sd-sederajat">SD Sederajat</option>
                                <option value="smp-sederajat">SMP Sederajat</option>
                                <option value="sma-sederajat">SMA Sederajat</option>
                                <option value="d1">D1</option>
                                <option value="d2">D2</option>
                                <option value="d3">D3</option>
                                <option value="d4-s1">D4/S1</option>
                                <option value="s2">S2</option>
                                <option value="s3">S3</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Penghasilan</label>
                            <select name="penghasilan_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option selected value=""></option>
                                <option value="<500000">< Rp. 500.000</option>
                                <option value="500000-999999">Rp. 500.000 - Rp. 999.999</option>
                                <option value="1000000-1999999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                <option value="2000000-4999999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                <option value="5000000-20000000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                <option value=">20000000">> Rp. 20.000.000</option>
                                <option value="tidak-berpenghasilan">Tidak Berpenghasilan</option>
                            </select>
                        </div>
                    </section>
                </div>
            </div>
            <div class="w-full border p-4 rounded-xl bg-white shadow-sm">
                <h5 class="text-xl font-bold border-b border-slate-200 pb-2">Data Periodik</h5>
                <div class="mt-4 gap-2 flex flex-col">
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tinggi Badan</label>
                            <input type="number" name="tb" value="{{ old('tb') }}" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('tb')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berat Badan</label>
                            <input type="number" name="bb" value="{{ old('bb') }}" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('bb')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Jarak Tempat ke sekolah</label>
                            <select name="jarak_kesekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option selected value="Kurang Dari 1KM">Lebih Dari 1KM</option>
                                <option value="Lebih Dari 1KM">Kurang Dari 1KM</option>
                            </select>
                            @error('jarak_kesekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Lebih Dari 1 km, sebutkan</label>
                            <input type="number" min="0" name="jarak_kesekolah_lainnya" value="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('jarak_kesekolah_lainnya')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Waktu Tempuh Berangkat Sekolah</label>
                            <input type="number" min="0" name="waktu_kesekolah" value="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Contoh: 15 menit, 30 menit" />
                            @error('waktu_kesekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Lebih dari 60menit, sebutkan</label>
                            <input type="number" min="0" name="waktu_kesekolah_lainnya" value="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('waktu_kesekolah_lainnya')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Jumlah Saudara Kandung</label>
                            <input type="number" min="0" name="saudara_kandung" value="{{ old('saudara_kandung') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Contoh: 15 menit, 30 menit" />
                            @error('saudara_kandung')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Ukuran Baju</label>
                            <select name="uk_baju" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option>Pilih Ukuran Pakaian</option>
                                <option value="XS">XS</option>
                                <option value="SM">SM</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="3XL">3XL</option>
                                <option value="4XL">4XL</option>
                            </select>
                            @error('uk_baju')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                </div>
            </div>
            <button type="submit" class="w-full bg-red-800 text-white py-2 rounded-xl text-lg font-bold">Daftar Sekarang</button>
        </form>
    </div>
    <script>
        const selectField = document.getElementById('asal_sekolah_select');
    const customInputDiv = document.getElementById('custom_school_input');

    selectField.addEventListener('change', function () {
        if (this.value === 'other') {
            customInputDiv.classList.remove('hidden');
        } else {
            customInputDiv.classList.add('hidden');
        }
    });
    </script>
</x-client-layout>
