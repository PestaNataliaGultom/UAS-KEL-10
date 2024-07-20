<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'title',
        'genre',
        'duration',
        'director',
        'cast',
        'writer',
        'synopsis',
        'distributor',
        'trailer',
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
}
