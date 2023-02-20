<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelicula;

class Director extends Model
{
    use HasFactory;
    function pelicula()
    {
        return $this->hasMany(Pelicula::class);
    }
}
