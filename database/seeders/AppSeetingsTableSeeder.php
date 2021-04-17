<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppSeetingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_seetings')->delete();
        
        \DB::table('app_seetings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'app_name',
                'value' => 'CDF',
                'description' => NULL,
                'created_at' => '2021-02-02 08:34:27',
                'updated_at' => '2021-02-02 17:19:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'app_full_name',
                'value' => 'Calmette Document Flow',
                'description' => NULL,
                'created_at' => '2021-02-02 08:34:40',
                'updated_at' => '2021-02-02 08:34:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'logo',
                'value' => 'Logo',
                'description' => NULL,
                'created_at' => '2021-02-02 08:38:00',
                'updated_at' => '2021-02-02 08:38:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'edit_hour',
                'value' => '24',
            'description' => 'Document can edit in duration (hour).',
                'created_at' => '2021-02-02 08:57:28',
                'updated_at' => '2021-02-02 08:57:28',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'dateline_warning',
                'value' => '24',
                'description' => 'Dateline warning with hour',
                'created_at' => '2021-02-04 14:26:07',
                'updated_at' => '2021-02-04 14:26:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}