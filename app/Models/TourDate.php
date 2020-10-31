<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDate extends Model
{
    /* Implemented fillable tourdates controller */
    use HasFactory;

    protected $fillable = ['name', 'start_date', 'end_date'];
}
