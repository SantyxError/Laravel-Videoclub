<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelicula;

class Actor extends Model
{
    use HasFactory;
    function pelicula()
    {
        return  $this->belongsToMany(Pelicula::class);
    }
}
