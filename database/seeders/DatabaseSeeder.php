<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employees;
use App\Models\LeavesType;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
     {
        $employees = Employees::create([
            'employee_name' =>"Ram",
            'employee_id' =>"123",
            'email' =>"Ramakumar@gmail.com",
             'employee_role' =>"HR",
            'address' =>"Benagaluru",
            'country' =>"indain",
            'state' =>"Karanatak",
            'designation' =>"Admin",
            'department' =>"HR",
            'mobile_number' =>"7899121749",

             'date_of_birth' =>"2000-07-07",
              'date_of_Joining' =>"2024-07-11",
            'profile_picture' =>"fdhhfg//fgh",
            'gender' =>"Male",
            'language' =>"English",
                'login' =>"1",
              'notification' =>"1",
              'probation_end_date' =>"2024-07-07",
               'notice_period_start' =>"2024-07-07",
               'notice_period_end' =>"2024-07-07",
            'employment_type' =>"Full-time",
            'marital_status' =>"married",
              'business_address' =>"karantak",
        ]);




        User::create([
          'employee_id' => $employees->id,
            'name' => 'admin',
            'email' => 'a@b.c',
            'role' =>'*',
            'employee_id'=>'1',
            'email_verified_at' => now(),
            'password' => '12345678',
        ]);

        $data = [
            ['leaves' => 'casual(7)', ],
            ['leaves' => 'sick(5)'],
            ['leaves' => 'LOP(20)'],
        ];

        LeavesType::insert($data);
        $this->call([
            CountriesTableSeeder::class,

            ]);
    }
}
