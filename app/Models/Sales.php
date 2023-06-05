<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_sales',
        'username',
        'password',
        'email',
        'alamat',
    ];

    // function untuk merelasikan ke data absensi yaitu id_sales
    //nama Absensi dibawah ini merupakan nama function nya
    public function Absensi()
    {
        // absensi dibawah ini merupakan nama model absensi
        return $this->hasMany(Absensi::class);
    }


    // function untuk merelasikan ke data gaji yaitu id_sales yang akan menampilkan nama sales
    //nama Gaji dibawah ini merupakan nama function nya
    public function Gaji()
    {
        // gaji dibawah ini merupakan nama model absensi
        return $this->hasMany(Gaji::class);
    }

    public function Pengajuan()
    {
        // pengajuan dibawah ini merupakan nama model pengajuan
        return $this->hasMany(Pengajuan::class);
    }

    public function Tunjangan()
    {
        // tunjangan dibawah ini merupakan nama model tunjangan
        return $this->hasMany(Tunjangan::class);
    }
    public function Pelatihan()
    {
        // tunjangan dibawah ini merupakan nama model tunjangan
        return $this->hasMany(Pelatihan::class);
    }

}
