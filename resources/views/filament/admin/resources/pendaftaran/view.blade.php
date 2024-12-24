<x-filament-panels::page>
    <x-filament::card>
        <h1 class="text-xl font-bold">Biodata Siswa</h1>
        <x-filament::grid :default="2" class="gap-2" style="margin-top: 1rem;">
            <p>Nama: {{ $record->nama_siswa }}</p>
            <p>Jenis Kelamin: {{ $record->jenis_kelamin }}</p>
            <p>NISN: {{ $record->nisn }}</p>
            <p>NIS: {{ $record->nis }}</p>
            <p>NIK: {{ $record->nik }}</p>
            <p>Tempat Tanggal Lahir: {{ $record->tmpt_lahir_siswa }}, {{ \Carbon\Carbon::parse($record->tgl_lahir_siswa)->locale('id')->translatedFormat('l, d F Y') }}</p>
            <p>Agama: {{ $record->agama }}</p>
            <p>Kebutuhan Khusus Siswa: {{ $record->kebutuhan_khusus_siswa }}</p>
            <p>Alamat: {{ $record->alamat_siswa }}</p>
            <p>Dusun: {{ $record->dusun }}</p>
            <p>RT/RW: {{ $record->rt }}/{{ $record->rw }}</p>
            <p>Kelurahan: {{ $record->kelurahan }}</p>
            <p>Kecamatan: {{ $record->kecamatan }}</p>
            <p>Kodepos: {{ $record->kodepos }}</p>
            <p>Kota: {{ $record->kota }}</p>
            <p>Provinsi: {{ $record->provinsi }}</p>
            <p>Transportasi: {{ $record->transport }}</p>
            <p>Jenis Tinggal: {{ $record->jenis_tinggal }}</p>
            <p>Telepon Rumah: {{ $record->telp_rmh }}</p>
            <p>Telepon HP: {{ $record->telp_hp }}</p>
            <p>Email: {{ $record->email }}</p>
            <p>No. KKS: {{ $record->no_kks }}</p>
            <p>KPS: {{ $record->kps }}</p>
            <p>No. KPS: {{ $record->no_kps }}</p>
            <p>Usul KIP: {{ $record->usul_kip }}</p>
            <p>Layak KIP: {{ $record->layak_kip }}</p>
            <p>Penerima KIP: {{ $record->penerima_kip }}</p>
            <p>No. KIP: {{ $record->no_kip }}</p>
            <p>Nama KIP: {{ $record->nama_kip }}</p>
            <p>Menolak KIP: {{ $record->menolak_kip }}</p>
        </x-filament::grid>
    </x-filament::card>

    <x-filament::card>
        <h1 class="text-xl font-bold">Biodata Ayah</h1>
        <x-filament::grid :default="2" class="gap-2" style="margin-top: 1rem;">
            <p>Nama: {{ $record->nama_ayah }}</p>
            <p>Tempat Tanggal Lahir: {{ \Carbon\Carbon::parse($record->tgl_lahir_ayah)->locale('id')->translatedFormat('l, d F Y') }}</p>
            <p>Kebutuhan Khusus: {{ $record->kebutuhan_khusus_ayah }}</p>
            <p>Pekerjaan: {{ $record->pekerjaan_ayah }}</p>
            <p>Pendidikan: {{ $record->pendidikan_ayah }}</p>
            <p>Penghasilan: Rp {{ number_format($record->penghasilan_ayah, 0, ',', '.') }}</p>
        </x-filament::grid>
    </x-filament::card>

    <x-filament::card>
        <h1 class="text-xl font-bold">Biodata Ibu</h1>
        <x-filament::grid :default="2" class="gap-2" style="margin-top: 1rem;">
            <p>Nama: {{ $record->nama_ibu }}</p>
            <p>Tempat Tanggal Lahir: {{ \Carbon\Carbon::parse($record->tgl_lahir_ibu)->locale('id')->translatedFormat('l, d F Y') }}</p>
            <p>Kebutuhan Khusus: {{ $record->kebutuhan_khusus_ibu }}</p>
            <p>Pekerjaan: {{ $record->pekerjaan_ibu }}</p>
            <p>Pendidikan: {{ $record->pendidikan_ibu }}</p>
            <p>Penghasilan: Rp {{ number_format($record->penghasilan_ibu, 0, ',', '.') }}</p>
        </x-filament::grid>
    </x-filament::card>

    <x-filament::card>
        <h1 class="text-xl font-bold">Biodata Wali</h1>
        <x-filament::grid :default="2" class="gap-2" style="margin-top: 1rem;">
            <p>Nama: {{ $record->nama_wali }}</p>
            <p>Tempat Tanggal Lahir: {{ $record->tgl_lahir_wali }}</p>
            <p>Kebutuhan Khusus: {{ $record->kebutuhan_khusus_wali }}</p>
            <p>Pekerjaan: {{ $record->pekerjaan_wali }}</p>
            <p>Pendidikan: {{ $record->pendidikan_wali }}</p>
            <p>Penghasilan: Rp {{ number_format($record->penghasilan_wali, 0, ',', '.') }}</p>
        </x-filament::grid>
    </x-filament::card>

    <x-filament::card>
        <h1 class="text-xl font-bold">Lainnya</h1>
        <x-filament::grid :default="2" class="gap-2" style="margin-top: 1rem;">
            <p>Tinggi Badan: {{ $record->tb }}</p>
            <p>Berat Badan: {{ $record->bb }}</p>
            <p>Jarak ke Sekolah: {{ $record->jarak_kesekolah }}</p>
            <p>Jarak ke Sekolah (Lainnya): {{ $record->jarak_kesekolah_lainnya }}</p>
            <p>Waktu ke Sekolah: {{ $record->waktu_kesekolah }}</p>
            <p>Waktu ke Sekolah (Lainnya): {{ $record->waktu_kesekolah_lainnya }}</p>
            <p>Saudara Kandung: {{ $record->saudara_kandung }}</p>
            <p>Ukuran Baju: {{ $record->uk_baju }}</p>
        </x-filament::grid>
    </x-filament::card>
</x-filament-panels::page>
