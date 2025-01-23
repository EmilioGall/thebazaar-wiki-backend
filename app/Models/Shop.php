<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    ///// Relations /////

    public function tiers()
    {

        return $this->belongsToMany(Tier::class);
    }
}
