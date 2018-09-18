<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FormsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(ProfileFilesTableSeeder::class);
        $this->call(ProfilePhonesTableSeeder::class);
    }
}
