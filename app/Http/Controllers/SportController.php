<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        // Get all sports from DB
        $sports = Sport::all();

        // Pass to view
        return view('sports.index', compact('sports'));
    }
}
