@extends('layouts.app')

@section('content')
<h1>film:</h1>
@foreach ($film as $singoloFilm)
<p> {{$singoloFilm->title}}: {{$singoloFilm->original_title}}</p>
<p>Voto: {{$singoloFilm->vote}}</p>
    
@endforeach
@endsection
