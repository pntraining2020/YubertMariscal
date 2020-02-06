<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'first_name',
        'last_name'
    ];
    protected $dates = ['created_at'];
}
