<?php

namespace App\Http\Controllers;

use App\ExpenseLedger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseLedgerController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->is_admin())
        {
            return view('expense.admin.index', ['pendingExpenseLedgers' => ExpenseLedger::where('expense_ledger_status_id', null)->with('fundraiserLedger')->with('user')->with('expenseType')->get(), 'completedExpenseLedgers' => ExpenseLedger::whereNotNull('expense_ledger_status_id')->with('fundraiserLedger')->with('user')->with('expenseType')->with('expenseLedgerStatus')->get()]);
        }
        return view('expense.index', ['pendingExpenseLedgers' => ExpenseLedger::where('user_id', Auth::user()->id)->where('expense_ledger_status_id', null)->with('fundraiserLedger')->with('expenseType')->with('expenseLedgerStatus')->get(), 'completedExpenseLedgers' =>  ExpenseLedger::where('user_id', Auth::user()->id)->whereNotNull('expense_ledger_status_id')->with('fundraiserLedger')->with('expenseType')->with('expenseLedgerStatus')->get()]);
    }

    public function create()
    {
        return view('expense.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $expenseLedger = new ExpenseLedger();
        $expenseLedger->user_id = $request->user_id;
        $expenseLedger->created_by = $request->created_by;
        $expenseLedger->updated_by = $request->updated_by;
        $expenseLedger->fundraiser_ledger_id = $request->fundraiser_ledger_id;
        $expenseLedger->expense_type_id = $request->expense_type_id;
        $expenseLedger->amount = $request->amount;
        $expenseLedger->notes = $request->notes;

        //Image upload
        $bill_image = $request->file('bill_image');
        $name = time() . "." . $bill_image->getClientOriginalExtension();
        $bill_image->move(public_path('/expenseimages'), $name);

        $expenseLedger->bill_image_path = "expenseimages/" . $name;
        $expenseLedger->save();
        return redirect(route('home'));
    }

    public function edit($expenseLedger)
    {
        if (Auth::user()->is_admin())
        {
            return view('expense.admin.edit', ["expenseLedger" => ExpenseLedger::find($expenseLedger)]);
        }
        return view('expense.edit', ["expenseLedger" => ExpenseLedger::find($expenseLedger)]);
    }

    public function update(Request $request, ExpenseLedger $expenseLedger)
    {
        // dd($request);
        $expenseLedger1 = ExpenseLedger::find($request->expense_ledger_id);
        $expenseLedger1->user_id = $request->user_id;
        $expenseLedger1->created_by = $request->created_by;
        $expenseLedger1->updated_by = $request->updated_by;
        $expenseLedger1->fundraiser_ledger_id = $request->fundraiser_ledger_id;
        $expenseLedger1->expense_type_id = $request->expense_type_id;
        $expenseLedger1->amount = $request->amount;
        $expenseLedger1->notes = $request->notes;
        if($request->hasFile('bill_image'))
        {
            //Image upload
            $bill_image = $request->file('bill_image');
            $name = time() . "." . $bill_image->getClientOriginalExtension();
            $bill_image->move(public_path('/expenseimages'), $name);

            $expenseLedger1->bill_image_path = "expenseimages/" . $name;
        }
        else
        {
            $expenseLedger1->bill_image_path = $request->bill_image_path;
        }
        $expenseLedger1->save();
        return redirect(route('home'));
    }

    public function adminUpdate(Request $request, $expenseLedger)
    {
        // dd($request);
        ExpenseLedger::find($expenseLedger)->update(array_slice($request->all(), 2));
        return redirect(route('expense.index'));
    }

    public function destroy($expenseLedger)
    {
        ExpenseLedger::find($expenseLedger)->delete();
        return redirect()->back();
    }
}
