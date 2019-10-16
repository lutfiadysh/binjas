<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bdp extends Model
{
    public $timestamps = false;
    protected $table = 'tr_bdp';
    protected $fillable =[
        'user_id','basic_technique','bare_handed','with_equipment'
    ];
}
