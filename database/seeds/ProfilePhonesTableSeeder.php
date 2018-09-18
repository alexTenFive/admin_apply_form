<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\ProfilePhones;

class ProfilePhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilePhones::create([
            'profile_id' => 1,
            'phone' => '0971998764',
        ]);

        ProfilePhones::create([
            'profile_id' => 2,
            'phone' => '0971922234',
        ]);

        ProfilePhones::create([
            'profile_id' => 3,
            'phone' => '0971998076',
        ]);

        ProfilePhones::create([
            'profile_id' => 4,
            'phone' => '0971123122',
        ]);

        ProfilePhones::create([
            'profile_id' => 5,
            'phone' => '0971911111',
        ]);
    }
}
