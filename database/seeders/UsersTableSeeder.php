<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ridoy',
                'email' => 'hrridoy10@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => 'Habib',
                'email' => 'habib20@gmail.com',
                'password' => '1234567',
            ],
            [
                'name' => 'Riad',
                'email' => 'riad30@gmail.com',
                'password' => '12345678',
            ],
        ];

        User::insert($users);










    }
}
