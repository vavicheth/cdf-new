<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //php artisan iseed staff,titles,positions,document_types,app_seetings

    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            AssetStatusTableSeeder::class,
        ]);
        $this->call(PermissionsTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(TitlesTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(DocumentTypesTableSeeder::class);
        $this->call(AppSeetingsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
    }
}
