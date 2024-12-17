<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TahunAjaran extends Model
{
    use HasFactory;
    protected $fillable = ["nama", "status"];
    public function Grup()
    {
        return $this->belongsTo(WaGrup::class);
    }
}
