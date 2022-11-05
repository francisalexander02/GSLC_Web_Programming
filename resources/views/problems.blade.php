@extends('layout')
@section('content')
    @include('partials._hero')
    @include('partials._search')
    @unless(count($problems) == 0)
        @foreach ($problems as $problem)
            <x-problem-card :problem="$problem" />
        @endforeach
    @else
        <p>No problems found</p>
    @endunless
@endsection
