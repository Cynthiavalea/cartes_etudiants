@extends('layouts.main')
@section('content')

<form action="{{ route('profile') }}" method="get" class="uk-align-center">
    <input type="text" name="nom" placeholder="Votre nom">
    <input type="text" name="prenom" placeholder="Votre prenom">
    <input type="submit" value="Pret">
</form>

@endsection