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
        // factory(App\User::class, 3)->make()


        DB::table('users')->insert([
            'id' => 1,
            'name' => 'master',
            'img' => 'profile.png',
            'email' => 'master@app.com',
            'password' => bcrypt('123456789'),
            'role' => 3,
            'remember_token' => str_random(10),
        ]);



        DB::table('users')->insert([
        	'id' => 2,
            'name' => 'admin',
            'img' => 'profile.png',
            'email' => 'admin@app.com',
            'password' => bcrypt('123456789'),
            'role' => 2,
            'remember_token' => str_random(10),
        ]);



        DB::table('users')->insert([
        	'id' => 3,
            'name' => 'publisher',
            'img' => 'profile.png',
            'email' => 'publisher@app.com',
            'password' => bcrypt('123456789'),
            'role' => 1,
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'user',
            'img' => 'profile.png',
            'email' => 'user@app.com',
            'password' => bcrypt('123456789'),
            'role' => 0,
        'remember_token' => str_random(10),
        ]);


    }
}
