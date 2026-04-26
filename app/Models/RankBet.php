<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RankBet extends Model
{
    protected $fillable = [
        'event_id',
        'participant_id',
        'user_id',
        'rank_bet'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
