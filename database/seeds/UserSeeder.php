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
        DB::table('users')->insert([
            'name'      =>      'Dhiresh Hirani',
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
            'email'     =>      'pranaypatro@gmail.com',
            'phone_no'  =>      '7666375563',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('patro12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Arjun Parmani',
            'email'     =>      'arjunparmani@gmail.com',
            'phone_no'  =>      '9930970203',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('arjun12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Kishore Hirani',
            'email'     =>      'kishore.hirani@gmail.com',
            'phone_no'  =>      '8980802525',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('kih12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Dharmik Doshi',
            'email'     =>      'ddsi@gmail.com',
            'phone_no'  =>      '9769722566',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('ddsi12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
        DB::table('users')->insert([
            'name'      =>      'Parth Nagarkar',
            'email'     =>      'parthnagarkar@gmail.com',
            'phone_no'  =>      '9930426913',
            'email_verified_at'     =>      Carbon::now(),
            'phone_no_verified_at'  =>      Carbon::now(),
            'password'  =>      Hash::make('parth12345'),
            'dob'       =>      Carbon::create('1999', '06', '01')->toDateTimeString(),
            'gender'    =>      '1',
            'role'      =>      '2',
            'created_by'=>      '1',
            'updated_by'=>      '1'
        ]);
    }
}

