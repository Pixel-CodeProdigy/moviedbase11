<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::with(['director', 'actors', 'genres', 'ratings'])->get();
    }

    public function show($id)
    {
        return Movie::with(['director', 'actors', 'genres', 'ratings'])->findOrFail($id);
    }

    public function moviesWithGenres()
    {
        return Movie::with('genres')->get();
    }

    public function moviesWithRatings()
    {
        return Movie::with(['ratings', 'ratings.user'])->get();
    }
}
