<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawan = ['surti', 'tejo', 'pakde'];
        foreach ($karyawan as $item) {
            DB::table('user_tests')->insert([
                'name' => $item,
                'email' => $item . '@example.com',
                'devisi' => 'IT',
            ]);
        }
    }
}
