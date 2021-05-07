<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FarmingHistory extends Model
{
    //
    use SoftDeletes;
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
