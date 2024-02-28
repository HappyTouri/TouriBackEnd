<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    function tours(){
        return $this->hasMany(Tour::class);
    }
    function drivers(){
        return $this->hasMany(Driver::class);
    }
    function tourGuides(){
        return $this->hasMany(TourGuide::class);
    }
    function accommodations(){
        return $this->hasMany(Accommodation::class);
    }
    function country(){
        return $this->belongsTo(Country::class);
    }
}
