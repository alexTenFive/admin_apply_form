<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Profile::create([
                'project_id' => 100,
                'remote_referral_id' => 14,
                'form_id' => 1,
                'full_name' => 'Alexandr Dukhno ' . $i,
                'email' => 'flash.alex32' . $i . '@gmail.com',
                'city' => 'Odessa',
                'address' => 'QwertyFive, 6' . $i,
                'state_id' => $i,
                'zip' => 68100,
                'alias' => 'AlexandrDukhno' . str_random(5),
                'cell_phone' => '0999999999',
            ]);
        }

        for ($i = 0; $i < 4; $i++) {
            Profile::create([
                'project_id' => 111,
                'remote_referral_id' => 17,
                'form_id' => 2,
                'full_name' => 'Yuriy Repka ' . $i,
                'email' => 'yuriy.repka32' . $i . '@gmail.com',
                'city' => 'Kiyv',
                'address' => 'Sadovaya, 2' . $i,
                'status_id' => 1,
                'state_id' => $i,
                'zip' => 63100,
                'alias' => 'YuriyRepka' . str_random(5),
                'cell_phone' => '0888888888',
            ]);
        }

        for ($i = 0; $i < 4; $i++) {
            Profile::create([
                'project_id' => 113,
                'remote_referral_id' => 15,
                'form_id' => 3,
                'full_name' => 'Vasya Skovoroda ' . $i,
                'email' => 'vasya.skovoroda32' . $i . '@gmail.com',
                'city' => 'Dnepr',
                'address' => 'Tverskaya, 2' . $i,
                'status_id' => 1,
                'state_id' => $i,
                'zip' => 65100,
                'alias' => 'VasyaSkovoroda' . str_random(5),
                'cell_phone' => '0777777777',
            ]);
        }
    }
}
