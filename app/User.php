<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'role', 'nip', 'date_of_birth', 'pangkat', 'kesatuan', 'gol', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function children()
    {
        return $this->hasMany('App\Child');
    }
    public function tkj()
    {
        return $this->hasOne('App\Tkj', 'user_id', 'id');
    }
    public function bdp()
    {
        return $this->hasOne('App\Bdp','user_id','id');
    }
    public function prestasi()
    {
        return $this->hasOne('App\Prestasi','user_id','id');
    }
}

