<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseLedgerStatus extends Model
{
    //
    protected $table = "expense_ledger_status";

    public function expenseLedgers()
    {
        return $this->hasMany(ExpenseLedger::class);
    }
}
