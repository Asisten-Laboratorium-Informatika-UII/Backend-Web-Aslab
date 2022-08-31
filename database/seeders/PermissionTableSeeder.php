<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.read']);
        Permission::create(['name' => 'user.update']);
        Permission::create(['name' => 'user.delete']);

        Permission::create(['name' => 'post.create']);
        Permission::create(['name' => 'post.read']);
        Permission::create(['name' => 'post.update']);
        Permission::create(['name' => 'post.delete']);

        Permission::create(['name' => 'project.create']);
        Permission::create(['name' => 'project.read']);
        Permission::create(['name' => 'project.update']);
        Permission::create(['name' => 'project.delete']);
    }
}
