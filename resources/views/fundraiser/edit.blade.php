@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Create Fundraiser</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Fundraiser Details:</div>
            </div>
            <div class="card-body">
                <form action="{{ route('fundraiser.update', $fundraiserLedger->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="fundraiserLedger_id" value="{{ $fundraiserLedger->id }}">
                    <input type="hidden" name="farmer_id" value="{{ $fundraiserLedger->farmer_id }}">
                    <input type="hidden" name="created_by" value="{{ $fundraiserLedger->created_by }}">
                    <input type="hidden" name="updated_by" value="{{ $fundraiserLedger->updated_by }}">
                    <div class="row mt-3">
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="crop-category">Crop Category:</label>
								<select class="form-control" id="crop-category" disabled>
                                    <option value="">{{ $fundraiserLedger->cropType->crop->crop_name }}</option>
                                </select>
							</div>
						</div>
                        <div class="col-6">
							<div class="form-group form-group-default">
								<label for="crop-type-select">Crop:</label>
								<select name="crop_type_id" class="form-control" id="crop-type-select" disabled>
                                    <option value="{{ $fundraiserLedger->crop_type_id }}">{{ $fundraiserLedger->cropType->crop_type_name }}</option>
                                </select>
							</div>
						</div>
					</div>
                    <div class="row mt-3">
                        <div class="col-6">
							<div class="form-group form-group-default">
								<label for="farming-address-select">Select Farm:</label>
								<select class="form-control" id="farming-address-select" name="farming_address_id" disabled>
                                    <option value="{{ $fundraiserLedger->farming_address_id }}">{{ $fundraiserLedger->farmingAddress->address->full_name }}</option>
                                </select>
							</div>
						</div>
                        <div class="col-6">
							<div class="form-group form-group-default">
								<label for="farming-status-select">Status:</label>
								<select name="farming_status_id" class="form-control" id="farming-status-select">
                                    @foreach (App\FarmingStatus::all() as $farming_status)
                                        <option value="{{ $farming_status->id }}" @if ($fundraiserLedger->farming_status_id == $farming_status->id) selected @endif>{{ $farming_status->status_name }}</option>
                                    @endforeach
                                </select>
							</div>
						</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="amount">Amount Required (In Rs):</label>
                                <input type="number" name="amount" id="amount" class="form-control" value="{{ $fundraiserLedger->amount }}" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="share_percentage">Share Percentage:</label>
                                <select name="share_percentage" id="share_percentage" class="form-control">
                                    <option value="0" @if($fundraiserLedger->share_percentage == 0) selected @endif>0%</option>
                                    <option value="5" @if($fundraiserLedger->share_percentage == 5) selected @endif>5%</option>
                                    <option value="10" @if($fundraiserLedger->share_percentage == 10) selected @endif>10%</option>
                                    <option value="15" @if($fundraiserLedger->share_percentage == 15) selected @endif>15%</option>
                                    <option value="20" @if($fundraiserLedger->share_percentage == 20) selected @endif>20%</option>
                                    <option value="25" @if($fundraiserLedger->share_percentage == 25) selected @endif>25%</option>
                                    <option value="30" @if($fundraiserLedger->share_percentage == 30) selected @endif>30%</option>
                                    <option value="35" @if($fundraiserLedger->share_percentage == 35) selected @endif>35%</option>
                                    <option value="40" @if($fundraiserLedger->share_percentage == 40) selected @endif>40%</option>
                                    <option value="45" @if($fundraiserLedger->share_percentage == 45) selected @endif>45%</option>
                                    <option value="50" @if($fundraiserLedger->share_percentage == 50) selected @endif>50%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="estimated_outcome">Estimated Outcome (In kgs):</label>
                                <input type="number" name="estimated_outcome" id="estimated_outcome" class="form-control" value="{{ $fundraiserLedger->estimated_outcome }}" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="estimated_yield_timestamp">Estimated date of Yield:</label>
                                <input type="date" name="estimated_yield_timestamp" id="estimated_yield_timestamp" class="form-control" value="{{ $fundraiserLedger->estimated_yield_timestamp }}" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Save Fundraiser</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
