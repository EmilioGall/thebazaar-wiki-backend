<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [

        'tier_id',
        'merchant_name',
        'merchant_slug',
        'merchant_img',
        'reroll_cost'

    ];

    public function setMerchantNameAttribute($value)
    {

        $this->attributes['merchant_name'] = $value;

        $this->attributes['merchant_slug'] = Str::slug($value);
    }

    ///// Relations /////

    public function heroes()
    {

        return $this->belongsToMany(Hero::class, 'hero_merchant');
    }

    public function items()
    {

        return $this->belongsToMany(Item::class, 'item_merchant');
    }

    public function skills()
    {

        return $this->belongsToMany(Skill::class, 'merchant_skill');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'merchant_tag');
    }

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }
}
