<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            [
                'problem' => 'Password bermasalah',
                'par_name' => 'Ridwan',
                'name' => 'Aldi Firmansyah',
                'user_id' => '230001',
                'message' => 'Tidak dapat melakukan login dengan indikator password salah atau akun belum terdaftar',
            ],
            [
                'problem' => 'Password bermasalah',
                'par_name' => 'Wawan',
                'name' => 'Vina Amalia',
                'user_id' => '210001',
                'message' => 'Lupa password',
            ],
            [
                'problem' => 'Email berganti',
                'par_name' => 'Zaki',
                'name' => 'Yuli Rahmawati',
                'user_id' => '210003',
                'message' => 'Mengganti email',
            ],
        ]);
    }
}
