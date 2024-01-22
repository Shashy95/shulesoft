<?php

namespace Database\Seeders;

use App\Models\User_Roles;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //
        $data = [
            #1. manage-dashboard permissions
            ['user_id' => 1,'role_id'=>1],


       ];

         foreach ($data as $row) {
            User_Roles::firstOrCreate($row);
         }


    }
}
