<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function kota()
    {
        return $this->belongsTo('App\Kota', 'kota_id');
    }

    // public function kenda()
    // {
    //     return $this->hasMany(Kendaraan::class);
    // }
}
