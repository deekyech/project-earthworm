<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class Farmer extends Model
{
    //
    protected $fillable = [
        'user_id'
    ];

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

    public function fundraiserLedgers()
    {
        return $this->hasMany(FundraiserLedger::class);
    }

    //Attributes
    public function getExperienceAttribute()
    {
        return Carbon::now()->diffInYears($this->farmingHistories->min('start_date'));
    }

    public function getFundraisersAttribute()
    {
        return $this->fundraiserLedgers->count();
    }

    public function getInvestorsAttribute()
    {
        return CreditLedger::whereIn('fundraiser_ledger_id', $this->fundraiserLedgers->pluck('id')->toArray())->distinct()->count('investor_id');
    }
}
