<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [

        'hero_id',
        'min_tier_id',
        'item_name',
        'item_slug',
        'item_img',
        'item_state',
        'item_cooldown',
        'item_max_ammo',
        'item_multicast',

    ];

    public function setItemNameAttribute($value)
    {

        $this->attributes['item_name'] = $value;

        $this->attributes['item_slug'] = Str::slug($value);
    }

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

        return $this->belongsToMany(Merchant::class, 'item_merchant');
    }

    public function monsters()
    {

        return $this->belongsToMany(Monster::class, 'item_monster');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'item_tag');
    }

    // Relationship to minimum tier
    public function minTier()
    {

        return $this->belongsTo(Tier::class, 'min_tier_id');
    }

    // Relationship many-to-many with tier
    public function tiers()
    {

        return $this->belongsToMany(Tier::class, 'item_tier');
    }

    public function itemTiers()
    {
        
        return $this->hasMany(ItemTier::class);
    }
}
