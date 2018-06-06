<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
	protected $table= 'kotas';
	protected $fillable = ['nama_kota'];

	public function kendaraans()
	{
		return $this->hasManyThrough(Kendaraan::class, User::class);
	}

	public function kendaraan()
	{
		return $this->hasManyThrough('App\Kendaraan', 'App\User',
			'kode_kota', // Foreign key di table users misalnya
			'user_kode', // Foreign key di table kendaraans misalnya
			'kode_user' // Foreign key di table users misalnya
		);
	}

	public function user()
	{
		return $this->hasOne('App\User');
	}
}
