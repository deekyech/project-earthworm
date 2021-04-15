<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'dob', 'gender', 'phone_no', 'bio', 'role', 'username'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function getAvatarAttribute()
	{
		$size = 40;
		$name = $this->name;
		return "https://ui-avatars.com/api/?name={$name}&rounded=true&size={$size}";
	}

	public function getRoleNameAttribute()
	{
		if($this->role == 1)
		{
			return "System Admin";
		}
		else if($this->role == 2)
		{
			return "Farmer";
		}
		else if($this->role == 3)
		{
			return "Investor";
		}
	}

	public function getFarmerAttribute()
	{
		return Farmer::where('user_id', $this->id)->firstOrFail();
	}

	public function farmer()
	{
		return Farmer::where('user_id', $this->id)->firstOrFail();
	}

	public function getInvestorAttribute()
	{
		return Investor::where('user_id', $this->id)->firstOrFail();
	}

	public function investor()
	{
		return Investor::where('user_id', $this->id)->firstOrFail();
	}

	public function getPrimaryAddressAttribute()
	{
		$residential_address = ResidentialAddress::where('user_id', $this->id)->where('is_primary', '1')->first();
        return isset($residential_address) ? $residential_address->address()->first() : null;
	}

    public function is_farmer()
    {
        return $this->role == 2 ? 1 : 0;
    }

    public function is_investor()
    {
        return $this->role == 3 ? 1 : 0;
    }

    public function is_admin()
    {
        return $this->role == 1 ? 1 : 0;
    }

    public function get_farmer_id()
    {
        if($this->is_farmer())
        {
            return Farmer::where('user_id', $this->id)->first()->id;
        }
        return null;
    }
}
