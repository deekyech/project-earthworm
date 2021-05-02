<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
