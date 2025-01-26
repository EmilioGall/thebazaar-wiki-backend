<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    ///// Relations /////

    public function monsters()
    {

        return $this->belongsToMany(Monster::class, 'day_monster');
    }

    public function tiers()
    {

        return $this->belongsToMany(Tier::class);
    }
}
