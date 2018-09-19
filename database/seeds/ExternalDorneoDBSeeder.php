<?php

use App\Helpers\ExternalDatabaseConnection;
use Illuminate\Database\Seeder;
class ExternalDorneoDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connection = ExternalDatabaseConnection::setConnection();

        $connection->insert('insert into profiles
(
`project_id`,
`referral_id`,
`status_id`,
`alias`,
`full_name`,
`email`,
`address`,
`city`,
`state_id`,
`zip`,
`photo`,
`password`,
`comments`,
`cell_phone`,
`phone_checked`,
`date_added`,
`date_updated`,
`empl_agreement`,
`was_contract`,
`archived`,
`interviewpreferred`)
 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [   'project_id' => 100,
                'referral_id' => 14,
                'status_id' => 1,
                'alias' => 'AlexandrDukhnoPGrF0',
                'full_name' => 'Alexandr Dukhno 0',
                'email' => 'flash.alex320@gmail.com',
                'address' => 'QwertyFive, 60',
                'city' => 'Odessa',
                'state_id' => 0,
                'zip' => '68100',
                'photo' => '/public/uploads/profiles/photos/default.jpg',
                'password' => 'tinyapply',
                'comments' => 'tinyapply',
                'cell_phone' => '0999999999',
                'phone_checked' => 'n',
                'date_added' => '2018-09-19 07:39:02',
                'date_updated' => '2018-09-19 07:39:02',
                'empl_agreement' => '',
                'was_contract' => 'n',
                'archived' => 'n',
                'interviewpreferred' => '',
            ],
            [
                'project_id' => 100,
                'referral_id' => 14,
                'status_id' => 1,
                'alias' => 'AlexandrDukhnoZzjDR',
                'full_name' => 'Alexandr Dukhno 1',
                'email' => 'flash.alex321@gmail.com',
                'address' => 'QwertyFive, 61',
                'city' => 'Odessa',
                'state_id' => 1,
                'zip' => '68100',
                'photo' => '/public/uploads/profiles/photos/default.jpg',
                'password' => 'tinyapply',
                'comments' => 'tinyapply',
                'cell_phone' => '0999999999',
                'phone_checked' => 'n',
                'date_added' => '2018-09-19 07:39:02',
                'date_updated' => '2018-09-19 07:39:02',
                'empl_agreement' => '',
                'was_contract' => 'n',
                'archived' => 'n',
                'interviewpreferred' => '',
            ],
            [
                'project_id' => 100,
                'referral_id' => 14,
                'status_id' => 1,
                'alias' => 'AlexandrDukhnouoZGP',
                'full_name' => 'Alexandr Dukhno 2',
                'address' => 'QwertyFive, 62',
                'email' => 'flash.alex322@gmail.com',
                'city' => 'Odessa',
                'state_id' => 2,
                'zip' => '68100',
                'photo' => '/public/uploads/profiles/photos/default.jpg',
                'password' => 'tinyapply',
                'comments' => 'tinyapply',
                'cell_phone' => '0999999999',
                'phone_checked' => 'n',
                'date_added' => '2018-09-19 07:39:02',
                'date_updated' => '2018-09-19 07:39:02',
                'empl_agreement' => '',
                'was_contract' => 'n',
                'archived' => 'n',
                'interviewpreferred' => '',
            ],
            [
                'project_id' => 100,
                'referral_id' => 14,
                'status_id' => 1,
                'alias' => 'AlexandrDukhnoCKtb2',
                'full_name' => 'Alexandr Dukhno 3',
                'address' => 'QwertyFive, 63',
                'email' => 'flash.alex323@gmail.com',
                'city' => 'Odessa',
                'state_id' => 3,
                'zip' => '68100',
                'photo' => '/public/uploads/profiles/photos/default.jpg',
                'password' => 'tinyapply',
                'comments' => 'tinyapply',
                'cell_phone' => '0999999999',
                'phone_checked' => 'n',
                'date_added' => '2018-09-19 07:39:02',
                'date_updated' => '2018-09-19 07:39:02',
                'empl_agreement' => '',
                'was_contract' => 'n',
                'archived' => 'n',
                'interviewpreferred' => '',
            ]

        );
    }
}
