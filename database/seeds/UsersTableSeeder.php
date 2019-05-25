<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert(array(
    		[
    			'name' => "Admin 1",
    			'email' => "admin@admin.com",
    			'password' =>bcrypt('r4k4r411'),
    			'foto' => 'user.png',
    			'level' => '1'
    		],
    		[
    			'name' => "Raka",
    			'email' => "raka@raka.com",
    			'password' =>bcrypt('r4k4r411'),
    			'foto' => 'user.png',
    			'level' => '2'
    		]
    	));
    }
}
