<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;
    protected $table = 'ekstrakurikuler';
    protected $primaryKey = 'id_ekstrakurikuler';

    protected $fillable = [
    	'judul_ekstrakurikuler','gambar_ekstrakurikuler','deskripsi_ekstrakurikuler','slug','user_id'
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
