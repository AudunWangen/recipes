@extends('layouts.app')

@section('content')
    <h1>Ny ingrediens</h1>
    <form action="/ingredients" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">
            Navn på ingrediens
            <input type="text" name="name" />
        </label>
        <button type="submit">Submit</button>
    </form>
@endsection