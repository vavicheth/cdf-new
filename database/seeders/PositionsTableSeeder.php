<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('positions')->delete();
        
        \DB::table('positions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Director General',
                'name_kh' => 'អគ្គនាយក',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:52:15',
                'updated_at' => '2019-05-30 01:52:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Deputy Director General',
                'name_kh' => 'អគ្គនាយករង',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:52:36',
                'updated_at' => '2019-05-30 01:52:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Chief',
                'name_kh' => 'ប្រធាន',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:52:57',
                'updated_at' => '2019-05-30 01:52:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Deputy Chief',
                'name_kh' => 'អនុប្រធាន',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:53:16',
                'updated_at' => '2019-05-30 01:53:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Chief INF',
                'name_kh' => 'អគ្គគិលានុបដ្ឋាយិកា',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:36:54',
                'updated_at' => '2020-06-16 13:51:55',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Assistance Chief INF',
                'name_kh' => 'ជំនួយការអគ្គគិលានុបដ្ឋាយិកា',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:37:26',
                'updated_at' => '2020-06-16 13:52:34',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Chief Salle',
                'name_kh' => 'នាយសាល',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:38:57',
                'updated_at' => '2019-06-03 18:38:59',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Assistant Chief Sale',
                'name_kh' => 'ជំនួយការនាយសាល',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:39:20',
                'updated_at' => '2020-06-16 13:55:18',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Doctor',
                'name_kh' => 'វេជ្ជបណ្ឌិត',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:43:21',
                'updated_at' => '2019-06-03 18:43:21',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Nurse',
                'name_kh' => 'គិលានុបដ្ឋាក-យិកា',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:43:59',
                'updated_at' => '2019-06-03 18:44:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Midwife',
                'name_kh' => 'ឆ្មប',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:44:12',
                'updated_at' => '2019-06-03 18:44:12',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Staff',
                'name_kh' => 'បុគ្គលិក',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-03 18:44:24',
                'updated_at' => '2019-06-03 18:44:25',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Consultant',
                'name_kh' => 'ទីប្រឹក្សាបច្ចេកទេស',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-21 12:09:25',
                'updated_at' => '2019-06-21 12:09:25',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Assistant Chief',
                'name_kh' => 'ជំនួយការប្រធាន',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-21 12:10:12',
                'updated_at' => '2019-06-21 12:12:12',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Assistant Chief Salle',
                'name_kh' => 'ជំនួយការនាយសាល',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-21 12:14:55',
                'updated_at' => '2019-06-21 12:14:55',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Chief of security guard',
                'name_kh' => 'ប្រធានសន្តិសុខ',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-21 19:01:03',
                'updated_at' => '2019-06-21 19:01:03',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Officer',
                'name_kh' => 'មន្ត្រី',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-16 13:56:51',
                'updated_at' => '2020-06-16 13:56:51',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Doctor Specialist',
                'name_kh' => 'វេជ្ជបណ្ឌិតឯកទេស',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-16 13:58:39',
                'updated_at' => '2020-06-16 13:58:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}