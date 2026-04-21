<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bet;

class BetController extends Controller
{
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->back()->with('error', 'You must be logged in to place a bet.');
        }

        $request->validate([
            'event_id' => 'required|exists:events,id',
            'bet' => 'required|numeric|numeric',
        ]);

        Bet::create([
            'event_id' => $request->event_id,
            'user_id' => auth()->id(),
            'bet' => $request->bet,
        ]);

        return redirect()->back()->with('success', 'Bet placed!');
    }
}

