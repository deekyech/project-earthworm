@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Invest</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Fundraiser Details:</div>
            </div>
            <div class="card-body">
                Fundraiser collection left: {{ $fundraiser->collection_left }}
                <br>
                <form action="{{ route('fundraiser.credit.store', $fundraiser->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="investor_id" value="{{ Auth::user()->investor()->id }}">
                    <input type="hidden" name="fundraiser_ledger_id" value="{{ $fundraiser->id }}">
                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group form-group-default">
                                <label for="amount">Amount to invest (In Rs):</label>
                                <input type="number" name="amount" id="amount" class="form-control" min="1" max="{{ $fundraiser->collection_left }}" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Invest</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
