@extends('layouts.app')

@section('content')
    <a role="button" href="{{ url('ingredients/create') }}">Legg til ingrediens</a>
    <article>
        <ul>
            @foreach ($ingredients as $ingredient)
                <li>{{ $ingredient->name }} <a href="ingredients/{{ $ingredient->id }}/edit">Endre</a>
            <form action="/ingredients/{{ $ingredient->id }}" method="POST" style="display:inline-block">
                @csrf
                @method('delete')
                <button class="link" type="submit">Slette</button>
            </form></li>
            @endforeach        
        </ul>
    </article>        
@endsection