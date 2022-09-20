<?php

namespace Database\Seeders\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            'order_create',
            'order_read',
            'order_update',
            'order_delete',
            'assign_create',
            'assign_read',
            'assign_update',
            'assign_delete',
            'comment_create',
            'comment_read',
            'comment_update',
            'comment_delete',
        ];

        foreach ($permission as $key => $value) {
            Permission::create(['name' => $value]);
        }
    }
}
