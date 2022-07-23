@extends('layouts.app')

@section('content')
    <h1>Ny oppskrift</h1>
    <form action="/recipes" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">
            Navn på oppskrift
            <input type="text" name="name" />
        </label>
        <label for="file">File browser
            <input type="file" id="file" name="file">
        </label>
        <label for="preptime">
            Forberedningstid
            <input type="text" name="preptime" />
        </label>
        <label for="cooktime">
            Tilberedningstid
            <input type="text" name="cooktime" />
        </label>
        <label for="servings">
            Porsjoner
            <input type="text" name="servings" />
        </label>
        <label for="directions">
            Instruksjoner
            <textarea rows="20" name="directions"></textarea>
        </label>
        <button type="submit">Submit</button>
    </form>
@endsection