<?php

namespace App\Http\Controllers;

use App\FundraiserLedger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FundraiserLedgersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->is_farmer())
        {
            return view('fundraiser.farmerindex', ['fundraisers' => FundraiserLedger::where('farmer_id', Auth::user()->get_farmer_id())->get()]);
        }

        if(Auth::user()->is_investor())
        {
            return view('fundraiser.investorindex', ['fundraisers' => FundraiserLedger::orderBy('created_at', 'DESC')->get()]);
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
        return view('fundraiser.create');
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
        // dd($request->all());
        FundraiserLedger::create(array_slice($request->all(), 1));
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FundraiserLedger  $fundraiserLedger
     * @return \Illuminate\Http\Response
     */
    public function show(FundraiserLedger $fundraiserLedger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FundraiserLedger  $fundraiserLedger
     * @return \Illuminate\Http\Response
     */
    public function edit($fundraiserLedger)
    {
        //
        return view('fundraiser.edit', ["fundraiserLedger" => FundraiserLedger::find($fundraiserLedger)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FundraiserLedger  $fundraiserLedger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FundraiserLedger $fundraiserLedger)
    {
        //
        // dd($request);
        $fundraiserLedger1 = FundraiserLedger::find($request->fundraiserLedger_id);
        $fundraiserLedger1->update(array_slice($request->all(), 3));
        return redirect(route('fundraiser.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FundraiserLedger  $fundraiserLedger
     * @return \Illuminate\Http\Response
     */
    public function destroy($fundraiserLedger)
    {
        //
        FundraiserLedger::find($fundraiserLedger)->delete();
        return redirect()->back();
    }
}
