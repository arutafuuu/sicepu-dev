<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'student_id' => '230001',
                'name' => 'Aldi Firmansyah',
                'gender' => 'lk',
                'class_id' => '2301',
                'phone' => '081234567003',
                'email' => 'aldifirmansyah@example.com',
                'parent_name' => 'Ridwan',
                'parent_phone' => '081234567103',
                'parent_email' => 'ridwan@example.com',
            ],
            [
                'student_id' => '230002',
                'name' => 'Alya Putri',
                'gender' => 'pr',
                'class_id' => '2301',
                'phone' => '081234567001',
                'email' => 'alya.putri@example.com',
                'parent_name' => 'Budi Putra',
                'parent_phone' => '081234567101',
                'parent_email' => 'budi.putra@example.com',
            ],
            [
                'student_id' => '230003',
                'name' => 'Budi Pratama',
                'gender' => 'lk',
                'class_id' => '2302',
                'phone' => '081234567002',
                'email' => 'budi.pratama@example.com',
                'parent_name' => 'Citra Pratami',
                'parent_phone' => '081234567102',
                'parent_email' => 'citra.pratami@example.com',
            ],
            [
                'student_id' => '230004',
                'name' => 'Deni Ramdani',
                'gender' => 'lk',
                'class_id' => '2302',
                'phone' => '081234567004',
                'email' => 'deni.ramdani@example.com',
                'parent_name' => 'Eka Ramdani',
                'parent_phone' => '081234567104',
                'parent_email' => 'eka.ramdani@example.com',
            ],
            [
                'student_id' => '230005',
                'name' => 'Eka Putra',
                'gender' => 'lk',
                'class_id' => '2301',
                'phone' => '081234567005',
                'email' => 'eka.putra@example.com',
                'parent_name' => 'Fitri Putri',
                'parent_phone' => '081234567105',
                'parent_email' => 'fitri.putri@example.com',
            ],
            [
                'student_id' => '230006',
                'name' => 'Fitri Ayu',
                'gender' => 'pr',
                'class_id' => '2301',
                'phone' => '081234567006',
                'email' => 'fitri.ayu@example.com',
                'parent_name' => 'Gilang Ayu',
                'parent_phone' => '081234567106',
                'parent_email' => 'gilang.ayu@example.com',
            ],
            [
                'student_id' => '230007',
                'name' => 'Gilang Ramadhan',
                'gender' => 'lk',
                'class_id' => '2301',
                'phone' => '081234567007',
                'email' => 'gilang.ramadhan@example.com',
                'parent_name' => 'Hani Ramdhan',
                'parent_phone' => '081234567107',
                'parent_email' => 'hani.ramadhan@example.com',
            ],
            [
                'student_id' => '230008',
                'name' => 'Hani Nuraini',
                'gender' => 'pr',
                'class_id' => '2302',
                'phone' => '081234567008',
                'email' => 'hani.nuraini@example.com',
                'parent_name' => 'Indra Nuraini',
                'parent_phone' => '081234567108',
                'parent_email' => 'indra.nuraini@example.com',
            ],
            [
                'student_id' => '230009',
                'name' => 'Indra Wijaya',
                'gender' => 'lk',
                'class_id' => '2302',
                'phone' => '081234567009',
                'email' => 'indra.wijaya@example.com',
                'parent_name' => 'Joko Wijaya',
                'parent_phone' => '081234567109',
                'parent_email' => 'joko.wijaya@example.com',
            ],
            [
                'student_id' => '230010',
                'name' => 'Joko Susanto',
                'gender' => 'lk',
                'class_id' => '2302',
                'phone' => '081234567010',
                'email' => 'joko.susanto@example.com',
                'parent_name' => 'Kiki Susanto',
                'parent_phone' => '081234567110',
                'parent_email' => 'kiki.susanto@example.com',
            ],
            [
                'student_id' => '220001',
                'name' => 'Kiki Amalia',
                'gender' => 'pr',
                'class_id' => '2201',
                'phone' => '081234567011',
                'email' => 'kiki.amalia@example.com',
                'parent_name' => 'Lina Amalia',
                'parent_phone' => '081234567111',
                'parent_email' => 'lina.amalia@example.com',
            ],
            [
                'student_id' => '220002',
                'name' => 'Lina Marlina',
                'gender' => 'pr',
                'class_id' => '2201',
                'phone' => '081234567012',
                'email' => 'lina.marlina@example.com',
                'parent_name' => 'Mulyadi Marlina',
                'parent_phone' => '081234567112',
                'parent_email' => 'mulyadi.marlina@example.com',
            ],
            [
                'student_id' => '220003',
                'name' => 'Mulyadi Putra',
                'gender' => 'lk',
                'class_id' => '2201',
                'phone' => '081234567013',
                'email' => 'mulyadi.putra@example.com',
                'parent_name' => 'Nina Putra',
                'parent_phone' => '081234567113',
                'parent_email' => 'nina.putra@example.com',
            ],
            [
                'student_id' => '220004',
                'name' => 'Nina Puspita',
                'gender' => 'pr',
                'class_id' => '2201',
                'phone' => '081234567014',
                'email' => 'nina.puspita@example.com',
                'parent_name' => 'Oki Puspita',
                'parent_phone' => '081234567114',
                'parent_email' => 'oki.puspita@example.com',
            ],
            [
                'student_id' => '220005',
                'name' => 'Oki Setiawan',
                'gender' => 'lk',
                'class_id' => '2201',
                'phone' => '081234567015',
                'email' => 'oki.setiawan@example.com',
                'parent_name' => 'Putri Setiawan',
                'parent_phone' => '081234567115',
                'parent_email' => 'putri.setiawan@example.com',
            ],
            [
                'student_id' => '220006',
                'name' => 'Putri Aulia',
                'gender' => 'pr',
                'class_id' => '2202',
                'phone' => '081234567016',
                'email' => 'putri.aulia@example.com',
                'parent_name' => 'Rahmat Aulia',
                'parent_phone' => '081234567116',
                'parent_email' => 'rahmat.aulia@example.com',
            ],
            [
                'student_id' => '220007',
                'name' => 'Rahmat Hidayat',
                'gender' => 'lk',
                'class_id' => '2202',
                'phone' => '081234567017',
                'email' => 'rahmat.hidayat@example.com',
                'parent_name' => 'Sari Hidayat',
                'parent_phone' => '081234567117',
                'parent_email' => 'sari.hidayat@example.com',
            ],
            [
                'student_id' => '220008',
                'name' => 'Sari Dewi',
                'gender' => 'pr',
                'class_id' => '2202',
                'phone' => '081234567018',
                'email' => 'sari.dewi@example.com',
                'parent_name' => 'Taufik Dewi',
                'parent_phone' => '081234567118',
                'parent_email' => 'taufik.dewi@example.com',
            ],
            [
                'student_id' => '220009',
                'name' => 'Taufik Ramdani',
                'gender' => 'lk',
                'class_id' => '2202',
                'phone' => '081234567019',
                'email' => 'taufik.ramdani@example.com',
                'parent_name' => 'Usman Ramdani',
                'parent_phone' => '081234567119',
                'parent_email' => 'usman.ramdani@example.com',
            ],
            [
                'student_id' => '220010',
                'name' => 'Usman Setiawan',
                'gender' => 'lk',
                'class_id' => '2202',
                'phone' => '081234567020',
                'email' => 'usman.setiawan@example.com',
                'parent_name' => 'Vina Setiawan',
                'parent_phone' => '081234567120',
                'parent_email' => 'vina.setiawan@example.com',
            ],
            [
                'student_id' => '210001',
                'name' => 'Vina Amalia',
                'gender' => 'pr',
                'class_id' => '2101',
                'phone' => '081234567021',
                'email' => 'vina.amalia@example.com',
                'parent_name' => 'Wawan Amalia',
                'parent_phone' => '081234567121',
                'parent_email' => 'wawan.amalia@example.com',
            ],
            [
                'student_id' => '210002',
                'name' => 'Wawan Pratama',
                'gender' => 'lk',
                'class_id' => '2101',
                'phone' => '081234567022',
                'email' => 'wawan.pratama@example.com',
                'parent_name' => 'Yuli Pratama',
                'parent_phone' => '081234567122',
                'parent_email' => 'yuli.pratama@example.com',
            ],
            [
                'student_id' => '210003',
                'name' => 'Yuli Rahmawati',
                'gender' => 'pr',
                'class_id' => '2101',
                'phone' => '081234567023',
                'email' => 'yuli.rahmawati@example.com',
                'parent_name' => 'Zaki Rahmawati',
                'parent_phone' => '081234567123',
                'parent_email' => 'zaki.rahmawati@example.com',
            ],
            [
                'student_id' => '210004',
                'name' => 'Zaki Pratama',
                'gender' => 'lk',
                'class_id' => '2101',
                'phone' => '081234567024',
                'email' => 'zaki.pratama@example.com',
                'parent_name' => 'Alya Pratama',
                'parent_phone' => '081234567124',
                'parent_email' => 'alya.pratama@example.com',
            ],
            [
                'student_id' => '210005',
                'name' => 'Adi Susanto',
                'gender' => 'lk',
                'class_id' => '2101',
                'phone' => '081234567025',
                'email' => 'adi.susanto@example.com',
                'parent_name' => 'Budi Susanto',
                'parent_phone' => '081234567125',
                'parent_email' => 'budi.susanto@example.com',
            ],
            [
                'student_id' => '210006',
                'name' => 'Budi Rahmat',
                'gender' => 'lk',
                'class_id' => '2102',
                'phone' => '081234567026',
                'email' => 'budi.rahmat@example.com',
                'parent_name' => 'Citra Rahmat',
                'parent_phone' => '081234567126',
                'parent_email' => 'citra.rahmat@example.com',
            ],
            [
                'student_id' => '210007',
                'name' => 'Citra Amelia',
                'gender' => 'pr',
                'class_id' => '2102',
                'phone' => '081234567027',
                'email' => 'citra.amelia@example.com',
                'parent_name' => 'Dedi Amelia',
                'parent_phone' => '081234567127',
                'parent_email' => 'dedi.amelia@example.com',
            ],
            [
                'student_id' => '210008',
                'name' => 'Dedi Gunawan',
                'gender' => 'lk',
                'class_id' => '2102',
                'phone' => '081234567028',
                'email' => 'dedi.gunawan@example.com',
                'parent_name' => 'Eka Gunawan',
                'parent_phone' => '081234567128',
                'parent_email' => 'eka.gunawan@example.com',
            ],
            [
                'student_id' => '210009',
                'name' => 'Eka Pratama',
                'gender' => 'lk',
                'class_id' => '2102',
                'phone' => '081234567029',
                'email' => 'eka.pratama@example.com',
                'parent_name' => 'Fitri Pratama',
                'parent_phone' => '081234567129',
                'parent_email' => 'fitri.pratama@example.com',
            ],
            [
                'student_id' => '210010',
                'name' => 'Fitri Dewi',
                'gender' => 'pr',
                'class_id' => '2102',
                'phone' => '081234567030',
                'email' => 'fitri.dewi@example.com',
                'parent_name' => 'Gilang Dewi',
                'parent_phone' => '081234567130',
                'parent_email' => 'gilang.dewi@example.com',
            ],
        ]);
    }
}
