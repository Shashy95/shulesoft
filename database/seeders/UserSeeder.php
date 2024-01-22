<?php

namespace Database\Seeders;
use App\Models\System;
use App\Models\User ;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\User::class, 100)->create();
        $data = [
            [
            'name' => 'superadmin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone' => '0713000000',
            'remember_token' => Str::random(10),
            'role' => 'Admin',
            'status' => 'active'
            ]
        ];
foreach ($data as $row) {
    User::updateOrCreate($row);
}

$data1 = [
    [
    'name' => 'TEST SYSTEM',
    'picture' => '876060323033135.PNG',
    'address' => 'DAR ES SALAAM',
    'phone' => '0713000000',
    'email' => 'admin@gmail.com',
    'tin' => '152132432',
    'vat' => '-',
    'added_by' => '1'
    ]
];
foreach ($data1 as $row1) {
System::updateOrCreate($row1);
}

    }


}
