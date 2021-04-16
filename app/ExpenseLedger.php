<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseLedger extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];

    public function fundraiserLedger()
    {
        return $this->belongsTo(FundraiserLedger::class);
    }

    public function expenseType()
    {
        return $this->hasOne(ExpenseType::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function is_farmer_expense_ledger()
    {
        return $this->user->is_farmer();
    }
}
