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
                            <select name="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
                                <option>Pilih Jurusan</option>
                                @foreach($jurusan as $j)
                                <option value="{{ $j->nama }}">{{ $j->nama }}</option>
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
                            <input type="text" name="nama_siswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
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
                            <input type="text" name="asal_sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('asal_sekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alamat Asal Sekolah</label>
                            <input type="text" name="alamat_asal_sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('alamat_asal_sekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">NISN</label>
                            <input type="text" min="0" name="nisn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NISN" />
                            @error('nisn')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">NIS</label>
                            <input type="text" min="0" name="nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NIS" />
                            @error('nis')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Nomor Induk Kependudukan ( NIK )</label>
                            <input type="text" min="0" name="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NIK" />
                            @error('nik')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">NPSN Sekolah Asal <span class="text-sm text-gray-400">( Diisikan dari jenjang sebelumnya )</span></label>
                            <input type="text" min="0" name="npsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="No NPSN" />
                            @error('npsn')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tempat, Tanggal Lahir</label>
                            <div class="grid grid-cols-3 gap-x-2 items-center">
                                <input type="text" name="tmpt_lahir_siswa" class="bg-gray-50 col-span-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Tempat Lahir" />
                                <input type="date" name="tgl_lahir_siswa" class="bg-gray-50 col-span-1 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Tanggal Lahir Siswa" />
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
                            <input type="text" name="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Masukkan Agama" />
                            @error('agama')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berkebutuhan Khusus</label>
                            <input type="text" name="kebutuhan_khusus_siswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Apakah Berkebutuhan Khusus?" />
                            @error('kebutuhan_khusus_siswa')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alamat tempat tinggal</label>
                            <input type="text" name="alamat_siswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('alamat_siswa')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Dusun</label>
                            <input type="text" name="dusun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('dusun')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">RT/RW</label>
                            <div class="grid grid-cols-2 gap-x-2 items-center">
                                <input type="number" name="rt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                                @error('rt')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                                <input type="number" name="rw" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                                @error('rw')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                            </div>
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kelurahan/Desa</label>
                            <input type="text" name="kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kelurahan')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kode Pos</label>
                            <input type="number" name="kodepos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kodepos')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kecamatan</label>
                            <input type="text" name="kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kecamatan')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Kabupaten/Kota</label>
                            <input type="text" name="kota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kota')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Provinsi</label>
                            <input type="text" name="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('provinsi')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Alat Transportasi ke Sekolah</label>
                            <input type="text" name="transport" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('transport')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Jenis Tinggal</label>
                            <input type="text" name="jenis_tinggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('jenis_tinggal')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">No Telp Rumah/ No Telp Hp</label>
                            <div class="grid grid-cols-2 gap-x-2 items-center">
                                <input type="text" name="telp_rmh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Masukkan no telp rumah" />
                                @error('telp_rmh')
                                    <div style="color: red;">Form ini belum terisi</div>
                                @enderror
                                <input type="text" name="telp_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Masukkan no telp hp" />
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
                            <input type="text" name="nama_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('nama_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('tgl_lahir_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berkebutuhan Khusus</label>
                            <input type="text" name="kebutuhan_khusus_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kebutuhan_khusus_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pekerjaan</label>
                            <input type="text" name="pekerjaan_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('pekerjaan_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('pendidikan_ayah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Penghasilan</label>
                            <input type="text" name="penghasilan_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
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
                            <input type="text" name="nama_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('nama_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('tgl_lahir_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berkebutuhan Khusus</label>
                            <input type="text" name="kebutuhan_khusus_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('kebutuhan_khusus_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pekerjaan</label>
                            <input type="text" name="pekerjaan_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('pekerjaan_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('pendidikan_ibu')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Penghasilan</label>
                            <input type="text" name="penghasilan_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
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
                            <input type="text" name="kebutuhan_khusus_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pekerjaan</label>
                            <input type="text" name="pekerjaan_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Penghasilan</label>
                            <input type="text" name="penghasilan_wali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
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
                            <input type="number" name="tb" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('tb')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Berat Badan</label>
                            <input type="number" name="bb" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('bb')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Jarak Tempat ke sekolah</label>
                            <input type="number" min="0" name="jarak_kesekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Contoh: 500m, atau 1km" />
                            @error('jarak_kesekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Lebih Dari 1 km, sebutkan</label>
                            <input type="number" min="0" name="jarak_kesekolah_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('jarak_kesekolah_lainnya')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Waktu Tempuh Berangkat Sekolah</label>
                            <input type="number" min="0" name="waktu_kesekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Contoh: 15 menit, 30 menit" />
                            @error('waktu_kesekolah')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Lebih dari 60menit, sebutkan</label>
                            <input type="number" min="0" name="waktu_kesekolah_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" />
                            @error('waktu_kesekolah_lainnya')
                                <div style="color: red;">Form ini belum terisi</div>
                            @enderror
                        </div>
                    </section>
                    <section class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label class="block mb-1 text-md font-medium text-gray-900">Jumlah Saudara Kandung</label>
                            <input type="number" min="0" name="saudara_kandung" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Contoh: 15 menit, 30 menit" />
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
</x-client-layout>
