<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataSolusi extends Model
{
    use HasFactory;
    
    protected $table = 'solusi';
    protected $fillable = [
        'idSolusi',
        'Faktor_penyebab',
        'Nama_file',
        'Created_at',
        'Updated_at'
    ];
}
