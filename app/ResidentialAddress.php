<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidentialAddress extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
