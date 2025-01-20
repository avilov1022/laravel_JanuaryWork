<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'login' => 'admin',
                    'name' => 'adminName',
                    'middlename' => 'adminMiddlename',
                    'lastname' => 'adminLastname',
                    'tel' => 'adminTel',
                    'email' => 'adminEmail',
                    'password' => Hash::make('qwe'),
                    'role' => 'admin',
                ],

            ]
        );
    }
}
