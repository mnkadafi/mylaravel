<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Profile::insert([
        		[
        			'nama' => 'kadafi',
        			'jenis_kelamin' => 'laki-laki',
        			'alamat' => 'cianjur',
        			'no_telp' => '089521285347',
        			'user_id' => '1'
        		],
        		[
        			'nama' => 'rando',
        			'jenis_kelamin' => 'laki-laki',
        			'alamat' => 'bandung',
        			'no_telp' => '089521123144',
        			'user_id' => '2'
        		]        		
        	]);
    }
}
