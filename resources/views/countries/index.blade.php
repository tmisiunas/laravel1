@extends('layouts.public')

@section('content')
    <h1>Countries List</h1>
    <ul>
        @foreach($countries as $c)
            <li>{{ $c->name }}</li>
        @endforeach
    </ul>
@endsection
