<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'pelatihan';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_sales',
        'id_pendidikan',
        'id_jenispelatihan',
        'waktu',
    ];

    public function RSales()
    {
        return $this->belongsTo(Sales::class, 'id_sales');
    }

    public function RPendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan');
    }
    public function RJenispelatihan()
    {
        return $this->belongsTo(Jenispelatihan::class, 'id_jenispelatihan');
    }
}
