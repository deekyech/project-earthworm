<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\HtmlString;

class Address extends Model
{
    use SoftDeletes;
	//
	public function formattedAddressHTML()
	{
		return new HtmlString($this->full_name . '&#13;&#10;' . $this->line_1 . '&#13;&#10;' . $this->line_2 . '&#13;&#10;' . $this->city . ', ' . $this->state . ' - ' . $this->pincode);
	}
}
