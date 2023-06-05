<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_sales',
        'tgl_masuk',
        'tgl_keluar',
    ];

    // function untuk relasi ke tabel sales
    public function RSales()
    {
        return $this->belongsTo(Sales::class, 'id_sales');
    }

    
}
