<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    const STANDARD = 'STANDARD';
    const SMALL = 'SMALLSIZ';
    const MEDIUM = 'MEDIUMSI';
    const BIG = 'BIGSIZEV';
}
