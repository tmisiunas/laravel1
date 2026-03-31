<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Sport;
use App\Models\Contest;
use App\Models\Participant;

class EventController extends Controller
{
    public function index()
    {
        $events = \App\Models\Event::with([
            'id',
            'sport_id',
            'contest_id'
        ])->get();

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create', [
            'sports' => Sport::all(),
            'contests' => Contest::all(),
            'participants' => Participant::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'sport_id' => 'required',
            'contest_id' => 'required',
            'participant1_id' => 'required|different:participant2_id',
            'participant2_id' => 'required',
            'event_start_time' => 'required',
        ]);

        Event::create($request->all());

        return redirect()
            ->route('events.index')
            ->with('success', 'Event added!');

    }
}
