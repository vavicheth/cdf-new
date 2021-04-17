<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Direction',
                'name_kh' => 'ថ្នាក់ដឹកនាំ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Administrative Office',
                'name_kh' => 'ការិយាល័យរដ្ឋបាល',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Technical Office',
                'name_kh' => 'ការិយាល័យបច្ចេកទេស',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Accounting',
                'name_kh' => 'ការិយាល័យគណនេយ្យ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'SIM',
                'name_kh' => 'ប្រព័ន្ធព័ត៌មានសុខាភិបាល',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Operating Theater',
                'name_kh' => 'ផ្នែកសល្យាគារ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Emergency Unit',
                'name_kh' => 'ផ្នែកសង្គ្រោះបន្ទាន់',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Recovery Unit',
                'name_kh' => 'ផ្នែកសណ្តំ-ភ្ញាក់ពីសណ្តំ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'ICU A',
                'name_kh' => 'ផ្នែកប្រពោធនកម្ម"ក"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Surgery A',
                'name_kh' => 'ផ្នែកសល្យសាស្រ្ត"ក"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Surgery A2',
                'name_kh' => 'ផ្នែកសល្យសាស្រ្ត"ក២"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Surgery B',
                'name_kh' => 'ផ្នែកសល្យសាស្រ្ត"ខ"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Medicine B',
                'name_kh' => 'ផ្នែកជំងឺទូទៅ"ខ"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Medicine A4',
                'name_kh' => 'ផ្នែកជំងឺទូទៅ"ក៤"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Medicine A5',
                'name_kh' => 'ផ្នែកជំងឺទូទៅ"ក៥"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Medicine A',
                'name_kh' => 'ផ្នែកជំងឺទូទៅ"ក"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Maternity',
                'name_kh' => 'ផ្នែកសម្ភព',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Gynecology',
                'name_kh' => 'ផ្នែករោគស្រ្តី',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Laboratory',
                'name_kh' => 'ផ្នែកមន្ទីរពិសោធន៍',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Pharmacy',
                'name_kh' => 'ផ្នែកឱសថស្ថាន',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Imagery Medical',
                'name_kh' => 'ផ្នែករូបភាពវេជ្ជសាស្រ្ត',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Consultation',
                'name_kh' => 'អ៊ុយនីតេពិគ្រោះជំងឺក្រៅ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-06-16 20:34:57',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Neurosurgery',
                'name_kh' => 'អ៊ុយនីតេវះកាត់ប្រព័ន្ធប្រសាទ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-06-16 20:38:54',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'NeuroICU',
                'name_kh' => 'ផ្នែកប្រពោធនកម្មប្រព័ន្ធប្រសាទ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Onco-Hematology',
                'name_kh' => 'ផ្នែកជំងឺមហារីក និងជំងឺឈាម',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Medical Electronic',
                'name_kh' => 'ផ្នែកបច្ចេកទេសអេឡិចត្រូនិច',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Hemodialysis',
                'name_kh' => 'មជ្ឈមណ្ឌលលាងឈាម',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Neo-natology',
                'name_kh' => 'អ៊ុយនីតេប្រពោធនកម្មទារក',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'ICU B',
                'name_kh' => 'អ៊ុយនីតេប្រពោធនកម្ម"ខ"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Hepato Gastro Enterology',
                'name_kh' => 'អ៊ុយនីតេថ្លើម ក្រពះ ពោះវៀន',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Neurology',
                'name_kh' => 'អ៊ុយនីតេប្រសាទសាស្រ្ត',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Ophthalmology',
                'name_kh' => 'អ៊ុយនីតេចក្ខុរោគ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-06-16 20:36:31',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'ENT',
                'name_kh' => 'អ៊ុយនីតេត្រចៀក ច្រមុះ បំពង់ ក',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Kane Therapy',
                'name_kh' => 'បន្ទប់ព្យាបាលដោយចលនា',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-06-16 20:38:26',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Cardio A',
                'name_kh' => 'អ៊ុយនីតេជំងឺបេះដូង"ក"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Cardio B',
                'name_kh' => 'អ៊ុយនីតេជំងឺបេះដូង"ខ"',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Cardio Consultation',
                'name_kh' => 'អ៊ុយនីតេពិគ្រោះជំងឺបេះដូង',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Cardio Operating Theater',
                'name_kh' => 'អ៊ុយនីតេសល្យាគារបេះដូង',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Cardio ICU',
                'name_kh' => 'អ៊ុយនីតេប្រពោធនកម្មបេះដូង',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Cardio Angiography',
                'name_kh' => 'អ៊ុយនីតេឆ្លុះសរសៃឈាមបេះដូង',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'PVE',
                'name_kh' => 'អគារបេះដូងកុមារ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Nurse Care',
                'name_kh' => 'អគ្គគិលានុបដ្ឋាយិកា',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'General Working',
                'name_kh' => 'អគ្គានុរក្ស',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'SAMU',
                'name_kh' => 'សាមុយ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Deputy Director General',
                'name_kh' => 'អគ្គនាយករងមន្ទីរពេទ្យ',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Deputy Director General',
                'name_kh' => 'អគ្គនាយករងមន្ទីរពេទ្យ',
                'description' => NULL,
                'created_at' => '2019-06-10 19:39:26',
                'updated_at' => '2019-06-14 22:41:03',
                'deleted_at' => '2019-06-14 22:41:03',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'General Working',
                'name_kh' => 'ក្រុមការងារទូទៅ',
                'description' => NULL,
                'created_at' => '2019-06-14 22:41:47',
                'updated_at' => '2019-06-14 22:41:47',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Department Cardiology',
                'name_kh' => 'មជ្ឈមណ្ឌលព្យាបាលជំងឺបេះដូង',
                'description' => NULL,
                'created_at' => '2019-06-21 19:18:51',
                'updated_at' => '2019-06-21 19:18:51',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Information Technology',
                'name_kh' => 'ក្រុមការងារព័ត៌មានវិទ្យា',
                'description' => NULL,
                'created_at' => '2019-06-27 23:39:42',
                'updated_at' => '2019-06-27 23:39:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}