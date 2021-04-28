<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditLedger extends Model
{
    //
    use SoftDeletes;

    public function fundraiserLedger()
    {
        return $this->belongsTo(FundraiserLedger::class);
    }

    public function investor()
    {
        return $this->belongsTo(Investor::class);
    }
}
