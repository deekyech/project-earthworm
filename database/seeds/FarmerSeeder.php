<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmers')->insert([
            'user_id'       =>      '2',
            'experience'    =>      '5',
            'created_by'    =>      '1',
            'updated_by'    =>      '1'
        ]);
        DB::table('farmers')->insert([
            'user_id'       =>      '3',
            'experience'    =>      '3',
            'created_by'    =>      '1',
            'updated_by'    =>      '1'
        ]);
        DB::table('farmers')->insert([
            'user_id'       =>      '4',
            'experience'    =>      '8',
            'created_by'    =>      '1',
            'updated_by'    =>      '1'
        ]);
    }
}
