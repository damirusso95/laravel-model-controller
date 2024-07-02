@extends('layouts.app')

@section('content')
<h1>film:</h1>
@foreach ($film as $singoloFilm)
<li>
    {{$singoloFilm->title}}: {{$singoloFilm->original_title}} - Voto: {{$singoloFilm->vote}}
</li> 

    
@endforeach
@endsection
