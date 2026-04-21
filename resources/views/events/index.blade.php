@extends('layouts.public')

@section('content')

    @if(session('success'))
        <p class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </p>
    @endif

    <h1 class="text-xl font-semibold mb-4">Events List</h1>

    <div class="max-w-5xl mx-auto mt-6">
        <table class="min-w-full rounded-lg overflow-hidden">

            <thead class="bg-gray-100">
            <tr>
                <th class="px-10 py-2 text-left text-sm font-bold text-gray-700">Id</th>
                <th class="px-10 py-2 text-left text-sm font-bold text-gray-700">Sport</th>
                <th class="px-10 py-2 text-left text-sm font-bold text-gray-700">Contest</th>
                <th class="px-10 py-2 text-left text-sm font-bold text-gray-700">Start time</th>
                <th class="px-10 py-2 text-left text-sm font-bold text-gray-700">Participant 1</th>
                <th class="px-10 py-2 text-left text-sm font-bold text-gray-700">Participant 2</th>
            </tr>
            </thead>
            
            <tbody>
            @foreach($events as $e)
                <tr class="odd:bg-gray-200 even:bg-white hover:bg-indigo-50">
                    <td class="px-10 py-2">{{ $e->id }}</td>
                    <td class="px-10 py-2">{{ $e->sport->sport }}</td>
                    <td class="px-10 py-2">{{ $e->contest->name }}</td>
                    <td class="px-10 py-2">
                        {{ \Carbon\Carbon::parse($e->event_start_time)->format('Y-m-d H:i') }}
                    </td>
                    <td class="px-10 py-2">{{ $e->participant1->participant }}</td>
                    <td class="px-10 py-2">{{ $e->participant2->participant }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
