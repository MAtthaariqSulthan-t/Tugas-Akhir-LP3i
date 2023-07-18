<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $UserData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Karyawan',
                'email' => 'karyawan@gmail.com',
                'role' => 'karyawan',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($UserData as $key => $value) {
            User::create($value);
        }
    }
}
