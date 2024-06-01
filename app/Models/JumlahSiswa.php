<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JumlahSiswa extends Model
{
    use HasFactory;
    protected $table = 'jumlah_siswa';
    protected $primaryKey = 'id_jumlah_siswa';
}
