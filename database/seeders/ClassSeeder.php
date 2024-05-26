<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            [
                'class_id' => '2301',
                'name' => 'VII A',
                'teacher_id' => null,
            ],
            [
                'class_id' => '2302',
                'name' => 'VII B',
                'teacher_id' => null,
            ],
            [
                'class_id' => '2201',
                'name' => 'VIII A',
                'teacher_id' => null,
            ],
            [
                'class_id' => '2202',
                'name' => 'VIII B',
                'teacher_id' => null,
            ],
            [
                'class_id' => '2101',
                'name' => 'IX A',
                'teacher_id' => null,
            ],
            [
                'class_id' => '2102',
                'name' => 'IX B',
                'teacher_id' => null,
            ],
        ]);
    }
}
