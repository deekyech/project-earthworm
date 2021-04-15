<?php

use App\FarmingHistory;
use App\FarmingStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            FarmerSeeder::class,
            InvestorSeeder::class,
            CropSeeder::class,
            CropTypeSeeder::class,
            AddressSeeder::class,
            FarmingAddressSeeder::class,
            ResidentialAddressSeeder::class,
            FarmingHistorySeeder::class,
            FarmingStatusSeeder::class
        ]);
    }
}
