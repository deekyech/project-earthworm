<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'full_name'     =>      $faker->streetName,
        'line_1'        =>      $faker->streetAddress,
        'line_2'        =>      $faker->streetSuffix,
        'pincode'       =>      $faker->postcode,
        'landmark'      =>      $faker->citySuffix,
        'city'          =>      $faker->city,
        'state'         =>      $faker->state,
        'created_by'    =>      '1',
        'updated_by'    =>      '1',
        'created_at'    =>      Carbon::now(),
        'updated_at'    =>      Carbon::now()
    ];
});
