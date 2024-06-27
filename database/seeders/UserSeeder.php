<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'userid' => '230001',
                'name' => 'Aldi Firmansyah',
                'password' => bcrypt("''''''''"),
                'role' => '0',
                'email' => 'aldifirmanysah@example.com',
            ],
            [
                'id' => '2',
                'userid' => '197503211998031005',
                'name' => 'Budi Santoso',
                'password' => bcrypt("''''''''"),
                'role' => '1',
                'email' => 'budisantoso@example.com',
            ],
            [
                'id' => '3',
                'userid' => '1',
                'name' => 'Wang Eugeo',
                'password' => bcrypt("''''''''"),
                'role' => '2',
                'email' => 'wangeugeo@example.com',
            ],
        ]);
    }
}
