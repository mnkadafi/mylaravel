<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'nama', 'jenis_kelamin', 'alamat', 'no_telp', 'user_id',
    ];

    protected $hidden = [
    	'alamat', 'no_telp',
    ];

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
