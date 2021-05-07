<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('crops')->insert([
            'crop_name'     =>      'Rice',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Wheat',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Millet',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Pulses',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Cotton',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Tea',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Apple',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Mango',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Stem Vegetables',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);

        DB::table('crops')->insert([
            'crop_name'     =>      'Leaf Vegetables',
            'created_by'    =>      '1',
            'updated_by'    =>      '1',
            'created_at'    =>      Carbon::now(),
            'updated_at'    =>      Carbon::now()
        ]);
    }
}

/*
Crops and type

Rice :
•	Arborio rice
•	Basmati rice
•	Jamsmine rice
•	Brown rice
•	Black rice
•	Red cargo
•	Parboiled rice

Wheat :
•	Hard Red Winter.
•	Hard Red Spring.
•	Soft Red Winter.
•	Durum.
•	Hard White Wheat.
•	Soft White Wheat.

Millet:
•	Pearl Millet
•	Finger millet.
•	Proxo millet
•	Foxtail millet
•	Little millet
•	Kodo millet
•	Barnyard millet

Pulses:
•	Dry Beans.
•	Lentils.
•	Faba Beans.
•	Dry Peas.
•	Chickpeas.
•	Cowpeas.
•	Bambara Beans.
•	Pigeon Peas.

Cotton:
•	Pima Cotton
•	Upland Cotton
•	Egyptian Cotton
•	Acala Cotton

Tea:
•	Black tea
•	Green tea
•	Oolong tea
•	Fermented tea
•	Yellow tea

Apple:
•	Arkansas black
•	Green apple
•	Pink pearl
•	Ambrosia
•	Cortland
•	Winsap

Mango :
•	Alphonso,
•	Kesar
•	Rajapuri
•	Vanraj
•	Jamadar
•	Totapuri
•	Neelum
•	Dashehari
•	Langra

Stem vegetables :
•	Asparagus
•	Brocoli
•	Kohlrabi

Leafvegetables :
•	Spinach.
•	Cabbage.
•	Beet Greens.
•	Watercress.
•	Romaine Lettuce
•	Collard greens

*/
