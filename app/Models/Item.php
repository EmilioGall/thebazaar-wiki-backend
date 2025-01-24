<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    use HasFactory;

    protected $fillable = [
        'hero_id',
        'min_tier_id',
        'item_name',
        // Altri campi...
    ];

    ///// Relations /////

    public function effects()
    {

        return $this->belongsToMany(Effect::class, 'effect_item')
            ->withPivot('value');
    }

    public function enchantments()
    {

        return $this->belongsToMany(Enchantment::class, 'enchantment_item')
            ->withPivot('value');
    }

    public function hero()
    {

        return $this->belongsTo(Hero::class);
    }

    public function media()
    {

        return $this->hasOne(Media::class);
    }

    public function merchants()
    {

        return $this->belongsToMany(Merchant::class);
    }

    public function monsters()
    {

        return $this->belongsToMany(Monster::class);
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }

    // Relazione al tier minimo
    public function minTier()
    {
        return $this->belongsTo(Tier::class, 'min_tier_id');
    }

    // Relazione many-to-many per tiers
    public function tiers()
    {
        return $this->belongsToMany(Tier::class, 'effect_item')
            ->withPivot('effect_id', 'value');
    }
}
