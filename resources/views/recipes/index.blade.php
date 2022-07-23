@extends('layouts.app')

@section('content')
    <a role="button" href="{{ url('recipes/create') }}">Legg til oppskrift</a>
    @foreach ($recipes as $recipe)
        @if ( ($loop->iteration-1) % 3 == 0 || $loop->first )
            <section class="grid">
        @endif
        <article>
            <header>
                <h1>{{ $recipe->name }}</h1>
            </header>
            <ul>
                <li>Forberedningstid: {{ $recipe->preptime }}</li>
                <li>Tilberedningstid: {{ $recipe->cooktime }}</li>
                <li>Porsjoner: {{ $recipe->servings }}</li>
            </ul>
            <a role="button" href="recipes/{{ $recipe->id }}/edit">Endre</a>
            <form action="/recipes/{{ $recipe->id }}" method="POST" style="display:inline-block">
                @csrf
                @method('delete')
                <button class="warning" type="submit">Slette</button>
            </form>
        </article>
        @if ( ($loop->iteration) % 3 == 0 || $loop->last )
            </section>
        @endif
    @endforeach
@endsection