<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Prestasi extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'prestasi';
    protected $primaryKey = 'id_prestasi';

    protected $fillable = [
    	'judul_prestasi','gambar_prestasi','deskripsi_prestasi','tanggal_prestasi','slug','user_id'
    ];

    /**
     * Get the route key name for Laravel.
     *
     * @return string
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul_prestasi'
            ]
        ];
    }
}   


