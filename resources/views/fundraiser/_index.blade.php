@if (count($fundraisers) != 0)
    @foreach ( $fundraisers as $fundraiser)
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
                                                    <i class="fas fa-cannabis text-warning"></i>
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
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        @if (Auth::user()->is_investor())
                            <a href="{{ route('fundraiser.credit.create', $fundraiser->id) }}" class="btn btn-success mr-auto">Invest now</a>
                        @endif
                        <a href="{{ route('fundraiser.show', $fundraiser->id) }}" class="btn btn-primary">View Fundraiser<i class="ml-2 fas fa-angle-double-right"></i></a>
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
                    <p class="text-muted font-italic">No fundraisers to show!</p>
                </div>
            </div>
        </div>
    </div>
@endif
