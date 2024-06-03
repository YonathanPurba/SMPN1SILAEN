<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    use HasFactory;
    protected $table = 'ekstrakulikuler';
    protected $primaryKey = 'id_ekstrakulikuler';

    protected $fillable = [
    	'judul_ekstrakulikuler','gambar_ekstrakulikuler','deskripsi_ekstrakulikuler','slug','user_id'
    ];

    /**
     * Get the route key name for Laravel.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
