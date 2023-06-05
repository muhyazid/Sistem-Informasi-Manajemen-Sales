<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_ijin';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_sales',
        'id_jenisijin',
        'alasan_pengajuan',
        'tgl_pengajuan',
        'status',
    ];

    public function RSales()
    {
        return $this->belongsTo(Sales::class, 'id_sales');
    }
    public function RIjin()
    {
        return $this->belongsTo(Ijin::class, 'id_jenisijin');
    }


}
