<?php

namespace Database\Seeders;

use App\Models\Payment_methodes;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
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
            ['name' => 'Mobile Money'],
            ['name' => 'Cash'],
            ['name' => 'Bank'],
            ['name' => 'Cheque'],
            ['name' => 'PayPal'],

       ];

         foreach ($data as $row) {
            Payment_methodes::firstOrCreate($row);
         }


    }
}
