<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ResidentialAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residential_addresses')->insert([
            'user_id'       =>      '2',
            'address_id'    =>      '8',
            'is_primary'    =>      '1',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('residential_addresses')->insert([
            'user_id'       =>      '2',
            'address_id'    =>      '9',
            'is_primary'    =>      '0',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('residential_addresses')->insert([
            'user_id'       =>      '3',
            'address_id'    =>      '10',
            'is_primary'    =>      '1',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('residential_addresses')->insert([
            'user_id'       =>      '4',
            'address_id'    =>      '11',
            'is_primary'    =>      '1',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('residential_addresses')->insert([
            'user_id'       =>      '5',
            'address_id'    =>      '12',
            'is_primary'    =>      '1',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('residential_addresses')->insert([
            'user_id'       =>      '6',
            'address_id'    =>      '13',
            'is_primary'    =>      '1',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('residential_addresses')->insert([
            'user_id'       =>      '5',
            'address_id'    =>      '14',
            'is_primary'    =>      '0',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('residential_addresses')->insert([
            'user_id'       =>      '6',
            'address_id'    =>      '15',
            'is_primary'    =>      '0',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);
    }
}
