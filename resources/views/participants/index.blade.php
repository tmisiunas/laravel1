@extends('layouts.public')

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@section('content')
    <h1>Participants List</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Country</th>
            <th>Sport</th>
            <th>Type</th>
        </tr>

        @foreach($participants as $p)
            <tr>
                <td>{{ $p->participant }}</td>
                <td>{{ $p->country->name }}</td>
                <td>{{ $p->sport->sport }}</td>
                <td>{{ $p->participantType->type }}</td>
            </tr>
        @endforeach
    </table>
@endsection

