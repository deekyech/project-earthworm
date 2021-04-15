<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarmingHistory extends Model
{
    //
    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    public function cropType()
    {
        return $this->belongsTo(CropType::class);
    }

    public function farmingAddress()
    {
        return $this->belongsTo(FarmingAddress::class);
    }
}
