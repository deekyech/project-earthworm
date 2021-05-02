<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CropType extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function fundraiserLedgers()
    {
        return $this->hasMany(FundraiserLedger::class);
    }
}
