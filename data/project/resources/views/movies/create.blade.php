@extends('layouts.template')

@section('content')
    <h1>Création de film</h1>
    <br><br>
        <form>
    {{--<form method="POST" action="/storeMovie">--}}
    {{--@csrf--}}
        <div class="form-group">
            <label for="name" style="color : red">Nom</label>
            <input class="form-control" name="name" rows="1" required>
        <br>
            <label for="director" style="color : red">Réalisateur</label>
            <input class="form-control" name="director" rows="1" required>
        <br>
            <label for="duration" style="color : red">Durée</label>
            <input class="form-control" name="duration" rows="1" required>
        <br>
            <label for="year" style="color : red">Année</label>
            <input class="form-control" name="year" rows="1" required>
        <br>
            <label for="genre_id" style="color : red">Genre</label>
        <br>
            <select name="genre_id">
                @foreach($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                @endforeach
            </select> 
        <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

{{--CREATE--}}
