<?php

namespace App\Models;
use App\Models\Sport;
use App\Models\Country;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
