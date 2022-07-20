@extends('layouts.app')

@section('content')
    This is the recipes edit
    <form action="/recipes" method="POST" enctype="multipart/form-data">
        @csrf
    </form>
@endsection