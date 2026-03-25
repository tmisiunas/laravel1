@extends('layouts.public')

@section('content')
    <h1>Sports List</h1>
    <ul>
        @foreach($sports as $sport)
            <li>{{ $sport->sport }}</li>
        @endforeach
    </ul>
@endsection
