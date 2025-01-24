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

        return $this->belongsToMany(Enchantment::class, 'effect_enchantment')->withPivot('value');
    }

    public function items()
    {

        return $this->belongsToMany(Item::class, 'effect_item')->withPivot('tier_id', 'value');
    }

    public function skills()
    {

        return $this->belongsToMany(Skill::class, 'effect_skill')->withPivot('tier_id', 'value');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }
}
