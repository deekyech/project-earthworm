<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\HtmlString;

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
        return $this->belongsTo(FarmingStatus::class);
    }

    public function expenseLedgers()
    {
        return $this->hasMany(ExpenseLedger::class);
    }

    public function creditLedgers()
    {
        return $this->hasMany(CreditLedger::class);
    }

    //Attributes

    public function getDisplayNameAttribute()
    {
        return $this->cropType->crop_type_name . ' @ ' . $this->farmingAddress->address->full_name;
    }

    public function getEstimatedYieldByAttribute()
    {
        return Carbon::parse($this->estimated_yield_timestamp)->format('jS F, Y');
    }

    public function getDisplayAmountAttribute()
    {
        return new HtmlString('&#8377; ' . $this->amount);
    }

    public function getAmountCollectedAttribute()
    {
        return CreditLedger::where('fundraiser_ledger_id', $this->id)->sum('amount');
    }

    public function getDisplayAmountCollectedAttribute()
    {
        return new HtmlString('&#8377; ' . $this->amount_collected);
    }

    public function getCollectionLeftAttribute()
    {
        return ($this->amount - $this->amount_collected);
    }
}
