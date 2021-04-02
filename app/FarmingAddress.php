<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarmingAddress extends Model
{
    //
    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function farmingHistories()
    {
        return $this->hasMany(FarmingHistory::class);
    }
}
