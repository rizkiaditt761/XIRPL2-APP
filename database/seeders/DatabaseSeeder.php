<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::factory(10)->create();

        $dataNewAdmin = [
            'nik'           => '123456',
            'name'          => 'Maman Suparman',
            'jeniskelamin' => 'Laki-laki',
            'alamat'       => 'Jl. Indonesia Raya',
            'notelepon'    => '08711111111',
            'role'         => 'Admin',
            'email'        => 'mamansuparman@gmail.com',
            'password'     => bcrypt('123456')
        ];

        User::create($dataNewAdmin);
    }
}