<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengguna extends Model
{
    use HasFactory;
    protected $table = 'datapengguna';
    protected $fillable = [
        'iddataPengguna', 'Nik', 'Nama_anak', 'Usia', 'Nama_ibu', 'Alamat', 'Desa', 'Kecamatan', 'Rt', 'Rw', 'No_Hp', 'Nama_posyandu'
    ];
}
