<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'user' => '1',
            'device' => 'komputer',
            'description' => 'komputer layarnya jadi biru',
            'location' => 'devisi it meja surti',
            'status' => 'penting',
        ]);
    }
}
