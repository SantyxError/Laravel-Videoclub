<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Director;
use App\Models\Actor;

class Pelicula extends Model
{
    use HasFactory;


    //Una pelicula pertenece a un director
    function director()
    {
        return  $this->belongsTo(Director::class);
    }

    // Una pelicula pertenece a varios actores

    function actor()
    {
        return $this->belongsToMany(Actor::class);
    }
}
