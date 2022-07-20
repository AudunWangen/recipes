@extends('layouts.app')

@section('content')
    This is the recipes show
    Show edit buttons if logged in
    @if (Auth::user())
        show Add and Edit stuff
    @else
        Don't show Add and Edit stuff
    @endif
@endsection