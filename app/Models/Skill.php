<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function heroes()
    {
        
        return $this->belongsTo(Hero::class);
    }

    public function merchants()
    {

        return $this->belongsToMany(Merchant::class, 'merchant_skill');
    }

    public function monsters()
    {

        return $this->belongsToMany(Monster::class, 'monster_skill');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'tag_tier');
    }

    // Relazione al tier minimo
    public function minTier()
    {
        return $this->belongsTo(Tier::class);
    }

    // Relazione many-to-many per tiers
    public function tiers()
    {

        return $this->belongsToMany(Tier::class, 'skill_tier')->withPivot('effect_id');
    }

    public function effects()
    {

        return $this->hasManyThrough(Effect::class, SkillTier::class);
    }
}
