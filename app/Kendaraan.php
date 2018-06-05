<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraans';
    // protected $primaryKey = 'id_kendaraan';
    // public $incrementing = false;
    // public $timestamps = false;

    protected $fillable = ['nama_kendaraan','jenis_kendaraan','buatan','user_id','created_at','updated_at'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
