<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseType extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
    protected $table = "expense_type";

    public function expenseLedgers()
    {
        return $this->belongsTo(ExpenseLedger::class);
    }
}
