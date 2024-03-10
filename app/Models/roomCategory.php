<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomCategory extends Model
{
    protected $fillable = [
        'room_category',
    ];
    use HasFactory;
}
