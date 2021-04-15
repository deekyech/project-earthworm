<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FarmingAddressSeeder extends Seeder
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
        DB::table('farming_addresses')->insert([
            'farmer_id'     =>      '1',
            'address_id'    =>      '1',
            'land_area'     =>      $faker->numberBetween(1000, 10000),
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('farming_addresses')->insert([
            'farmer_id'     =>      '1',
            'address_id'    =>      '2',
            'land_area'     =>      $faker->numberBetween(1000, 10000),
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('farming_addresses')->insert([
            'farmer_id'     =>      '2',
            'address_id'    =>      '3',
            'land_area'     =>      $faker->numberBetween(1000, 10000),
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('farming_addresses')->insert([
            'farmer_id'     =>      '2',
            'address_id'    =>      '4',
            'land_area'     =>      $faker->numberBetween(1000, 10000),
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('farming_addresses')->insert([
            'farmer_id'     =>      '3',
            'address_id'    =>      '5',
            'land_area'     =>      $faker->numberBetween(1000, 10000),
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('farming_addresses')->insert([
            'farmer_id'     =>      '3',
            'address_id'    =>      '6',
            'land_area'     =>      $faker->numberBetween(1000, 10000),
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('farming_addresses')->insert([
            'farmer_id'     =>      '1',
            'address_id'    =>      '7',
            'land_area'     =>      $faker->numberBetween(1000, 10000),
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);
    }
}
