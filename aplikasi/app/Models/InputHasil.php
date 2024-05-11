<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputHasil extends Model
{
    use HasFactory;
    protected $table = 'hasil_input';
    protected $fillable = [
        'idHasil_input',
        'Lingkungan',
        'Pola_asuh',
        'Kesehatan_anak',
        'Faktor_kesehatan_ibu',
        'Pengetahuan_orangtua',
        'Kekurangan_Gizi_saat_Hamil',
        'Pola_Makanbalita',
        'dataPengguna_iddataPengguna',
        'Fatror_penyebab'
    ];
}
