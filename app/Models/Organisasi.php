<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organisasi extends Model
{
    use HasFactory;
    protected $fillable = ["nama", "posisi", "nidn", "foto", "jurusan_id"];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
