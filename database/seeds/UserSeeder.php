<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            'name'      =>      'Dhiresh Hirani',
            'username'  =>      'dhiresh_hirani',
            'email'     =>      'dhireshk.hirani@gmail.com',
            'phone_no'  =>      '9867371111',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('dkh12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '1',
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Pranay Patro',
            'username'  =>      'pranay_patro',
            'email'     =>      'pranaypatro@gmail.com',
            'phone_no'  =>      '7666375563',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('patro12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'bio'       =>      $faker->paragraph(),
            'average_rating'        =>      $faker->randomFloat(2, 1, 5),
            'no_of_ratings'         =>      $faker->numberBetween(20, 200),
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Arjun Parmani',
            'username'  =>      'arjun_parmani',
            'email'     =>      'arjunparmani@gmail.com',
            'phone_no'  =>      '9930970203',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('arjun12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'bio'       =>      $faker->paragraph(),
            'average_rating'        =>      $faker->randomFloat(2, 1, 5),
            'no_of_ratings'         =>      $faker->numberBetween(20, 200),
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Kishore Hirani',
            'username'  =>      'kishore_hirani',
            'email'     =>      'kishore.hirani@gmail.com',
            'phone_no'  =>      '8980802525',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('kih12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'bio'       =>      $faker->paragraph(),
            'average_rating'        =>      $faker->randomFloat(2, 1, 5),
            'no_of_ratings'         =>      $faker->numberBetween(20, 200),
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Dharmik Doshi',
            'username'  =>      'dharmik_doshi',
            'email'     =>      'ddsi@gmail.com',
            'phone_no'  =>      '9769722566',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('ddsi12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '3',
            'bio'       =>      $faker->paragraph(),
            'average_rating'        =>      $faker->randomFloat(2, 1, 5),
            'no_of_ratings'         =>      $faker->numberBetween(20, 200),
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Parth Nagarkar',
            'username'  =>      'parth_nagarkar',
            'email'     =>      'parthnagarkar@gmail.com',
            'phone_no'  =>      '9930426913',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('parth12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '3',
            'bio'       =>      $faker->paragraph(),
            'average_rating'        =>      $faker->randomFloat(2, 1, 5),
            'no_of_ratings'         =>      $faker->numberBetween(20, 200),
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
    }
}

/*
User Roles:
1: Super admin
2: Farmer
3: Investor
*/
