<?php
namespace Database\Seeders;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use DB;

class RolePermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        //$role = Role::create(['slug' => 'super-admin', 'name' => 'Super Admin']);

        $role = Role::find(1);
       $permission =  Permission::all();
       foreach($permission as $row){
           $data = array();
        array_push($data,$row->id);
        $role->givePermissionTo($data);
       }
 

       $data1 = [
        #1. manage-dashboard permissions
        ['role_id' => 2,'permission_id'=>1],
        ['role_id' => 2,'permission_id'=>4],

   ];

     foreach ($data1 as $row1) {
        DB::table('roles_permissions')->insert($row1);
     }
        
    }
}
