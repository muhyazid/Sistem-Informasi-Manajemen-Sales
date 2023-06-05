<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ijin extends Model
{
    use HasFactory;

    protected $table = 'jenisijin';
    protected $primarykey = 'id';
    protected $fillable = [
        'jenis_ijin',
        'deskripsi',
    ];

    public function Pengajuan()
    {
        // pengajuan dibawah ini merupakan nama model pengajuan
        return $this->hasMany(Pengajuan::class);
    }
    
}
