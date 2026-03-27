<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        // Get all countries from DB
        $countries = Country::all();

        // Pass to view
        return view('countries.index', compact('countries'));
    }
}
