<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    ///// Relations /////

    public function choices()
    {

        return $this->belongsToMany(Choice::class);
    }

    public function encounter()
    {

        return $this->belongsTo(Encounter::class);
    }

    public function hero()
    {

        return $this->belongsTo(Hero::class);
    }

    public function item()
    {

        return $this->belongsTo(Item::class);
    }

    public function merchant()
    {

        return $this->belongsTo(Merchant::class);
    }

    public function monster()
    {

        return $this->belongsTo(Monster::class);
    }

    public function skill()
    {

        return $this->belongsTo(Skill::class);
    }

    public function tag()
    {

        return $this->belongsTo(Tag::class);
    }

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }
}
