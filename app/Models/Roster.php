<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    use HasFactory;

    protected $table = 'rosters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'saturday_start_time',
        'saturday_end_time',
        'sunday_start_time',
        'sunday_end_time',
        'monday_start_time',
        'monday_end_time',
        'tuesday_start_time',
        'tuesday_end_time',
        'wednesday_start_time',
        'wednesday_end_time',
        'thursday_start_time',
        'thursday_end_time',
        'friday_start_time',
        'friday_end_time',
    ];
}
