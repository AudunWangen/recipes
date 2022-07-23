@extends('layouts.app')

@section('content')
    <h1>Endre oppskrift</h1>
    <form action="/recipes/{{ $recipe->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">
            Navn på oppskrift
            <input type="text" name="name" value="{{ $recipe->name }}" required />
        </label>
        <label for="file">File browser
            <input type="file" id="file" name="file">
        </label>
        <label for="preptime">
            Forberedningstid
            <input type="text" name="preptime" value="{{ $recipe->preptime }}" />
        </label>
        <label for="cooktime">
            Tilberedningstid
            <input type="text" name="cooktime" value="{{ $recipe->cooktime }}" />
        </label>
        <label for="servings">
            Porsjoner
            <input type="text" name="servings" value="{{ $recipe->servings }}" />
        </label>
        <label for="directions">
            Instruksjoner
            <textarea rows="20" name="directions">{{ $recipe->directions }}</textarea>
        </label>
        <button type="submit">Submit</button>
    </form>
    <h1>Ingredienser</h1>
    <ul>
            @foreach ( $recipe->recipeIngredient as $item )
                <li>{{ $item->amount }} {{ $item->measurement_unit }} - {{ $item->ingredient->name }}</li>
            @endforeach
    </ul>
@endsection