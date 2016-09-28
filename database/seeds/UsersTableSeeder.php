<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;
use Faker\Generator;

use App\Members;

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
    }
}
