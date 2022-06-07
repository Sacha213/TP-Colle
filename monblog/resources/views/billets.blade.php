@extends('layouts.layout')

@section('titrePage')
Les billets du blog
@endsection

@section('titreItem')
<h1>Tous les billets :</h1>
@endsection

@section('contenu')
@foreach($billets as $billet)
    <p>{{$billet->bil_titre}}</p>
    <p>{{$billet->bil_date}}</p>
    <p>{{$billet->bil_contenu}}</p>
@endforeach

@endsection