@extends('layouts.public')

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@section('content')
    <h1>Events List</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>Id</th>
            <th>Sports Id</th>
            <th>Contest Id</th>
        </tr>

        @foreach($events as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->sport->sport }}</td>
                <td>{{ $e->contest->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection

