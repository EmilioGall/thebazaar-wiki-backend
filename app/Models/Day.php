<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [

        'day_number'

    ];

    ///// Relations /////

    public function tiers()
    {

        return $this->belongsToMany(Tier::class, 'day_tier')->withPivot('probability');
    }
}
