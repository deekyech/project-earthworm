<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FarmingAddress extends Model
{
    //
    use SoftDeletes;
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
