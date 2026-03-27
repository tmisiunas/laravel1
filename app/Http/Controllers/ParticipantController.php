<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Sport;
use App\Models\ParticipantType;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = \App\Models\Participant::with([
            'country',
            'sport',
            'participantType'
        ])->get();

        return view('participants.index', compact('participants'));
    }
    public function create()
    {
        return view('participants.create', [
            'countries' => Country::all(),
            'sports' => Sport::all(),
            'types' => ParticipantType::all(),
        ]);
    }

    public function store(Request $request)
    {
        Participant::create([
            'participant' => $request->participant,
            'country_id' => $request->country_id,
            'sport_id' => $request->sport_id,
            'participant_type_id' => $request->participant_type_id,
        ]);

        return redirect()
            ->route('participants.index')
            ->with('success', 'Participant added!');
    }
}
