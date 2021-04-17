@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Partially Approve Expense Request</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Enter approved amount:</div>
            </div>
            <div class="card-body">
                <form action="{{ route('expense.adminUpdate', $expenseLedger->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="expense_ledger_status_id" value="2">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="fundraiser_ledger_id">Enter Amount:</label>
                                <input type="number" name="approved_amount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Approve</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
