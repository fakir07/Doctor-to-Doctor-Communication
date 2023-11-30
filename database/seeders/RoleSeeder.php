<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admin = Role::create(['name' => 'Admin']);
        $Medcine = Role::create(['name' => 'Medcine']);

        $Admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-role',
            'edit-role',
            'delete-role',
            'create-medcine',
            'edit-medcine',
            'delete-medcine'
        ]);

        $Medcine->givePermissionTo([
            'create-avis',
            'edit-avis',
            'delete-avis'
        ]);
    }
}
