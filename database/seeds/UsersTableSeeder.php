<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'admin',
            'email' => 'flash.alex322@gmail.com',
            'type' => User::TYPE_ADMIN,
            'password' => bcrypt('secret'),
        ]);
    }
}
