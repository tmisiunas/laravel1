@extends('layouts.public')

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@section('content')
    <h1>Events List</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>Id</th>
            <th>Sport</th>
            <th>Contest</th>
            <th>Start time</th>
            <th>Participant 1</th>
            <th>Participant 2</th>
        </tr>

        @foreach($events as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->sport->sport }}</td>
                <td>{{ $e->contest->name }}</td>
                <td>{{ $e->event_start_time }}</td>
                <td>{{ $e->participant1->participant }}</td>
                <td>{{ $e->participant2->participant }}</td>
            </tr>
        @endforeach
    </table>
@endsection

