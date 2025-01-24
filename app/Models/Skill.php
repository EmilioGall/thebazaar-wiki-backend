<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_id',
        'min_tier_id',
        'skill_name',
        // Altri campi...
    ];

    public function effects()
    {

        return $this->belongsToMany(Effect::class, 'effect_skill')
            ->withPivot('value');
    }

    public function heroes()
    {
        
        return $this->belongsTo(Hero::class);
    }

    public function media()
    {

        return $this->hasOne(Media::class);
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
        return $this->belongsToMany(Tier::class, 'effect_skill')
                    ->withPivot('effect_id', 'value');
    }
}
