@extends('layouts.base')

@section('page-content')

<h4 class="page-title">Edit Address</h4>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Enter your address:</div>
			</div>
			<div class="card-body">
				<form action="{{ route('addresses.store') }}" method="POST">
					@csrf
					@if (Auth::user()->role == '2')
						{{-- If user is a farmer, show option for farming and residential address --}}
						<div class="d-flex justify-content-around align-items-center">
							<div class="d-flex justify-content-center align-items-center">
								<input type="radio" class="mr-1 rButton" id="farmingAddressRadio" name="address_type" value="1" checked>
                                <label class="form-check-label" for="farmingAddressRadio">Farming Address</label>
							</div>
							<div class="d-flex justify-content-center align-items-center">
								<input type="radio" class="mr-1 rButton" id="residentialAddressRadio" name="address_type" value="2">
								<label class="form-check-label" for="residentialAddressRadio">Residential Address</label>
							</div>
						</div>
					@else
						<span class="d-none">
							<input type="radio" class="form-check-input" id="residentialAddressRadio" name="AddressTypeRadios" value="2" checked>
							<label class="form-check-label" for="residentialAddressRadio">Residential Address</label>
						</span>
					@endif
					<div class="row mt-3">
						<div class="col-12">
							<div class="form-group form-group-default">
								<label for="full_name">Address Full Name:</label>
								<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Address Full Name:" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<div class="form-group form-group-default">
								<label for="line_1">Address Line 1:</label>
								<input type="text" class="form-control" name="line_1" id="line_1" placeholder="Enter Address Line 1:" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<div class="form-group form-group-default">
								<label for="line_2">Address Line 2: (Optional)</label>
								<input type="text" class="form-control" name="line_2" id="line_2" placeholder="Enter Address Line 2:">
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="city">City:</label>
								<input type="text" class="form-control" name="city" id="city" placeholder="Enter City:" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="state">State:</label>
								<input type="text" class="form-control" name="state" id="state" placeholder="Enter State:" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="landmark">Landmark (Optional):</label>
								<input type="text" class="form-control" name="landmark" id="landmark" placeholder="Enter Landmark:">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group form-group-default">
								<label for="pincode">Pincode:</label>
								<input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode:" required>
							</div>
						</div>
					</div>
					@if (Auth::user()->role == '2')
						<div class="row mt-3" id="landAreaDiv">
							<div class="col-12">
								<div class="form-group form-group-default">
									<label for="land_area">Land Area:</label>
									<input type="number" class="form-control" name="land_area" id="land_area" placeholder="Enter Land Area:">
								</div>
							</div>
						</div>
						<div class="row mt-3" id="isPrimaryDiv" style="display: none">
							<div class="col-12">
								<div class="">
									<input class="" type="checkbox" name="is_primary" id="is_primary" value="1" style="-webkit-appearance: checkbox">
									<input class="" type="hidden" name="is_primary" value="0">
									<label class="" for="is_primary">Make Primary Address</label>
								</div>
							</div>
						</div>
					@else
						<div class="row mt-3" id="isPrimaryDiv">
							<div class="col-12">
								<div class="">
									<input class="" type="checkbox" name="is_primary" id="is_primary" value="1" style="-webkit-appearance: checkbox">
									{{-- <input class="" type="hidden" name="is_primary" value="0"> --}}
									<label class="" for="is_primary">Make Primary Address</label>
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

@section('dynamicjslinks')
<script>
    // $('#isPrimaryDiv').hide();
	$('input[type=radio][name=address_type]').on('change', function() {
        console.log("In function");
		switch ($(this).val()) {
			case '1':
				$('#landAreaDiv').show();
				$('#isPrimaryDiv').hide();
				break;
			case '2':
				$('#landAreaDiv').hide();
				$('#isPrimaryDiv').show();
				break;
		}
	});
</script>
@endsection
