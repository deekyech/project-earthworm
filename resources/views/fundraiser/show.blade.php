@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Fundraiser Details</h4>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">{{ $fundraiser->display_name }}</h3>
                    <div>
                        @if (Auth::user()->is_farmer())
                            <a href="{{ route('fundraiser.edit', $fundraiser->id) }}" class="btn btn-sm btn-primary text-white"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('fundraiser.destroy', $fundraiser->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        @endif
                    </div>
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
                                            <img src="{{ $fundraiser->farmer->user->large_avatar }}">
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <a href="{{ route('profile.show', $fundraiser->farmer->user->username) }}"><h4 class="card-title">{{ $fundraiser->farmer->user->name }}</h4></a>
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
                                            <h4 class="card-title">{{ $fundraiser->estimated_yield_by }}</h4>
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
                                            <h4 class="card-title">{{ $fundraiser->display_amount }}</h4>
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
                                            <h4 class="card-title">{{ $fundraiser->share_percentage . "%" }}</h4>
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
                                            <i class="fas fa-cannabis text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Estimated Yield</p>
                                            <h4 class="card-title">{{ $fundraiser->estimated_outcome . ' kg ' }}</h4>
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
                                            <h4 class="card-title">{{ $fundraiser->display_amount_collected }}</h4>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-th-list text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Crop Category</p>
                                            <h4 class="card-title">{{ $fundraiser->cropType->crop->crop_name }}</h4>
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
                                            <i class="fas fa-cannabis text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Crop</p>
                                            <h4 class="card-title">{{ $fundraiser->cropType->crop_type_name }}</h4>
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
                                            <i class="fas fa-building text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Land Area</p>
                                            <h4 class="card-title">{{ $fundraiser->farmingAddress->land_area . ' ac' }}</h4>
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
                                            <i class="fas fa-cannabis text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Farming Status</p>
                                            <h4 class="card-title">{{ $fundraiser->farmingStatus->status_name }}</h4>
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
                                    <div class="card-title">Investors</div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (count($fundraiser->creditLedgers) > 0)
                                    @foreach ( $fundraiser->creditLedgers as $creditLedger )
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $creditLedger->investor->user->avatar }}">
                                            <div class="flex-1 ml-3 pt-1">
                                                <h5 class="text-uppercase fw-bold"><a href="{{ route('profile.show', $creditLedger->investor->user->username) }}" style="color:inherit">{{ $creditLedger->investor->user->name }}</a></h5>
                                            </div>
                                            <div class="float-right pt-1">
                                                <h3 class="fw-bold">{{ $creditLedger->display_amount }}</h3>
                                            </div>
                                        </div>
                                        @if (!$loop->last)
                                            <div class="separator-dashed"></div>
                                        @endif
                                    @endforeach
                                @else
                                    <p class="text-muted font-italic">No collection yet!</p>
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
                                @if (count($fundraiser->expenseLedgers) > 0)
                                    <ol class="activity-feed">
                                        @foreach ( $fundraiser->expenseLedgers->sortBy(['created_at', 'desc']) as $expenseLedger )
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

                                    {{-- @foreach ( $fundraiser->expenseLedgers as $expenseLedger )
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-online">
                                                <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                                            </div>
                                            <div class="flex-1 ml-3 pt-1">
                                                <h5 class="text-uppercase fw-bold">{{ $expenseLedger->expenseType->expense_name }}</h5>
                                                <span class="text-muted">{{ $expenseLedger->notes }}</span>
                                            </div>
                                            <div class="float-right pt-1">
                                                <h3 class="fw-bold">{{ $expenseLedger->display_amount }}</h3>
                                            </div>
                                        </div>
                                        @if (!$loop->last)
                                            <div class="separator-dashed"></div>
                                        @endif
                                    @endforeach --}}
                                @else
                                    <p class="text-muted font-italic">No Expense Requests made yet!</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::user()->is_investor())
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('fundraiser.credit.create', $fundraiser->id) }}" class="btn btn-success mr-auto">Invest now</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
