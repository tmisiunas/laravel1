<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = ['sport'];

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

}
