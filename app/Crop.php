<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crop extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];

    public function cropTypes()
    {
        return $this->hasMany(CropType::class);
    }
}
