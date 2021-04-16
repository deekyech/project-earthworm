@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Create Expense Request</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Enter Expense Details:</div>
            </div>
            <div class="card-body">
                <form action="{{ route('expense.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="updated_by" value="{{ Auth::user()->id }}">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="fundraiser_ledger_id">Select Fundraiser:</label>
                                <select class="form-control" id="fundraiser_ledger_id" name="fundraiser_ledger_id">
                                    @if (Auth::user()->is_farmer())
                                        @foreach (Auth::user()->farmer()->fundraiserLedgers as $fundraiser)
                                            <option value="{{ $fundraiser->id }}">{{ $fundraiser->display_name }}</option>
                                        @endforeach
                                    @endif
                                    @if (Auth::user()->is_job_volunteer())
                                        @foreach (App\FundraiserLedger::all() as $fundraiser)
                                            <option value="{{ $fundraiser->id }}">{{ $fundraiser->display_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="expense_type_id">Select Expense Type:</label>
                                <select name="expense_type_id" class="form-control" id="expense_type_id">
                                    @foreach (App\ExpenseType::all() as $expense_type)
                                        <option value="{{ $expense_type->id }}">{{ $expense_type->expense_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="amount">Enter Amount:</label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount:" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="bill_image">Bill Image:</label>
                                <input type="file" name="bill_image" id="bill_image" accept="image/*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group form-group-default">
                                <label for="notes">Enter Notes:</label>
                                <textarea name="notes" id="notes" class="form-control" cols="30" rows="5" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Create Expense Request</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
