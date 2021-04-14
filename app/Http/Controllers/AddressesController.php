<?php

namespace App\Http\Controllers;

use App\Address;
use App\Farmer;
use App\FarmingAddress;
use App\ResidentialAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AddressesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$user = Auth::user();
		// dd($user);
		//Check if user is farmer or investor
		if(Farmer::where('user_id', $user->id)->exists())
		{
			//User is farmer
			return view('profile.address.index', [ 'farming_addresses' => FarmingAddress::where('farmer_id', $user->farmer()->id)->where('deleted_at', null)->with('address')->get(), 'residential_addresses' => ResidentialAddress::where('user_id', $user->id)->where('deleted_at', null)->get() ]);
		}
		else
		{
			//User is investor
			return view('profile.address.index', ['residential_addresses' => ResidentialAddress::where('user_id', $user->id)->where('deleted_at', null)->with('address')->get() ]);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('profile.address.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
		// dd($request);
		$address = new Address();
		$address->full_name     =       $request->full_name;
		$address->line_1        =       $request->line_1;
		$address->line_2        =       $request->line_2;
		$address->city          =       $request->city;
		$address->state         =       $request->state;
		$address->landmark      =       $request->landmark;
		$address->pincode       =       $request->pincode;
		$address->created_by	=	    Auth::user()->id;
		$address->save();

		if($request->address_type == 1)
		{
			$farming_address = new FarmingAddress();
			$farming_address->farmer_id = Auth::user()->farmer()->id;
			$farming_address->address_id = $address->id;
			$farming_address->land_area = $request->land_area;
			$farming_address->created_by = $address->created_by;
			$farming_address->save();
		}
		else
		{
			$residential_address = new ResidentialAddress();
			$residential_address->user_id = Auth::user()->id;
			$residential_address->address_id = $address->id;
			$residential_address->is_primary = $request->is_primary ?? 0;
			$residential_address->created_by = $address->created_by;
            if($residential_address->is_primary == 1)
            {
                $primary_residential_address = ResidentialAddress::where('user_id', Auth::user()->id)->where('is_primary', 1)->where('deleted_at', null)->first();
                $primary_residential_address->is_primary = 0;
                $primary_residential_address->update();
            }
            if($residential_address->is_primary == 0 && ResidentialAddress::where('user_id', Auth::user()->id)->where('is_primary', 1)->where('deleted_at', null)->count() == 0)
            {
                $residential_address->is_primary = 1;
            }
			$residential_address->save();
		}
		return redirect('addresses');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Address  $address
	 * @return \Illuminate\Http\Response
	 */
	public function show(Address $address)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Address  $address
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Address $address)
	{
		//
		return view('profile.address.edit', compact('address'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Address  $address
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Address $address)
	{
		//
		$address->full_name     =       $request->full_name;
		$address->line_1        =       $request->line_1;
		$address->line_2        =       $request->line_2;
		$address->city          =       $request->city;
		$address->state         =       $request->state;
		$address->landmark      =       $request->landmark;
		$address->pincode       =       $request->pincode;
		$address->updated_by    =       Auth::user()->id;
		$address->update();
		return redirect(route('addresses.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Address  $address
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Address $address)
	{
		//
		$address->delete();
		return redirect()->back();
	}

    public function makePrimaryAddress($residential_address_id)
    {
        // dd($residential_address_id);
        ResidentialAddress::where('id', $residential_address_id)->where('deleted_at', null)->first()->makePrimaryAddress();
        return redirect(route('addresses.index'));
    }
}
