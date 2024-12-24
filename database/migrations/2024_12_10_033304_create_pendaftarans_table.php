<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("pendaftarans", function (Blueprint $table) {
            $table->id();
            // form
            $table->date("tgl_daftar");
            $table->string("tingkat")->default("Kelas X");
            $table->string("no_registrasi");
            $table
                ->foreignId("jurusan_id")
                ->nullable()
                ->constrained("jurusans")
                ->onDelete("cascade");
            // siswa
            $table->string("nama_siswa");
            $table->string("jenis_kelamin");
            $table->string("nisn");
            $table->string("nis");
            $table->string("nik");
            $table->string("npsn");
            $table->string("tmpt_lahir_siswa");
            $table->date("tgl_lahir_siswa");
            $table->string("agama");
            $table->string("kebutuhan_khusus_siswa");
            $table->string("alamat_siswa");
            $table->string("dusun");
            $table->integer("rt");
            $table->integer("rw");
            $table->string("kelurahan");
            $table->string("kecamatan");
            $table->integer("kodepos");
            $table->string("kota");
            $table->string("provinsi");
            $table->string("transport");
            $table->string("jenis_tinggal");
            $table->string("telp_rmh")->nullable();
            $table->string("telp_hp");
            $table->string("email")->nullable();
            $table->string("no_kks")->nullable();
            $table->string("kps")->nullable();
            $table->string("no_kps")->nullable();
            $table->string("usul_kip")->nullable();
            $table->string("layak_kip")->nullable();
            $table->string("penerima_kip")->nullable();
            $table->string("no_kip")->nullable();
            $table->string("nama_kip")->nullable();
            $table->string("menolak_kip")->nullable();
            // ayah
            $table->string("nama_ayah");
            $table->date("tgl_lahir_ayah");
            $table->string("kebutuhan_khusus_ayah");
            $table->string("pekerjaan_ayah");
            $table->string("pendidikan_ayah");
            $table->string("penghasilan_ayah");
            // ibu
            $table->string("nama_ibu");
            $table->date("tgl_lahir_ibu");
            $table->string("kebutuhan_khusus_ibu");
            $table->string("pekerjaan_ibu");
            $table->string("pendidikan_ibu");
            $table->string("penghasilan_ibu");
            // wali
            $table->string("nama_wali")->nullable();
            $table->date("tgl_lahir_wali")->nullable();
            $table->string("kebutuhan_khusus_wali")->nullable();
            $table->string("pekerjaan_wali")->nullable();
            $table->string("pendidikan_wali")->nullable();
            $table->string("penghasilan_wali")->nullable();
            // periodik
            $table->integer("tb");
            $table->integer("bb");
            $table->string("jarak_kesekolah");
            $table->integer("jarak_kesekolah_lainnya");
            $table->integer("waktu_kesekolah");
            $table->integer("waktu_kesekolah_lainnya");
            $table->integer("saudara_kandung");
            $table->string("uk_baju");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pendaftarans");
    }
};
