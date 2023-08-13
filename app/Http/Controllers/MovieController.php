<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->save();
        return redirect('/my-movies');
    }

    public function create()
    {
        return view('movie.form');
    }

    public function showMyMovies(): View
    {
        phpinfo();die;
        return view('movie.list', [
            'movies' => Movie::where('status', 'OWNED')
        ]);
    }
}
