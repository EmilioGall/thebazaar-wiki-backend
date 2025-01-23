<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;

    ///// Relations /////

    public function items()
    {

        return $this->belongsToMany(Item::class);
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
