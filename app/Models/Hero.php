<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{

    use HasFactory;

    ///// Relations /////

    public function items()
    {

        return $this->hasMany(Item::class);
    }

    public function media()
    {

        return $this->hasMany(Media::class);
    }

    public function skills()
    {

        return $this->hasMany(Skill::class);
    }
}
