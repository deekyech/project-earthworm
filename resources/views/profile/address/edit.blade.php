@extends('layouts.base')

@section('page-content')

<h4 class="page-title">Edit Address</h4>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('addresses.update', $address->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mt-3">
						<div class="col-12">
							<div class="form-group form-group-default">
								<label for="full_name">Address Full Name:</label>
								<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Address Full Name:" value="{{ $address->full_name }}" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<div class="form-group form-group-default">
								<label for="line_1">Address Line 1:</label>
								<input type="text" class="form-control" name="line_1" id="line_1" placeholder="Enter Address Line 1:" value="{{ $address->line_1 }}" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<div class="form-group form-group-default">
								<label for="line_2">Address Line 2: (Optional)</label>
								<input type="text" class="form-control" name="line_2" id="line_2" placeholder="Enter Address Line 2:" value="{{ $address->line_2 }}">
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="city">City:</label>
								<input type="text" class="form-control" name="city" id="city" placeholder="Enter City:" value="{{ $address->city }}" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="state">State:</label>
								<input type="text" class="form-control" name="state" id="state" placeholder="Enter State:" value="{{ $address->state }}" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="landmark">Landmark (Optional):</label>
								<input type="text" class="form-control" name="landmark" id="landmark" placeholder="Enter Landmark:" value="{{ $address->landmark }}">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="pincode">Pincode:</label>
								<input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode:" value="{{ $address->pincode }}" required>
							</div>
						</div>
					</div>
                    @if(isset($address->land_area))
                        <div class="row mt-3" id="landAreaDiv">
							<div class="col-12">
								<div class="form-group form-group-default">
									<label for="land_area">Land Area:</label>
									<input type="number" class="form-control" name="land_area" id="land_area" placeholder="Enter Land Area:" value="{{ $address->land_area }}">
								</div>
							</div>
						</div>
                    @endif
                    <input class="btn btn-primary mt-3" type="submit" name="submit" id="submit" value="Save Address">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
