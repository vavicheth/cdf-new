<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kIY77JkRwyGnL7R9/4AlA.j4UXnroyUtg8Y9M2EJ8zGe23j98kInO',
                'remember_token' => NULL,
                'two_factor' => 0,
                'two_factor_code' => '',
                'two_factor_expires_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'staff_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'VA VICHETH',
                'email' => 'vicheth_it@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nkvC8S0C887giooD3QvEVuGdygMXfECJQA/EV0MChlRQ8hcEHVKvy',
                'remember_token' => NULL,
                'two_factor' => 0,
                'two_factor_code' => NULL,
                'two_factor_expires_at' => NULL,
                'created_at' => '2021-02-04 12:47:03',
                'updated_at' => '2021-02-04 12:47:03',
                'deleted_at' => NULL,
                'staff_id' => 6,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'UCH BUNMY',
                'email' => 'bunmypp@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AkL8uYqB.yjaqCDKaPMvEOx5uXYsztjgOt8XbOFlvAIe/oYEFE7A2',
                'remember_token' => NULL,
                'two_factor' => 0,
                'two_factor_code' => NULL,
                'two_factor_expires_at' => NULL,
                'created_at' => '2021-02-04 16:58:24',
                'updated_at' => '2021-02-04 17:01:16',
                'deleted_at' => NULL,
                'staff_id' => 7,
            ),
        ));
        
        
    }
}