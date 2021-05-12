<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('document_types')->delete();
        
        \DB::table('document_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'value' => 'normal_view',
                'name' => 'Normal View',
                'description' => NULL,
                'created_at' => '2021-02-02 21:12:16',
                'updated_at' => '2021-02-02 21:12:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'value' => 'status_view',
                'name' => 'Status View',
                'description' => NULL,
                'created_at' => '2021-02-02 21:12:36',
                'updated_at' => '2021-02-02 21:12:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'value' => 'inheritance_view',
                'name' => 'Inheritance View',
                'description' => NULL,
                'created_at' => '2021-02-02 21:12:46',
                'updated_at' => '2021-02-02 21:12:46',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'value' => 'public_view',
                'name' => 'Public view',
                'description' => NULL,
                'created_at' => '2021-05-04 11:50:40',
                'updated_at' => '2021-05-04 11:51:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}