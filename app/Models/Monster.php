<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;

    ///// Relations /////

    public function days()
    {

        return $this->belongsTo(Day::class);
    }

    public function items()
    {

        return $this->belongsToMany(Item::class, 'monster_item');
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
