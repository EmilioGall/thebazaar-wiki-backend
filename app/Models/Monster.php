<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Monster extends Model
{
    use HasFactory;

    protected $fillable = [

        'tier_id',
        'monster_name',
        'monster_slug',
        'monster_img'

    ];

    public function setMonsterNameAttribute($value)
    {

        $this->attributes['monster_name'] = $value;

        $this->attributes['monster_slug'] = Str::slug($value);
    }

    ///// Relations /////

    public function items()
    {

        return $this->belongsToMany(Item::class, 'item_monster');
    }

    public function skills()
    {

        return $this->belongsToMany(Skill::class, 'monster_skill');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'monster_tag');
    }

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }
}
