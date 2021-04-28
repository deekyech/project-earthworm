<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FundraiserLedger extends Model
{
    //
    use SoftDeletes;

    protected $guarded = [];

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

    public function farmingStatus()
    {
        return $this->hasOne(FarmingStatus::class);
    }

    public function expenseLedgers()
    {
        return $this->hasMany(ExpenseLedger::class);
    }

    public function creditLedgers()
    {
        return $this->hasMany(CreditLedger::class);
    }

    public function getDisplayNameAttribute()
    {
        return $this->cropType->crop_type_name . ' @ ' . $this->farmingAddress->address->full_name;
    }
}
