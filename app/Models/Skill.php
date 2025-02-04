<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [

        'hero_id',
        'min_tier_id',
        'skill_name',
        'skill_slug',
        'skill_img'

    ];

    public function setSkillNameAttribute($value)
    {

        $this->attributes['skill_name'] = $value;

        $this->attributes['skill_slug'] = Str::slug($value);
    }

    ///// Relations /////

    public function heroes()
    {

        return $this->belongsToMany(Hero::class, 'hero_skill');
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

        return $this->belongsToMany(Tag::class, 'skill_tag');
    }

    // Relazione al tier minimo
    public function minTier()
    {

        return $this->belongsTo(Tier::class, 'min_tier_id');
    }

    // Relazione many-to-many per tiers
    public function tiers()
    {

        return $this->belongsToMany(Tier::class, 'skill_tier');
    }

    public function skillTiers()
    {
        
        return $this->hasMany(SkillTier::class);
    }
}
