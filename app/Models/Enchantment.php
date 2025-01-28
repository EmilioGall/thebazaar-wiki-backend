<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enchantment extends Model
{
    use HasFactory;

    ///// Relations /////

    public function effects()
    {

        return $this->belongsToMany(Effect::class, 'effect_enchantment')->withPivot('primary_value', 'secondary_value');
    }

    public function items()
    {

        return $this->belongsToMany(Item::class, 'enchantment_item');
    }

    public function tag()
    {

        return $this->hasOne(Tag::class);
    }
}
