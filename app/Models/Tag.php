<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function choices()
    {

        return $this->belongsToMany(Choice::class);
    }

    public function effects()
    {

        return $this->belongsToMany(Effect::class);
    }

    public function enchantment()
    {

        return $this->belongsTo(Enchantment::class);
    }

    public function encounters()
    {

        return $this->belongsToMany(Encounter::class);
    }

    public function items()
    {

        return $this->belongsToMany(Item::class);
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

    public function skills()
    {

        return $this->belongsToMany(Skill::class);
    }
}
