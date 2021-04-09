<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	//
	public function formattedAddressHTML()
	{
		return $this->full_name . '\r\n' . $this->line_1 . '\r\n' . $this->line_2 . '<br>' . $this->city . ', ' . $this->state . ' - ' . $this->pincode;
	}
}
