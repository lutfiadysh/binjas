<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tkj extends Model
{   
    public $timestamps = false;
    protected $table = 'tr_tkj';
    protected $fillable = [
        'user_id','running','pull_up','sit_up','push_up','shuttle_run','year','semester',
    ];
}
