<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParticipantType extends Model
{
    use HasFactory;

    // Allow mass assignment
    protected $fillable = [
        'type',
    ];

    /**
     * Get all participants for this type
     */
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
