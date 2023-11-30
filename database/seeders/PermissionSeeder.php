<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create-user',
            'edit-user',
            'delete-user',
            'create-role',
            'edit-role',
            'delete-role',
            'create-medcine',
            'edit-medcine',
            'delete-medcine'
         ];

          // Looping and Inserting Array's Permissions into Permission Table
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }

    }
}
