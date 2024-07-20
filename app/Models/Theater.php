<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'telephone', 'address', 'city', 'price'];

    public function studios()
    {
        return $this->hasMany(Studio::class);
    }
}
