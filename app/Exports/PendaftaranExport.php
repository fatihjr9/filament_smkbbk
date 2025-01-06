<?php

namespace App\Exports;

use App\Models\Pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendaftaranExport implements FromCollection,WithHeadings
{
    protected $pendaftaran;
    public function __construct($pendaftaran)
    {
        $this->pendaftaran = $pendaftaran;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect([
            [
                'No Registrasi' => $this->pendaftaran->no_registrasi,
                'Tingkat' => $this->pendaftaran->tingkat,
                'Jurusan' => $this->pendaftaran->jurusan->nama,
                'Nama Siswa' => $this->pendaftaran->nama_siswa,
                'Asal Sekolah Siswa' => $this->pendaftaran->nama_siswa,
                'Alamat Asal Sekolah Siswa' => $this->pendaftaran->nama_siswa,
                'Jenis Kelamin' => $this->pendaftaran->jenis_kelamin,
                'NISN' => $this->pendaftaran->nisn,
                'NIS' => $this->pendaftaran->nis,
                'NIK' => $this->pendaftaran->nik,
                'NPSN' => $this->pendaftaran->npsn,
                'TTL' => $this->pendaftaran->tmpt_lahir_siswa . ', ' . $this->pendaftaran->tgl_lahir_siswa,
                'Agama' => $this->pendaftaran->agama,
                'Kebutuhan Khusus Siswa' => $this->pendaftaran->kebutuhan_khusus_siswa,
                'Alamat Siswa' => $this->pendaftaran->alamat_siswa,
                'Dusun' => $this->pendaftaran->dusun,
                'RT' => $this->pendaftaran->rt,
                'RW' => $this->pendaftaran->rw,
                'Kelurahan' => $this->pendaftaran->kelurahan,
                'Kecamatan' => $this->pendaftaran->kecamatan,
                'Kodepos' => $this->pendaftaran->kodepos,
                'Kota' => $this->pendaftaran->kota,
                'Provinsi' => $this->pendaftaran->provinsi,
                'Transport' => $this->pendaftaran->transport,
                'Jenis Tinggal' => $this->pendaftaran->jenis_tinggal,
                'Telp Rumah' => $this->pendaftaran->telp_rmh,
                'Telp HP' => $this->pendaftaran->telp_hp,
                'Email' => $this->pendaftaran->email,
                'No KKS' => $this->pendaftaran->no_kks,
                'KPS' => $this->pendaftaran->kps,
                'No KPS' => $this->pendaftaran->no_kps,
                'Usul KIP' => $this->pendaftaran->usul_kip,
                'Layak KIP' => $this->pendaftaran->layak_kip,
                'Penerima KIP' => $this->pendaftaran->penerima_kip,
                'No KIP' => $this->pendaftaran->no_kip,
                'Nama KIP' => $this->pendaftaran->nama_kip,
                'Menolak KIP' => $this->pendaftaran->menolak_kip,
                'Nama Ayah' => $this->pendaftaran->nama_ayah,
                'TTL Ayah' => $this->pendaftaran->tgl_lahir_ayah,
                'Kebutuhan Khusus Ayah' => $this->pendaftaran->kebutuhan_khusus_ayah,
                'Pekerjaan Ayah' => $this->pendaftaran->pekerjaan_ayah,
                'Pendidikan Ayah' => $this->pendaftaran->pendidikan_ayah,
                'Penghasilan Ayah' => $this->pendaftaran->penghasilan_ayah,
                'Nama Ibu' => $this->pendaftaran->nama_ibu,
                'TTL Ibu' => $this->pendaftaran->tgl_lahir_ibu,
                'Kebutuhan Khusus Ibu' => $this->pendaftaran->kebutuhan_khusus_ibu,
                'Pekerjaan Ibu' => $this->pendaftaran->pekerjaan_ibu,
                'Pendidikan Ibu' => $this->pendaftaran->pendidikan_ibu,
                'Penghasilan Ibu' => $this->pendaftaran->penghasilan_ibu,
                'Nama Wali' => $this->pendaftaran->nama_wali,
                'TTL Wali' => $this->pendaftaran->tgl_lahir_wali,
                'Kebutuhan Khusus Wali' => $this->pendaftaran->kebutuhan_khusus_wali,
                'Pekerjaan Wali' => $this->pendaftaran->pekerjaan_wali,
                'Pendidikan Wali' => $this->pendaftaran->pendidikan_wali,
                'Penghasilan Wali' => $this->pendaftaran->penghasilan_wali,
                'Tinggi Badan' => $this->pendaftaran->tb,
                'Berat Badan' => $this->pendaftaran->bb,
                'jarak Kesekolah' => $this->pendaftaran->jarak_kesekolah,
                'jarak Kesekolah lainnya' => $this->pendaftaran->jarak_kesekolah_lainnya,
                'waktu Kesekolah' => $this->pendaftaran->waktu_kesekolah,
                'waktu Kesekolah lainnya' => $this->pendaftaran->waktu_kesekolah_lainnya,
                'saudara Kandung' => $this->pendaftaran->saudara_kandung,
                'ukuran Baju' => $this->pendaftaran->uk_baju,
            ]
        ]);
    }

    public function headings(): array
    {
        return ['No Registrasi','Tingkat','Jurusan Yang dipilih','Nama','Asal Sekolah', 'Alamat Asal Sekolah', 'Jenis Kelamin', 'NISN', 'NIS','NIK','NPSN','TTL','Agama','Kebutuhan Khusus Siswa','Alamat Siswa', 'Dusun', 'RT', 'RW', 'Kelurahan', 'Kecamatan', 'Kodepos', 'Kota', 'Provinsi', 'Transport', 'Jenis Tinggal', 'Telp Rumah', 'Telp HP', 'Email', 'No KKS', 'KPS', 'No KPS', 'Usul KIP', 'Layak KIP', 'Penerima KIP', 'No KIP', 'Nama KIP', 'Menolak KIP', 'Nama Ayah', 'TTL Ayah', 'Kebutuhan Khusus Ayah', 'Pekerjaan Ayah', 'Pendidikan Ayah', 'Penghasilan Ayah', 'Nama Ibu', 'TTL Ibu', 'Kebutuhan Khusus Ibu', 'Pekerjaan Ibu', 'Pendidikan Ibu', 'Penghasilan Ibu', 'Nama Wali', 'TTL Wali', 'Kebutuhan Khusus Wali', 'Pekerjaan Wali', 'Pendidikan Wali', 'Penghasilan Wali', 'Tinggi Badan', 'Berat Badan', 'jarak Kesekolah', 'jarak Kesekolah lainnya', 'waktu Kesekolah', 'waktu Kesekolah lainnya', 'saudara Kandung', 'ukuran Baju'];
    }
}
