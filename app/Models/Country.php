<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    // Optional: define fillable fields (for mass assignment)
    protected $fillable = [
        'name',
    ];

    /**
     * Get all participants for this country
     */
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
