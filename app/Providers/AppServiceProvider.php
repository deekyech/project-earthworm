<?php

namespace App\Providers;

use App\Address;
use App\FarmingAddress;
use App\ResidentialAddress;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Builder::defaultStringLength(191);
        Address::deleted(function($address) {
            $farming_address = FarmingAddress::where('address_id', $address->id)->first();
            if(isset($farming_address))
            {
                $farming_address->delete();
            }
            $residential_address = ResidentialAddress::where('address_id', $address->id)->first();
            if(isset($residential_address))
            {
                $residential_address->delete();
            }
        });
        Address::restored(function ($address) {
            FarmingAddress::where('address_id', $address->id)->onlyTrashed()->restore();
            ResidentialAddress::where('address_id', $address->id)->onlyTrashed()->restore();
        });

        ResidentialAddress::deleted(function ($residential_address) {
            if($residential_address->is_primary)
            {
                $primary_residential_address = ResidentialAddress::where('user_id', $residential_address->user_id)->where('deleted_at', null)->first();
                if(isset($primary_residential_address))
                {
                    $primary_residential_address->makePrimaryAddress();
                }
            }
        });
    }
}
