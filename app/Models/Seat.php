<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = ['studio_id', 'number', 'is_available'];

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
}
