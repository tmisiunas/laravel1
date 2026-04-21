@extends('layouts.public')

@section('content')

    @if(session('success'))
        <p class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </p>
    @endif

    @if(session('error'))
        <p class="mb-4 text-red-600 font-semibold">
            {{ session('error') }}
        </p>
    @endif

    @guest
        <a href="{{ route('login') }}"
           class="text-blue-500 underline text-sm">
            Login to place a bet
        </a>
    @endguest

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
                    <td class="px-10 py-2">
                        @auth
                            <button onclick="toggleForm({{ $e->id }})"
                                    class="bg-blue-500 text-white px-3 py-1 rounded">
                                Place bet
                            </button>
                        @endauth
                        @guest
                            <span class="text-red-500 text-sm">
                                Login to bet
                            </span>
                        @endguest
                    </td>
                </tr>
                @auth
                    <tr id="form-{{ $e->id }}" class="hidden">
                        <td colspan="7" class="p-4 bg-gray-100">
                            <form method="POST" action="{{ route('bets.store') }}">
                                @csrf

                                <input type="hidden" name="event_id" value="{{ $e->id }}">

                                <input type="number" name="bet" placeholder="Enter bet"
                                       class="border p-2 mr-2">

                                <button type="submit"
                                        class="bg-green-500 text-white px-3 py-1 rounded">
                                    Submit
                                </button>
                            </form>
                        </td>
                    </tr>
                @endauth
              @endforeach
            </tbody>
        </table>
    </div>

@endsection

<script>
    function toggleForm(id) {
        const row = document.getElementById('form-' + id);
        row.classList.toggle('hidden');
    }
</script>
