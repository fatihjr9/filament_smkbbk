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
}
