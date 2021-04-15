<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('investors')->insert([
            'user_id'       =>      '5',
            'created_by'    =>      '1',
            'updated_by'    =>      '1'
        ]);
        DB::table('investors')->insert([
            'user_id'       =>      '6',
            'created_by'    =>      '1',
            'updated_by'    =>      '1'
        ]);
    }
}
