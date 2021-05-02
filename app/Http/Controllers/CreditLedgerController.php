<?php

namespace App\Http\Controllers;

use App\CreditLedger;
use App\FundraiserLedger;
use App\PaymentTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreditLedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fundraiser.credit.investorportfolio', ['creditLedgers' => CreditLedger::where('investor_id', Auth::user()->investor()->id)->with('fundraiserLedger.farmer.user')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($fundraiserId)
    {
        return view('fundraiser.credit.create', [ 'fundraiser' => FundraiserLedger::find($fundraiserId) ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $creditLedger = new CreditLedger();
        $creditLedger->investor_id              =   $request->investor_id;
        $creditLedger->fundraiser_ledger_id     =   $request->fundraiser_ledger_id;
        $creditLedger->created_by               =   $request->created_by;
        $creditLedger->amount                   =   $request->amount;
        $payment_transaction                    =   PaymentTransaction::create(['created_by' => $request->created_by]);
        $creditLedger->payment_transaction_id   =   $payment_transaction->id;
        $creditLedger->save();
        return redirect(route('fundraiser.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CreditLedger  $creditLedger
     * @return \Illuminate\Http\Response
     */
    public function show(CreditLedger $creditLedger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CreditLedger  $creditLedger
     * @return \Illuminate\Http\Response
     */
    public function edit(CreditLedger $creditLedger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CreditLedger  $creditLedger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditLedger $creditLedger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CreditLedger  $creditLedger
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditLedger $creditLedger)
    {
        //
    }
}
