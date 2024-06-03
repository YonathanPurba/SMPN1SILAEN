<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaPengajar extends Model
{
    use HasFactory;
    protected $table = 'tenagapengajar';
    protected $primaryKey = 'id_tenagapengajar';

    protected $fillable = [
    	'nama_tenagapengajar','jabatan','nip','alamat','gambar_tenagapengajar','slug','user_id'
    ];
}
