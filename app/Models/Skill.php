<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

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

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }
}
