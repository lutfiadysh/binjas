<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'tr_achievements';

    protected $fillable = [
        'user_id','bidang','branch','position','level','file','year',
    ];
}
