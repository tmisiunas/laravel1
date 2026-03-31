    <h2>Create Event</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('events.store') }}">
        @csrf

        <!-- Sport -->
        <select name="sport_id">
            <option value="">Select Sport</option>
            @foreach($sports as $sport)
                <option value="{{ $sport->id }}">{{ $sport->sport }}</option>
            @endforeach
        </select>

        <br><br>

        <!-- Contest -->
        <select name="contest_id">
            <option value="">Select Contest</option>
            @foreach($contests as $contest)
                <option value="{{ $contest->id }}">{{ $contest->name }}</option>
            @endforeach
        </select>

        <br><br>

        <!-- Participant 1 -->
        <select name="participant1_id">
            <option value="">Participant 1</option>
            @foreach($participants as $p)
                <option value="{{ $p->id }}">{{ $p->participant }}</option>
            @endforeach
        </select>

        <br><br>

        <!-- Participant 2 -->
        <select name="participant2_id">
            <option value="">Participant 2</option>
            @foreach($participants as $p)
                <option value="{{ $p->id }}">{{ $p->participant }}</option>
            @endforeach
        </select>

        <br><br>

        <!-- Time -->
        <input type="datetime-local" name="event_start_time">

        <br><br>

        <!-- Value -->
        <input type="number" name="value" placeholder="Value">

        <br><br>

        <!-- Result -->
        <input type="number" name="result" placeholder="Result">

        <br><br>

        <!-- Result text -->
        <input type="text" name="result_text" placeholder="Result Text">

        <br><br>

        <button type="submit">Save</button>
    </form>
