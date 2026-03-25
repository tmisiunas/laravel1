<?php

namespace App\Models;
use App\Models\Sport;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

}
