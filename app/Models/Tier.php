<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    public function effects()
    {
        
        return $this->hasManyThrough(Effect::class, EffectItem::class);
    }

    public function items()
    {

        return $this->hasMany(Item::class, 'min_tier_id');
    }

    public function media()
    {

        return $this->hasMany(Media::class);
    }

    public function merchants()
    {

        return $this->hasMany(Merchant::class);
    }

    public function monsters()
    {

        return $this->hasMany(Monster::class);
    }

    public function days()
    {

        return $this->belongsToMany(Day::class);
    }

    public function skills()
    {

        return $this->hasMany(Skill::class, 'min_tier_id');
    }
}
