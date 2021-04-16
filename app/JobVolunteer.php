<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVolunteer extends Model
{
    //
    protected $table = "job_volunteers";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
