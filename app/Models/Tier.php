<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    public function days()
    {

        return $this->belongsToMany(Day::class, 'day_tier')->withPivot('probability');
    }

    public function items()
    {

        return $this->belongsToMany(Item::class, 'item_tier')->withPivot('effect_id');
    }

    public function itemsAsMinTier()
    {

        return $this->hasMany(Item::class, 'min_tier_id');
    }

    public function merchants()
    {

        return $this->hasMany(Merchant::class);
    }

    public function monsters()
    {

        return $this->hasMany(Monster::class);
    }

    public function skills()
    {

        return $this->belongsToMany(Skill::class, 'skill_tier')->withPivot('effect_id');
    }

    public function skillsAsMinTier()
    {
        
        return $this->hasMany(Skill::class, 'min_tier_id');
    }
}
