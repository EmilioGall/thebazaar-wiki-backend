<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    public function items()
    {

        return $this->hasMany(Item::class);
    }

    public function media()
    {

        return $this->hasMany(Media::class);
    }

    public function merchants()
    {

        return $this->hasMany(Merchant::class);
    }

    public function monsters()
    {

        return $this->hasMany(Monster::class);
    }

    public function shops()
    {

        return $this->belongsToMany(Shop::class);
    }

    public function skills()
    {

        return $this->hasMany(Skill::class);
    }
}
