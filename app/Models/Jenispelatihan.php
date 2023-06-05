<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenispelatihan extends Model
{
    use HasFactory;
    protected $table = 'jenispelatihan';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_ijin',
        'deskripsi',
    ];

    public function Pelatihan()
    {
        // absensi dibawah ini merupakan nama model absensi
        return $this->hasMany(Pelatihan::class);
    }
}
