@extends('layouts.base')

@section('page-content')
<h4 class="page-title">My Portfolio</h4>
@if (count($creditLedgers) != 0)
    @foreach ( $creditLedgers as $creditLedger )
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">{{ $creditLedger->fundraiserLedger->display_name }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <img src="{{ $creditLedger->fundraiserLedger->farmer->user->large_avatar }}">
                                                </div>
                                            </div>
                                            <div class="col col-stats">
                                                <div class="numbers">
                                                    <a href="{{ route('profile.show', $creditLedger->fundraiserLedger->farmer->user->username) }}"><h4 class="card-title">{{ $creditLedger->fundraiserLedger->farmer->user->name }}</h4></a>
                                                    <p class="card-category">Farmer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="flaticon-calendar text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">Estimated Yield By</p>
                                                    <h4 class="card-title">{{ $creditLedger->fundraiserLedger->estimated_yield_by }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card card-stats card-round">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="flaticon-coins text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">Amount</p>
                                                    <h4 class="card-title">{{ $creditLedger->fundraiserLedger->display_amount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-stats card-round">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="flaticon-chart-pie text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">Investor's Share</p>
                                                    <h4 class="card-title">{{ $creditLedger->fundraiserLedger->share_percentage . "%" }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="fas fa-cannabis text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">Estimated Yield</p>
                                                    <h4 class="card-title">{{ $creditLedger->fundraiserLedger->estimated_outcome . ' kg ' }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="flaticon-coins text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">Collection</p>
                                                    <h4 class="card-title">{{ $creditLedger->fundraiserLedger->display_amount_collected }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <h3 class="mr-auto">Amount Invested: {{ $creditLedger->display_amount }}</h3>
                        <a href="{{ route('fundraiser.show', $creditLedger->fundraiserLedger->id) }}" class="btn btn-primary">View Fundraiser<i class="ml-2 fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <p class="text-muted font-italic">Whoops! You haven't invested in any fundraisers!</p>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
