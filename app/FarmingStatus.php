<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarmingStatus extends Model
{
    //
    protected $table = "farming_status";

    public function fundraiserLedgers()
    {
        return $this->hasMany(FundraiserLedger::class);
    }
}
