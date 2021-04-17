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

    public function expenseLedgerStatus()
    {
        return $this->belongsTo(ExpenseLedgerStatus::class);
    }

    public function getBillImageDownloadHtmlAttribute()
    {
        //Update this method to change bill image path to download button in all expense ledger index pages.
        return $this->bill_image_path;
    }
}
