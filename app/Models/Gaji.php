<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $table = 'gaji';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_sales',
        'gaji_pokok',
        'potongan_gaji',
        'bonus',
        'total_gaji',
        'tgl_gajian',
    ];
    public function RSales()
    {
        return $this->belongsTo(Sales::class, 'id_sales');
    }
}
