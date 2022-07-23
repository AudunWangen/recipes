@extends('layouts.app')

@section('content')
    <article>
        <h1>Informasjon om ingredients</h1>
        <p>Navn på ingrediens: {{ $ingredient->name }}</p>
    </article>        
@endsection