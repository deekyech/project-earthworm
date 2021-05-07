<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\HtmlString;
use Carbon\Carbon;

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
        return new HtmlString('<a href="' . url($this->bill_image_path) . '" target="_blank"><img style="display:block;width:100px;height:100px" src="' . url($this->bill_image_path) . '"></a>');
    }

    public function getDisplayAmountAttribute()
    {
        return new HtmlString('&#8377; ' . $this->amount);
    }

    public function getDisplayDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('jS F, Y');
    }
}
