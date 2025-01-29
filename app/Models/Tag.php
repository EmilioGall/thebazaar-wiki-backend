<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [

        'tag_name',
        'tag_icon',
        'tag_type'

    ];

    ///// Relations /////

    public function enchantments()
    {

        return $this->hasMany(Enchantment::class);
    }

    public function encounters()
    {

        return $this->belongsToMany(Encounter::class, 'encounter_tag');
    }

    public function items()
    {

        return $this->belongsToMany(Item::class, 'item_tag');
    }

    public function merchants()
    {

        return $this->belongsToMany(Merchant::class, 'merchant_tag');
    }

    public function monsters()
    {

        return $this->belongsToMany(Monster::class, 'monster_tag');
    }

    public function skills()
    {

        return $this->belongsToMany(Skill::class, 'skill_tag');
    }
}
