<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function farmingAddresses()
    {
        return $this->hasMany(FarmingAddress::class);
    }

    public function farmingHistories()
    {
        return $this->hasMany(FarmingHistory::class);
    }
}
