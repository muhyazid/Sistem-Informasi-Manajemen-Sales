<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    use HasFactory;

    protected $table = 'tunjangan';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_sales',
        'tunjangan_kesehatan',
        'tunjangan_transportasi',
        'tunjangan_makan',
        'total_tunjangan',
    ];

    public function RSales()
    {
        return $this->belongsTo(Sales::class, 'id_sales');
    }
}
