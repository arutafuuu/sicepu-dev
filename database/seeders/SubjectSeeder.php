<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            [
                'subject_id' => 'A01',
                'name' => 'Matematika',
            ],
            [
                'subject_id' => 'A02',
                'name' => 'IPA Terpadu',
            ],
            [
                'subject_id' => 'A03',
                'name' => 'IPS Terpadu',
            ],
            [
                'subject_id' => 'A04',
                'name' => 'Bahasa Indonesia',
            ],
            [
                'subject_id' => 'B01',
                'name' => 'Seni Budaya',
            ],
            [
                'subject_id' => 'B02',
                'name' => 'Prakarya',
            ],
        ]);
    }
}
