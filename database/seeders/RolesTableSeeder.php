<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Admin',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Direction',
                'created_at' => NULL,
                'updated_at' => '2021-02-04 12:30:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Modarator',
                'created_at' => '2021-02-04 12:32:34',
                'updated_at' => '2021-02-04 12:32:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Creator',
                'created_at' => '2021-02-04 12:34:51',
                'updated_at' => '2021-02-04 12:34:51',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Document Print',
                'created_at' => '2021-02-04 12:36:56',
                'updated_at' => '2021-02-04 12:36:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'User',
                'created_at' => '2021-02-04 12:37:49',
                'updated_at' => '2021-02-04 12:37:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}