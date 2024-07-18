<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Director extends Model
{
    public function movies()
    {
        return $this->hasMany(Movie::class, 'director_id');
    }
}