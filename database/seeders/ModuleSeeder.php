<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\SystemModule;

class ModuleSeeder extends Seeder
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
            ['slug' => 'manage-dashboard','name'=>'Dashboard'],
            ['slug' => 'manage-access-control','name'=>'Access Control'], 
            ['slug' => 'manage-orders','name'=>'Manage Orders'], 
            ['slug' => 'manage-product','name'=>'Manage Products'], 
            
        ];
foreach ($data as $row) {
    SystemModule::updateOrCreate($row);
}
    }
}
