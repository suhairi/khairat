<?php

use Illuminate\Database\Seeder;
use App\User;

use App\Members;
use Faker\Factory;
use Faker\Generator;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Suhairi Abdul Hamid',
            'email'     => 'suhairi81@gmail.com',
            'password'  => bcrypt('suhairi')
        ]);

        factory('App\User', 10)->create();
    }

    
}
