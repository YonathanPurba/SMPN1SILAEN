<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\User;

class Pengumuman extends Model
{
    use HasFactory;

    use Sluggable;

    protected $table = 'pengumuman';
    
    protected $fillable = [
    	'judul','deskripsi','tgl','slug','user_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
