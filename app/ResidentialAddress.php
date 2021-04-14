<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class ResidentialAddress extends Model
{
    //
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function makePrimaryAddress()
    {
        $primary_residential_address = ResidentialAddress::where('user_id', Auth::user()->id)->where('is_primary', 1)->where('deleted_at', null)->first();
        if (isset($primary_residential_address)) {
            $primary_residential_address->is_primary = 0;
            $primary_residential_address->update();
        }
        $this->is_primary = 1;
        $this->update();
    }
}
