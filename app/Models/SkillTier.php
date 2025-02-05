<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillTier extends Model
{
    use HasFactory;

    protected $table = 'skill_tier';

    protected $fillable = [

        'skill_id',
        'tier_id'

    ];

    ///// Relations /////

    public function effects()
    {

        return $this->belongsToMany(Effect::class, 'effect_skill_tier')->withPivot('primary_value', 'secondary_value');
    }

    public function skill()
    {

        return $this->belongsTo(Skill::class);
    }

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }
}
