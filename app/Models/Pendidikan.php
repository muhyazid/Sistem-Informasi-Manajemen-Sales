<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory; 
    protected $table = 'pendidikan';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_sales',
        'pendidikan_terakhir',
        'minat_pendidikan',
    ];

    public function RSales()
    {
        return $this->belongsTo(Sales::class, 'id_sales');
    }
    
    public function Pelatihan()
    {
        return $this->hasMany(Pelatihan::class, 'id_pelatihan');
    }
}
