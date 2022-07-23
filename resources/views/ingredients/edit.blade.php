@extends('layouts.app')

@section('content')
    <h1>Endre ingrediens</h1>
    <form action="/ingredients/{{ $ingredient->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">
            Navn på ingrediens
            <input type="text" name="name" value="{{ $ingredient->name }}" required />
        </label>
        <button type="submit">Submit</button>
    </form>
@endsection