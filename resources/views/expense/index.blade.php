@extends('layouts.base')

@section('page-content')
<h4 class="page-title">My Expense Requests</h4>
@isset($expenseLedgers)
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Expense Requests</div>
                </div>
                <div class="card-body">
                    @if(count($expenseLedgers) != 0)
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Sr. No.</th>
                                    <th scope="col">Fundraiser</th>
                                    <th scope="col">Expense Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Notes</th>
                                    <th scope="col">Bill Image</th>
                                    <th scope="col">Approved</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $expenseLedgers as $expenseLedger )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $expenseLedger->fundraiserLedger->display_name }}</td>
                                        <td>{{ $expenseLedger->expenseType->expense_name }}</td>
                                        <td>{{ $expenseLedger->amount}}</td>
                                        <td>{{ $expenseLedger->notes }}</td>
                                        <td>{{ $expenseLedger->bill_image_path }}</td>
                                        <td>@isset($expenseLedger->approved_by) Yes @else No @endisset</td>
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
                        <p class="text-muted font-italic">No expense requests found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endisset
@endsection
