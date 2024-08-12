<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    use HasFactory;

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_rosters','roster_id','employee_id');
    }
}
