<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * One contest has many events
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
