<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    // Define the table associated with the model
    protected $fillable = [
        'institution',
        'degree',
        'start_date',
        'end_date',
        'location',
        'description',
        'type',
        'current_study',
    ];

    // Define the table name if it does not follow Laravel's naming convention
    protected $table = 'education';
}
