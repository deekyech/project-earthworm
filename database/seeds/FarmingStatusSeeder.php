<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FarmingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('farming_status')->insert(["status_name" => "Preparation"]);
        DB::table('farming_status')->insert(["status_name" => "Sowing"]);
        DB::table('farming_status')->insert(["status_name" => "Fertilization"]);
        DB::table('farming_status')->insert(["status_name" => "Irrigation"]);
        DB::table('farming_status')->insert(["status_name" => "Harvesting"]);
        DB::table('farming_status')->insert(["status_name" => "Storage"]);
    }
}
