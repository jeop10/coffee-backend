<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    const CREATED = 'SCREATED';
    const WORKING = 'SWORKING';
    const PICKUP = 'SWPICKUP';
    const COMPLETE = 'COMPLETE';
}
