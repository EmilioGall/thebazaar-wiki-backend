<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    ///// Relations /////

    public function enchantments()
    {

        return $this->belongsToMany(Enchantment::class, 'enchantment_item');
    }

    public function hero()
    {

        return $this->belongsTo(Hero::class);
    }

    public function merchants()
    {

        return $this->belongsToMany(Merchant::class, 'merchant_item');
    }

    public function monsters()
    {

        return $this->belongsToMany(Monster::class, 'monster_item');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'item_tag');
    }

    // Relazione al tier minimo
    public function minTier()
    {
        return $this->belongsTo(Tier::class);
    }

    // Relazione many-to-many per tiers
    public function tiers()
    {

        return $this->belongsToMany(Tier::class, 'item_tier')->withPivot('effect_id');
    }

    public function effects()
    {

        return $this->hasManyThrough(Effect::class, ItemTier::class);
    }
}
