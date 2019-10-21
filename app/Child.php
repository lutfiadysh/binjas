<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = [
        'user_id', 'name', 'sex', 'date_of_birth',
    ];
}
