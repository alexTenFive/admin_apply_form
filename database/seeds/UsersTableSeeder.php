<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'email' => 'admin@dorneo.wibe.pro',
            'type' => User::TYPE_ADMIN,
            'password' => bcrypt('secret'),
        ]);
    }
}
