<h2>Add Participant</h2>

<form method="POST" action="{{ route('participants.store') }}">
    @csrf

    <!-- Name -->
    <div>
        <label>Name:</label><br>
        <input type="text" name="participant">
    </div>

    <!-- Country -->
    <div>
        <label>Country:</label><br>
        <select name="country_id">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">
                    {{ $country->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Sport -->
    <div>
        <label>Sport:</label><br>
        <select name="sport_id">
            @foreach($sports as $sport)
                <option value="{{ $sport->id }}">
                    {{ $sport->sport }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Participant Type -->
    <div>
        <label>Type:</label><br>
        <select name="participant_type_id">
            @foreach($types as $type)
                <option value="{{ $type->id }}">
                    {{ $type->type }}
                </option>
            @endforeach
        </select>
    </div>

    <br>
    <button type="submit">Save</button>
</form>
