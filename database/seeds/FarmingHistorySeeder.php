<?php

use App\CropType;
use App\Farmer;
use App\FarmingAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class FarmingHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 20; $i++) {
            $start_date = $faker->dateTimeThisDecade();
            $farmer_id = Farmer::pluck('id')->random();
            DB::table('farming_histories')->insert([
                'farmer_id'             =>      $farmer_id,
                'start_date'            =>      $start_date,
                'end_date'              =>      $faker->dateTimeInInterval($start_date, '+2 years'),
                'farming_address_id'    =>      FarmingAddress::inRandomOrder()->select('id')->where('farmer_id', $farmer_id)->first()->id,
                'crop_type_id'          =>      CropType::pluck('id')->random(),
                'quantity_in_kg'        =>      $faker->numberBetween(1000, 5000),
                'created_by'            =>      '1',
                'updated_by'            =>      '1',
                'created_at'            =>      Carbon::now(),
                'updated_at'            =>      Carbon::now()
            ]);
        }

    }
}
