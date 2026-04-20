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
            <thead class="bg-neutral-100">
            <tr class="border-t odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                <th class="px-10 py-2 text-left text-sm font-medium">Id</th>
                <th class="px-10 py-2 text-left text-sm font-medium">Sport</th>
                <th class="px-10 py-2 text-left text-sm font-medium">Contest</th>
                <th class="px-10 py-2 text-left text-sm font-medium">Start time</th>
                <th class="px-10 py-2 text-left text-sm font-medium">Participant 1</th>
                <th class="px-10 py-2 text-left text-sm font-medium">Participant 2</th>
            </tr>
            </thead>

            <tbody>
            @foreach($events as $e)
                <tr>
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
