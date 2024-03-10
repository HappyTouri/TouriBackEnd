<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable =[
            'country',
            'country_icon'
        ];
    use HasFactory;
}
