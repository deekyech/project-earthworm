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
                        <div>{{ $fundraiser }}</div>
                        @if (Auth::user()->is_investor())
                            <a href="{{ route('fundraiser.credit.create', $fundraiser->id) }}" class="btn btn-success">Invest now</a>
                        @endif
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
