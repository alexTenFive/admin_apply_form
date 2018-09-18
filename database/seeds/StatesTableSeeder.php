<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            ['id' => 0, 'state' => 'None'],
            ['id' => 1, 'state' => 'Alabama'],
            ['id' => 2, 'state' => 'Alaska'],
            ['id' => 4, 'state' => 'Arizona'],
            ['id' => 5, 'state' => 'Arkansas'],
            ['id' => 6, 'state' => 'California'],
            ['id' => 7, 'state' => 'Colorado'],
            ['id' => 8, 'state' => 'Connecticut'],
            ['id' => 9, 'state' => 'Delaware'],
            ['id' => 10, 'state'  => 'Florida'],
            ['id' => 11, 'state'  => 'Georgia'],
            ['id' => 13, 'state'  => 'Hawaii'],
            ['id' => 14, 'state'  => 'Idaho'],
            ['id' => 15, 'state'  => 'Illinois'],
            ['id' => 16, 'state'  => 'Indiana'],
            ['id' => 17, 'state'  => 'Iowa'],
            ['id' => 18, 'state'  => 'Kansas'],
            ['id' => 19, 'state'  => 'Kentucky'],
            ['id' => 20, 'state'  => 'Louisiana'],
            ['id' => 21, 'state'  => 'Maine'],
            ['id' => 22, 'state'  => 'Maryland'],
            ['id' => 23, 'state'  => 'Massachusetts'],
            ['id' => 24, 'state'  => 'Michigan'],
            ['id' => 25, 'state'  => 'Minnesota'],
            ['id' => 26, 'state'  => 'Mississippi'],
            ['id' => 27, 'state'  => 'Missouri'],
            ['id' => 28, 'state'  => 'Montana'],
            ['id' => 29, 'state'  => 'Nebraska'],
            ['id' => 30, 'state'  => 'Nevada'],
            ['id' => 31, 'state'  => 'New Hampshire'],
            ['id' => 32, 'state'  => 'New Jersey'],
            ['id' => 33, 'state'  => 'New Mexico'],
            ['id' => 34, 'state'  => 'New York'],
            ['id' => 35, 'state'  => 'North Carolina'],
            ['id' => 36, 'state'  => 'North Dakota'],
            ['id' => 38, 'state'  => 'Ohio'],
            ['id' => 39, 'state'  => 'Oklahoma'],
            ['id' => 40, 'state'  => 'Oregon'],
            ['id' => 41, 'state'  => 'Pennsylvania'],
            ['id' => 43, 'state'  => 'Rhode Island'],
            ['id' => 44, 'state'  => 'South Carolina'],
            ['id' => 45, 'state'  => 'South Dakota'],
            ['id' => 46, 'state'  => 'Tennessee'],
            ['id' => 47, 'state'  => 'Texas'],
            ['id' => 48, 'state'  => 'Utah'],
            ['id' => 49, 'state'  => 'Vermont'],
            ['id' => 50, 'state'  => 'Virginia'],
            ['id' => 52, 'state'  => 'Washington'],
            ['id' => 54, 'state'  => 'West Virginia'],
            ['id' => 55, 'state'  => 'Wisconsin'],
            ['id' => 56, 'state'  => 'Wyoming'],
        ]);
    }
}
