<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
	//
	public function formattedAddressHTML()
	{
		return $this->full_name . '\r\n' . $this->line_1 . '\r\n' . $this->line_2 . '<br>' . $this->city . ', ' . $this->state . ' - ' . $this->pincode;
	}
}
