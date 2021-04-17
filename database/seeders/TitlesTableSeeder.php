<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('titles')->delete();
        
        \DB::table('titles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Professor',
                'name_kh' => 'សាស្ត្រាចារ្យ',
                'abr' => 'Prof.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:46:46',
                'updated_at' => '2019-05-30 01:46:46',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Professor Associate',
                'name_kh' => 'សាស្ត្រាចារ្យរង',
                'abr' => 'Prof. Asso',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:47:08',
                'updated_at' => '2019-05-30 01:47:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Professor Assistant',
                'name_kh' => 'សាស្ត្រាចារ្យជំនួយ',
                'abr' => 'Prof. Assi',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:47:25',
                'updated_at' => '2019-05-30 01:47:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Doctor',
                'name_kh' => 'វេជ្ជបណ្ឌិត',
                'abr' => 'Dr.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:47:48',
                'updated_at' => '2019-05-30 01:47:48',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Pharmacian',
                'name_kh' => 'ឱសថការី',
                'abr' => 'Ph.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:48:19',
                'updated_at' => '2019-05-30 01:48:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Nurse',
                'name_kh' => 'គិលានុបដ្ឋាក',
                'abr' => 'Inf.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:48:41',
                'updated_at' => '2019-05-30 01:48:41',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mister',
                'name_kh' => 'លោក',
                'abr' => 'Mr.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:49:07',
                'updated_at' => '2019-05-30 01:49:07',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Madam',
                'name_kh' => 'លោកស្រី',
                'abr' => 'Mrs.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:50:33',
                'updated_at' => '2019-05-30 01:50:33',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Miss',
                'name_kh' => 'កញ្ញា',
                'abr' => 'Ms.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-05-30 01:50:53',
                'updated_at' => '2019-05-30 01:50:53',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'H.E. Professor',
                'name_kh' => 'ឯកឧត្តមសាស្ត្រាចារ្យ',
                'abr' => 'H.E. Prof.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2019-06-12 16:41:17',
                'updated_at' => '2019-06-12 16:41:17',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Professor',
                'name_kh' => 'លោកសាស្ត្រាចារ្យ',
                'abr' => 'Pro.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 18:58:21',
                'updated_at' => '2020-06-17 18:58:21',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Professor',
                'name_kh' => 'លោកស្រីសាស្ត្រាចារ្យ',
                'abr' => 'Pro.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 18:59:33',
                'updated_at' => '2020-06-17 18:59:33',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Doctor',
                'name_kh' => 'លោកវេជ្ជបណ្ឌិត',
                'abr' => 'Dr.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:00:59',
                'updated_at' => '2020-06-17 19:00:59',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Doctor',
                'name_kh' => 'លោកស្រីវេជជ្ជបណ្ឌិត',
                'abr' => 'Dr.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:01:31',
                'updated_at' => '2020-06-17 19:01:31',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Doctor',
                'name_kh' => 'កញ្ញា វេជ្ជបណ្ឌិត',
                'abr' => 'Dr.',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:01:54',
                'updated_at' => '2020-06-17 19:01:54',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Doctor Specialist',
                'name_kh' => 'លោកវេជ្ជបណ្ឌិតឯកទេស',
                'abr' => NULL,
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:03:51',
                'updated_at' => '2020-06-17 19:03:51',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Doctor Specialist',
                'name_kh' => 'លោកស្រីវេជ្ជបណ្ឌិតឯកទេស',
                'abr' => NULL,
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:04:27',
                'updated_at' => '2020-06-17 19:04:27',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Doctor Specialist',
                'name_kh' => 'កញ្ញាវេជ្ជបណ្ឌិតឯកទេស',
                'abr' => NULL,
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:05:15',
                'updated_at' => '2020-06-17 19:05:15',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Doctor Specialist',
                'name_kh' => 'លោកជំទាវវេជ្ជបណ្ឌិតឯកទេស',
                'abr' => NULL,
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:05:36',
                'updated_at' => '2020-06-17 19:05:36',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'H.E. Doctor Specialist',
                'name_kh' => 'ឯកឧត្តមវេជ្ជបណ្ឌិតឯកទេស',
                'abr' => NULL,
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:05:58',
                'updated_at' => '2020-06-17 19:16:54',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Pharmacist',
                'name_kh' => 'លោកឱសថការី',
                'abr' => 'PH',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:11:39',
                'updated_at' => '2020-06-17 19:11:39',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Pharmacist',
                'name_kh' => 'លោកស្រីឱសថការី',
                'abr' => 'PH',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:12:24',
                'updated_at' => '2020-06-17 19:12:24',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Pharmacist',
                'name_kh' => 'កញ្ញាឱសថការី',
                'abr' => 'PH',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:12:49',
                'updated_at' => '2020-06-17 19:12:49',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Doctor of Pharmacy',
                'name_kh' => 'លោកឱសថបណ្ឌិត',
                'abr' => 'PharmD',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:16:16',
                'updated_at' => '2020-06-17 19:16:16',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Doctor of Pharmacy',
                'name_kh' => 'លោកស្រីឱសថបណ្ឌិត',
                'abr' => 'PharmD',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:18:04',
                'updated_at' => '2020-06-17 19:18:04',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Doctor of Pharmacy',
                'name_kh' => 'កញ្ញាឱសថបណ្ឌិត',
                'abr' => 'PharmD',
                'abr_kh' => NULL,
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2020-06-17 19:18:28',
                'updated_at' => '2020-06-17 19:18:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}