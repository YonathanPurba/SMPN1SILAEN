<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    protected $fillable = [
    	'judul','slug','deskripsi','thumbnail','slug','user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
