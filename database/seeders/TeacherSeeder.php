<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            [
                'teacher_id' => '1970010112345678',
                'name' => 'Ahmad Saefudin',
                'gender' => 'lk',
                'subject' => 'Matematika',
                'phone' => '081234567890',
                'email' => 'ahmad.saefudin@example.com',
            ],
            [
                'teacher_id' => '1971020212345678',
                'name' => 'Budi Santoso',
                'gender' => 'lk',
                'subject' => 'Bahasa Indonesia',
                'phone' => '081234567891',
                'email' => 'budi.santoso@example.com',
            ],
            [
                'teacher_id' => '1972030312345678',
                'name' => 'Citra Dewi',
                'gender' => 'pr',
                'subject' => 'Bahasa Inggris',
                'phone' => '081234567892',
                'email' => 'citra.dewi@example.com',
            ],
            [
                'teacher_id' => '1973040412345678',
                'name' => 'Diana Sari',
                'gender' => 'pr',
                'subject' => 'Fisika',
                'phone' => '081234567893',
                'email' => 'diana.sari@example.com',
            ],
            [
                'teacher_id' => '1974050512345678',
                'name' => 'Eka Putra',
                'gender' => 'lk',
                'subject' => 'Kimia',
                'phone' => '081234567894',
                'email' => 'eka.putra@example.com',
            ],
            [
                'teacher_id' => '1975060612345678',
                'name' => 'Fitri Ayu',
                'gender' => 'pr',
                'subject' => 'Biologi',
                'phone' => '081234567895',
                'email' => 'fitri.ayu@example.com',
            ],
            [
                'teacher_id' => '1976070712345678',
                'name' => 'Gilang Ramadhan',
                'gender' => 'lk',
                'subject' => 'Geografi',
                'phone' => '081234567896',
                'email' => 'gilang.ramadhan@example.com',
            ],
            [
                'teacher_id' => '1977080812345678',
                'name' => 'Hani Nuraini',
                'gender' => 'pr',
                'subject' => 'Sejarah',
                'phone' => '081234567897',
                'email' => 'hani.nuraini@example.com',
            ],
            [
                'teacher_id' => '1978090912345678',
                'name' => 'Indra Wijaya',
                'gender' => 'lk',
                'subject' => 'Ekonomi',
                'phone' => '081234567898',
                'email' => 'indra.wijaya@example.com',
            ],
            [
                'teacher_id' => '1979101012345678',
                'name' => 'Joko Susanto',
                'gender' => 'lk',
                'subject' => 'Sosiologi',
                'phone' => '081234567899',
                'email' => 'joko.susanto@example.com',
            ],
            [
                'teacher_id' => '1980111112345678',
                'name' => 'Kiki Amalia',
                'gender' => 'pr',
                'subject' => 'Seni Budaya',
                'phone' => '081234567900',
                'email' => 'kiki.amalia@example.com',
            ],
            [
                'teacher_id' => '1981121212345678',
                'name' => 'Lina Marlina',
                'gender' => 'pr',
                'subject' => 'Pendidikan Jasmani',
                'phone' => '081234567901',
                'email' => 'lina.marlina@example.com',
            ],
            [
                'teacher_id' => '1982131312345678',
                'name' => 'Mulyadi',
                'gender' => 'lk',
                'subject' => 'TIK',
                'phone' => '081234567902',
                'email' => 'mulyadi@example.com',
            ],
            [
                'teacher_id' => '1983141412345678',
                'name' => 'Nina Puspita',
                'gender' => 'pr',
                'subject' => 'Bimbingan Konseling',
                'phone' => '081234567903',
                'email' => 'nina.puspita@example.com',
            ],
            [
                'teacher_id' => '1984151512345678',
                'name' => 'Oki Setiawan',
                'gender' => 'lk',
                'subject' => 'Agama',
                'phone' => '081234567904',
                'email' => 'oki.setiawan@example.com',
            ],
        ]);
    }
}
