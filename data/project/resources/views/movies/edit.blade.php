@extends('layouts.template')

@section('content')
    <h1>Modification de film</h1>
    <br><br>
    <form method="POST" action="{{route('updateMovie', $movie->id)}}">
    @csrf
        <div class="form-group">
            <label for="name" style="color : red">Nom</label>
            <input class="form-control" name="name" rows="1" value="{{$movie->name}}" required >
        <br>
            <label for="director" style="color : red">Réalisateur</label>
            <input class="form-control" name="director" rows="1" value="{{$movie->director}}" required>
        <br>
            <label for="duration" style="color : red">Durée</label>
            <input class="form-control" name="duration" rows="1" value="{{$movie->duration}}" required>
        <br>
            <label for="year" style="color : red">Année</label>
            <input class="form-control" name="year" rows="1" value="{{$movie->year}}" required>
        <br>
            <label for="genre_id" style="color : red">Genre</label>
        <br>
            <select name="genre_id">
                @foreach ($genres as $genre)
                    @if ($genre->name ==$movie->genre->name)
                        <option selected value="{{$genre->id}}">{{ $genre->name}}</option>
                    @else 
                        <option value="{{$genre->id}}">{{$genre->name}}"</option>
                    @endif
                @endforeach
            </select>   
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection

{{--UPDATE--}}