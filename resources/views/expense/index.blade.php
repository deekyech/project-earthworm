@extends('layouts.base')

@section('page-content')
<h4 class="page-title">My Expense Requests</h4>
@isset($pendingExpenseLedgers)
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Pending Expense Requests</div>
                </div>
                <div class="card-body">
                    @if(count($pendingExpenseLedgers) != 0)
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Sr. No.</th>
                                    <th scope="col">Fundraiser</th>
                                    <th scope="col">Expense Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Notes</th>
                                    <th scope="col">Bill Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $pendingExpenseLedgers as $expenseLedger )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $expenseLedger->fundraiserLedger->display_name }}</td>
                                        <td>{{ $expenseLedger->expenseType->expense_name }}</td>
                                        <td>{{ $expenseLedger->amount}}</td>
                                        <td>{{ $expenseLedger->notes }}</td>
                                        <td>{{ $expenseLedger->bill_image_download_html }}</td>
                                        <td>@isset($expenseLedger->expense_ledger_status_id) <div class="btn @if ($expenseLedger->expense_ledger_status_id == 1) btn-success @elseif ($expenseLedger->expense_ledger_status_id == 2) btn-default @elseif ($expenseLedger->expense_ledger_status_id == 3) btn-danger @endif">{{ $expenseLedger->expenseLedgerStatus->expense_ledger_status_name }}</div> @else Yet to be viewed @endisset</td>
                                        <td><a href="{{ route('expense.edit', $expenseLedger->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                                        <td>
                                            <form action="{{ route('expense.destroy', $expenseLedger->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-muted font-italic">No pending expense requests found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endisset
@isset($completedExpenseLedgers)
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Completed Expense Requests</div>
                </div>
                <div class="card-body">
                    @if(count($completedExpenseLedgers) != 0)
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Sr. No.</th>
                                    <th scope="col">Fundraiser</th>
                                    <th scope="col">Expense Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Notes</th>
                                    <th scope="col">Bill Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Approved Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $completedExpenseLedgers as $expenseLedger )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $expenseLedger->fundraiserLedger->display_name }}</td>
                                        <td>{{ $expenseLedger->expenseType->expense_name }}</td>
                                        <td>{{ $expenseLedger->amount}}</td>
                                        <td>{{ $expenseLedger->notes }}</td>
                                        <td>{{ $expenseLedger->bill_image_download_html }}</td>
                                        <td>@isset($expenseLedger->expense_ledger_status_id) <div class="btn @if ($expenseLedger->expense_ledger_status_id == 1) btn-success @elseif ($expenseLedger->expense_ledger_status_id == 2) btn-default @elseif ($expenseLedger->expense_ledger_status_id == 3) btn-danger @endif">{{ $expenseLedger->expenseLedgerStatus->expense_ledger_status_name }}</div> @else Yet to be viewed @endisset</td>
                                        <td>@if ($expenseLedger->expense_ledger_status_id == 1) {{ $expenseLedger->amount }} @elseif ($expenseLedger->expense_ledger_status_id == 2) {{ $expenseLedger->approved_amount }} @elseif ($expenseLedger->expense_ledger_status_id == 3) 0 @endif</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-muted font-italic">No completed expense requests found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endisset
@endsection
