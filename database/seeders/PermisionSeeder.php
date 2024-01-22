<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
       
       
     
         
        $data = [
            #1. manage-dashboard permissions
            ['slug' => 'view-dashboard','sys_module_id'=>1],
            ['slug' => 'view-roles','sys_module_id'=>2],
            ['slug' => 'view-permission','sys_module_id'=>2],
           
            ['slug' => 'view-orders','sys_module_id'=>3],
           
            ['slug' => 'view-product','sys_module_id'=>4],

       ];

         foreach ($data as $row) {
            Permission::firstOrCreate($row);
         }
    }
}
