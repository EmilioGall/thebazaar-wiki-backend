<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    use HasFactory;

    ///// Relations /////

    public function enchantments()
    {

        return $this->belongsToMany(Enchantment::class, 'effect_enchantment')->withPivot('primary_value', 'secondary_value');
    }

    public function itemTiers()
    {

        return $this->belongsToMany(ItemTier::class);
    }

    public function skillTiers()
    {
        
        return $this->belongsToMany(SkillTier::class);
    }
}
