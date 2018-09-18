<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\ProfileFiles;

class ProfileFilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileFiles::create([
            'profile_id' => 1,
            'host_name' => url('/'),
            'file_path' => '/uploads/profiles/files/AlexandrDukhnoCCC2e/default.docx',
            'file_name' => 'default.docx'
        ]);

        ProfileFiles::create([
            'profile_id' => 1,
            'host_name' => url('/'),
            'file_path' => '/uploads/profiles/files/AlexandrDukhnoCCC2e/default.txt',
            'file_name' => 'default.txt'
        ]);

        ProfileFiles::create([
            'profile_id' => 2,
            'host_name' => url('/'),
            'file_path' => '/uploads/profiles/files/AlexandrDukhnoG88Fl/default.docx',
            'file_name' => 'default.docx'
        ]);

        ProfileFiles::create([
            'profile_id' => 2,
            'host_name' => url('/'),
            'file_path' => '/uploads/profiles/files/AlexandrDukhnoG88Fl/default.txt',
            'file_name' => 'default.txt'
        ]);

        ProfileFiles::create([
            'profile_id' => 5,
            'host_name' => url('/'),
            'file_path' => '/uploads/profiles/files/YuriyRepkaxsbPi/default.pdf',
            'file_name' => 'default.pdf'
        ]);
    }
}
