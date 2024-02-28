<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmationPhoto extends Model
{
    use HasFactory;
    function hotels_reservation(){
        return $this->belongsTo(HotelReservation::class);
    }
}
