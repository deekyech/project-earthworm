@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Create Fundraiser</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Enter Fundraiser Details:</div>
            </div>
            <div class="card-body">
                <form action="{{ route('fundraiser.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="farmer_id" value="{{ Auth::user()->get_farmer_id() }}">
                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="updated_by" value="{{ Auth::user()->id }}">
                    <div class="row mt-3">
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="crop-category">Crop Category:</label>
								<select class="form-control" id="crop-category">
                                    @foreach (App\Crop::all() as $crop)
                                        <option value="{{ $crop->id }}">{{ $crop->crop_name }}</option>
                                    @endforeach
                                </select>
							</div>
						</div>
                        <div class="col-6">
							<div class="form-group form-group-default">
								<label for="crop-type-select">Crop:</label>
								<select name="crop_type_id" class="form-control" id="crop-type-select">
                                    @foreach (App\CropType::where('crop_id', '1')->get() as $crop_type)
                                        <option value="{{ $crop_type->id }}">{{ $crop_type->crop_type_name }}</option>
                                    @endforeach
                                </select>
							</div>
						</div>
					</div>
                    <div class="row mt-3">
                        <div class="col-6">
							<div class="form-group form-group-default">
								<label for="farming-address-select">Select Farm:</label>
								<select class="form-control" id="farming-address-select" name="farming_address_id">
                                    @foreach ( App\FarmingAddress::where('farmer_id', Auth::user()->get_farmer_id())->with('address')->get() as $farming_address)
                                        <option value="{{ $farming_address->id }}">{{ $farming_address->address->full_name }}</option>
                                    @endforeach
                                </select>
							</div>
						</div>
                        <div class="col-6">
							<div class="form-group form-group-default">
								<label for="farming-status-select">Status:</label>
								<select name="farming_status_id" class="form-control" id="farming-status-select">
                                    @foreach (App\FarmingStatus::all() as $farming_status)
                                        <option value="{{ $farming_status->id }}">{{ $farming_status->status_name }}</option>
                                    @endforeach
                                </select>
							</div>
						</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="amount">Amount Required (In Rs):</label>
                                <input type="number" name="amount" id="amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="share_percentage">Share Percentage:</label>
                                <select name="share_percentage" id="share_percentage" class="form-control">
                                    <option value="0">0%</option>
                                    <option value="5">5%</option>
                                    <option value="10">10%</option>
                                    <option value="15">15%</option>
                                    <option value="20">20%</option>
                                    <option value="25">25%</option>
                                    <option value="30">30%</option>
                                    <option value="35">35%</option>
                                    <option value="40">40%</option>
                                    <option value="45">45%</option>
                                    <option value="50">50%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="estimated_outcome">Estimated Outcome (In kgs):</label>
                                <input type="number" name="estimated_outcome" id="estimated_outcome" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="estimated_yield_timestamp">Estimated date of Yield:</label>
                                <input type="date" name="estimated_yield_timestamp" id="estimated_yield_timestamp" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Create Fundraiser</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dynamicjslinks')
<script src="{{ asset('assets/js/createfundraiser.js') }}"></script>
@endsection
