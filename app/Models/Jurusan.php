<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;
    protected $fillable = ["nama", "deskripsi", "thumbnail"];
    public function organisasis()
    {
        return $this->hasMany(Organisasi::class);
    }
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
