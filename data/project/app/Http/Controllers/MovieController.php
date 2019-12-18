<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //objet
use App\Movie;
use App\Genre;

class MovieController extends Controller
{
    //READ
    public function showMovies()
    {
        //permet de récupérer tout le contenu de la table Movies et de la stocker dans la variable $movies
        $movies = Movie::All();

        //dd($movies);dd remplace le var_dump et die
        return view('movies.show', compact('movies'));
    }

    //CREATE etape 1
    public function createMovie()
    {
        //permet de récupérer tout le contenu de la table Genres et de la stocker dans la variable $genres
        $genres = Genre::All();

        //dd($genres);dd remplace le var_dump et die
        return view('movies.create', compact('genres'));
    }

    //CREATE etape 2
    public function store(Request $request)
    {
        //dd($request);
        $movie=new Movie([ //pour créer un objet de type Movie
            "name" => $request->name,
            "director" => $request->director,
            "duration" => $request->duration,
            "year" => $request->year,
            "genre_id" => $request->genre_id,
        ]); 
        //dd ($movie);
        //hydration = utiliser l'objet créée et l'insérer dans BDD
        $movie->save();
        return redirect('/Movies');
    }

    //UPDATE etape 1
    public function editMovie($id)
    {
        //dd ($id);
        //on va chercher le film dans notre table movie ou l'ID  ==  $id
        $movie = Movie::find($id);
        //dd($movie);
        //permet de récupérer tout le contenu de la table Genres et de la stocker dans la variable $genres
        $genres = Genre::All();
        return view('movies.edit', compact('movie','genres'));
    }

    //UPDATE etape 2
    public function update(Request $request, $id)
    {
        //dd($id);
        $movie = Movie::find($id);
        $movie->name = $request->name;
        $movie->director = $request->director;
        $movie->duration = $request->duration;
        $movie->year = $request->year;
        $movie->genre_id = $request->genre_id;
        //dd($movie);
        $movie->save();
        return redirect('/Movies');

    }

    //DELETE
    public function delete($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/Movies');
    }
}
