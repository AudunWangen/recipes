@extends('layouts.app')

@section('content')
    This is the recipes edit
    <form action="/recipes/{{ $recipe->id }}" method="POST">
        @csrf
        @method('PUT')
    </form>
@endsection