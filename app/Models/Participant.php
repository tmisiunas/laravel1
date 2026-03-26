<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Country;
use App\Models\Sport;
use App\Models\ParticipantType;

class Participant extends Model
{
    use HasFactory;

    // Allow mass assignment
    protected $fillable = [
        'participant',
        'country_id',
        'sport_id',
        'participant_type_id',
    ];

    /**
     * Get the country of the participant
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the sport of the participant
     */
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    /**
     * Get the participant type
     */
    public function participantType()
    {
        return $this->belongsTo(ParticipantType::class);
    }
}
