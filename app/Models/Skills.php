<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'percentage',
        'icon',
        'category',
    ];
}
