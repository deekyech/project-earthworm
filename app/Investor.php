<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;

class Investor extends Model
{
    //
    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function creditLedgers()
    {
        return $this->hasMany(CreditLedger::class);
    }

    //Attributes
    public function getTotalInvestmentAttribute()
    {
        return $this->creditLedgers->sum('amount');
    }

    public function getDisplayTotalInvestmentAttribute()
    {
        return new HtmlString('&#8377; ' . $this->total_investment);
    }

    public function getFarmersHelpedAttribute()
    {
        return FundraiserLedger::whereIn('id', $this->creditLedgers->pluck('fundraiser_ledger_id')->toArray())->distinct()->count('farmer_id');
    }
}
