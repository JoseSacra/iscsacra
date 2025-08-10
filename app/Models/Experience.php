<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company',
        'job_title',
        'description',
        'start_date',
        'end_date',
        'location',
        'current_job'
    ];

    // Define the table name if it does not follow Laravel's naming convention
    protected $table = 'experiences';

}
