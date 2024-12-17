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
        Schema::table("organisasis", function (Blueprint $table) {
            $table
                ->foreignId("jurusan_id")
                ->nullable() // Bisa diisi NULL sementara jika data belum ada
                ->constrained("jurusans") // Referensi ke tabel jurusans
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("organisasis", function (Blueprint $table) {
            $table->dropForeign(["jurusan_id"]);
            $table->dropColumn("jurusan_id");
        });
    }
};
