<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Actor extends Model
{
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'actor_movie', 'actor_id', 'movie_id');
    }
}
