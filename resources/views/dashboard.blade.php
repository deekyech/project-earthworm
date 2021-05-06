@extends('layouts.base')

@section('page-content')
<div class="page-header">
    <h4 class="page-title">Dashboard</h4>
</div>
@if (Auth::user()->is_farmer())
{{-- Stats Row --}}
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Investors</p>
                            <h4 class="card-title">{{ Auth::user()->farmer()->investors }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-newspaper"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Fundraisers</p>
                            <h4 class="card-title">{{ Auth::user()->farmer()->fundraisers }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Experience</p>
                            <h4 class="card-title">{{ Auth::user()->farmer()->experience }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Expense Requests</p>
                            <h4 class="card-title">{{ Auth::user()->expenseLedgers->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Fundraisers</div>
                </div>
            </div>
            <div class="card-body">
                @if (count(Auth::user()->farmer()->fundraiserLedgers) > 0)
                    @foreach ( Auth::user()->farmer()->fundraiserLedgers as $fundraiserLedger )
                        <div class="d-flex align-items-center">
                            {{-- <img src="{{ $creditLedger->investor->user->avatar }}"> --}}
                            <div class="flex-1 ml-3 pt-1">
                                <h5 class="text-uppercase fw-bold"><a href="{{ route('fundraiser.show', $fundraiserLedger->id) }}" style="color:inherit">{{ $fundraiserLedger->display_name }}</a></h5>
                            </div>
                            <div class="float-right pt-1">
                                <h3 class="fw-bold">{{ $fundraiserLedger->display_amount }}</h3>
                            </div>
                        </div>
                        @if (!$loop->last)
                            <div class="separator-dashed"></div>
                        @endif
                    @endforeach
                @else
                    <p class="text-muted font-italic">No fundraisers yet!</p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Expense Requests</div>
            </div>
            <div class="card-body">
                @if (count(Auth::user()->expenseLedgers) > 0)
                    <ol class="activity-feed">
                        @foreach ( Auth::user()->expenseLedgers->sortBy(['created_at', 'desc']) as $expenseLedger )
                            @if ($expenseLedger->expense_ledger_status_id != 3)
                                <li class="feed-item feed-item-success d-flex align-items-center">
                                    <div class="flex-1">
                                        <time class="date" datetime="{{ $expenseLedger->display_date }}">{{ $expenseLedger->display_date }}</time>
                                        <span class="text">{{ $expenseLedger->notes }}</span>
                                    </div>
                                    <div class="float-right">
                                        <h3 class="fw-bold">{{ $expenseLedger->display_amount }}</h3>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                @else
                    <p class="text-muted font-italic">No Expense Requests made yet!</p>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- Stats Row ends --}}
@elseif (Auth::user()->is_investor())
{{-- Stats Row --}}
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Farmers Saved</p>
                            <h4 class="card-title">{{ Auth::user()->investor()->farmers_helped }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-newspaper"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Fundraisers Funded</p>
                            <h4 class="card-title">{{ Auth::user()->investor()->creditLedgers->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Amount Invested</p>
                            <h4 class="card-title">{{ Auth::user()->investor()->display_total_investment }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Invested Fundraisers</div>
                </div>
            </div>
            <div class="card-body">
                @if (count(Auth::user()->investor()->creditLedgers) > 0)
                    @foreach ( Auth::user()->investor()->creditLedgers as $creditLedger )
                        <div class="d-flex align-items-center">
                            {{-- <img src="{{ $creditLedger->investor->user->avatar }}"> --}}
                            <div class="flex-1 ml-3 pt-1">
                                <h5 class="text-uppercase fw-bold"><a href="{{ route('fundraiser.show', $creditLedger->fundraiserLedger->id) }}" style="color:inherit">{{ $creditLedger->fundraiserLedger->display_name }}</a></h5>
                            </div>
                            <div class="float-right pt-1">
                                <h3 class="fw-bold">{{ $creditLedger->fundraiserLedger->display_amount }}</h3>
                            </div>
                        </div>
                        @if (!$loop->last)
                            <div class="separator-dashed"></div>
                        @endif
                    @endforeach
                @else
                    <p class="text-muted font-italic">No fundraisers yet!</p>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- Stats Row ends --}}
@elseif (Auth::user()->is_admin())
{{-- Stats Row --}}
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Farmers</p>
                            <h4 class="card-title">{{ App\Farmer::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Investors</p>
                            <h4 class="card-title">{{ App\Investor::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Fundraisers</p>
                            <h4 class="card-title">{{ App\FundraiserLedger::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Expense Requests</p>
                            <h4 class="card-title">{{ App\ExpenseLedger::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Fundraisers</div>
                </div>
            </div>
            <div class="card-body">
                @if (count(App\FundraiserLedger::all()) > 0)
                    @foreach ( App\FundraiserLedger::all() as $fundraiserLedger )
                        <div class="d-flex align-items-center">
                            {{-- <img src="{{ $creditLedger->investor->user->avatar }}"> --}}
                            <div class="flex-1 ml-3 pt-1">
                                <h5 class="text-uppercase fw-bold"><a href="{{ route('fundraiser.show', $fundraiserLedger->id) }}" style="color:inherit">{{ $fundraiserLedger->display_name }}</a></h5>
                            </div>
                            <div class="float-right pt-1">
                                <h3 class="fw-bold">{{ $fundraiserLedger->display_amount }}</h3>
                            </div>
                        </div>
                        @if (!$loop->last)
                            <div class="separator-dashed"></div>
                        @endif
                    @endforeach
                @else
                    <p class="text-muted font-italic">No fundraisers yet!</p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Expense Requests</div>
            </div>
            <div class="card-body">
                @if (count(App\ExpenseLedger::all()) > 0)
                    <ol class="activity-feed">
                        @foreach ( App\ExpenseLedger::all()->sortBy(['created_at', 'desc']) as $expenseLedger )
                            @if ($expenseLedger->expense_ledger_status_id != 3)
                                <li class="feed-item feed-item-success d-flex align-items-center">
                                    <div class="flex-1">
                                        <time class="date" datetime="{{ $expenseLedger->display_date }}">{{ $expenseLedger->display_date }}</time>
                                        <span class="text">{{ $expenseLedger->notes }}</span>
                                    </div>
                                    <div class="float-right">
                                        <h3 class="fw-bold">{{ $expenseLedger->display_amount }}</h3>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                @else
                    <p class="text-muted font-italic">No Expense Requests made yet!</p>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- Stats Row ends --}}
@elseif (Auth::user()->is_job_volunteer())
{{-- Stats Row --}}
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Expense Requests</p>
                            <h4 class="card-title">1,294</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-newspaper"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Subscribers</p>
                            <h4 class="card-title">1303</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Sales</p>
                            <h4 class="card-title">$ 1,345</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Order</p>
                            <h4 class="card-title">576</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Stats Row ends --}}
@endif
@endsection
