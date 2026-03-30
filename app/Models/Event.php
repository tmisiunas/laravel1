<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'sport_id',
        'contest_id',
        'participant1_id',
        'participant2_id',
        'event_start_time',
        'value',
        'result',
        'result_text',
    ];

    /**
     * Sport relationship
     */
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    /**
     * Contest relationship
     */
    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    /**
     * First participant
     */
    public function participant1()
    {
        return $this->belongsTo(Participant::class, 'participant1_id');
    }

    /**
     * Second participant
     */
    public function participant2()
    {
        return $this->belongsTo(Participant::class, 'participant2_id');
    }
}
