@extends('layouts.app')

@section('content')
    <article>
        <header>
            <h1>{{ $recipe->name }}</h1>
            <ul>
                <li>Forberedningstid: {{ $recipe->preptime }}</li>
                <li>Tilberedningstid: {{ $recipe->cooktime }}</li>
                <li>Porsjoner: {{ $recipe->servings }}</li>
            </ul>
        </header>
        <details open>
            <summary>Ingredienser</summary>
            <ul>
                @foreach ( $recipe->recipeIngredient as $item )
                    <li>{{ $item->amount }} {{ $item->measurement_unit }} - {{ $item->ingredient->name }}</li>
                @endforeach
            </ul>
        </details>
        <h2>Oppskrift</h2>
        <p>{{ $recipe->directions }}</p>
    </article>
    <!-- @if (Auth::user())
        show Add and Edit stuff
    @else
        Don't show Add and Edit stuff
    @endif -->
@endsection