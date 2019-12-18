@extends('layouts.template')
@section('content')
        <table style='border:1px solid black' width=100%>
            <tr style='border:2px solid black'>
            <th class="table-active" >ID</th>
                <th class="table-active" >Nom</th>
                <th class="table-active">Dirigé par</th>
                <th class="table-active">Durée</th>
                <th class="table-active">Année</th>
                <th class="table-active">Genre</th>
                @if(auth::check());
                    <th class="table-active">Modifier</th>
                    <th class="table-active">Supprimer</th>
                @endif
            </tr>

        @foreach($movies as $movie)
            <tr>
                <td class="table-default">{{$movie->id}} </td>
                <td class="table-info">{{$movie->name}} </td>
                <td class="table-primary">{{$movie->director}} </td>
                <td class="table-success">{{$movie->duration}} </td>
                <td class="table-danger">{{$movie->year}} </td>
                <td class="table-warning">{{$movie->genre->name}} </td>
                @if (Auth::check());
                    <td>
                        <form action="{{route('editMovie', $movie->id)}}" method="POST">
                        @csrf
                            <!--<input type="hidden" name="movie_id" value={{$movie->id}}>-->
                            <button type="submit">Modifier</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('deleteMovie', $movie->id)}}" method="POST">
                        @csrf
                            <!--<input type="hidden" name="movie_id" value={{$movie->id}}>-->
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach

        </table>
@endsection

{{--READ--}}




 

