<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(PermisionSeeder::class);
        $this->call(RolePermisionSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(MethodSeeder::class);
        
    }
}
