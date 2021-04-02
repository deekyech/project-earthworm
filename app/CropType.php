<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CropType extends Model
{
    //
    public function crops()
    {
        return $this->hasMany(Crop::class);
    }
}
