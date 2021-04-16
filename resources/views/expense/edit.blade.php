@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Edit Expense Request</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Expense Details:</div>
            </div>
            <div class="card-body">
                <form action="{{ route('expense.update', $expenseLedger->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="expense_ledger_id" value="{{ $expenseLedger->id }}">
                    <input type="hidden" name="user_id" value="{{ $expenseLedger->user_id }}">
                    <input type="hidden" name="created_by" value="{{ $expenseLedger->created_by }}">
                    <input type="hidden" name="updated_by" value="{{ $expenseLedger->updated_by }}">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="fundraiser_ledger_id">Select Fundraiser:</label>
                                <select class="form-control" id="fundraiser_ledger_id" name="fundraiser_ledger_id">
                                    @if (App\User::find($expenseLedger->user_id)->is_farmer())
                                        @foreach (App\User::find($expenseLedger->user_id)->farmer()->fundraiserLedgers as $fundraiser)
                                            <option value="{{ $fundraiser->id }}" @if ($fundraiser->id == $expenseLedger->fundraiser_ledger_id) selected @endif>{{ $fundraiser->display_name }}</option>
                                        @endforeach
                                    @endif
                                    @if (App\User::find($expenseLedger->user_id)->is_job_volunteer())
                                        @foreach (App\FundraiserLedger::all() as $fundraiser)
                                            <option value="{{ $fundraiser->id }}" @if ($fundraiser->id == $expenseLedger->fundraiser_ledger_id) selected @endif>{{ $fundraiser->display_name }}</option>
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
                                        <option value="{{ $expense_type->id }}" @if ($expense_type->id == $expenseLedger->expense_type_id) selected @endif>{{ $expense_type->expense_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="amount">Enter Amount:</label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount:" value="{{ $expenseLedger->amount }}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-group-default">
                                <label for="bill_image">Bill Image:</label>
                                <input type="file" name="bill_image" id="bill_image" accept="image/*">
                                <input type="hidden" name="bill_image_path" value="{{ $expenseLedger->bill_image_path }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group form-group-default">
                                <label for="notes">Enter Notes:</label>
                                <textarea name="notes" id="notes" class="form-control" cols="30" rows="5" required>{{ $expenseLedger->notes }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
