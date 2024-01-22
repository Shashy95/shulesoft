<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Permission;
use App\User;

class RoleSeeder extends Seeder
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
            ['slug' => 'superAdmin','added_by'=>'1'],
            ['slug' => 'Order','added_by'=>'1'],
            
            
        ];
foreach ($data as $row) {
    Role::updateOrCreate($row);
}



    }
}
