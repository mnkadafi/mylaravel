<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
        		[
        			'name' => 'kadafi',
        			'email' => 'mnkadafi98@gmail.com',
        			'password' => \Hash::make('kadafi'),
                    'kota_id' => 1
        		],
        		[
        			'name' => 'rando',
        			'email' => 'rando98@gmail.com',
        			'password' => \Hash::make('rando'),
                    'kota_id' => 2
        		]
        	]);
    }
}
