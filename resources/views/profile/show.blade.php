@extends('layouts.base')

@section('page-content')
<h4 class="page-title">User Profile</h4>

@if ($user->role == '2')

{{-- Farmer Profile View --}}

	<div class="row">

		<div class="col-md-12">
			<div class="card card-profile card-secondary">
				<div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
					<div class="profile-picture">
						<div class="avatar avatar-xl">
							<img src="{{ $user->avatar }}" alt="..." class="avatar-img rounded-circle">
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="user-profile text-center">
						<div class="name">{{ $user->name }}</div>
						<div class="job">{{ $user->role_name }}</div>
					</div>
					<div class="row user-stats text-center">
						<div class="col">
							<div class="number">{{ $user->farmer()->experience . ' years'}}</div>
							<div class="title">Experience</div>
						</div>
						<div class="col">
							<div class="number">{{ count($user->farmer()->farmingHistories()->get()) }}</div>
							<div class="title">Crops Grown</div>
						</div>
						<div class="col">
							<div class="number">{{ count($user->farmer()->farmingAddresses()->get()) }}</div>
							<div class="title">Farms</div>
						</div>
						<div class="col">
							<div class="number">{{ $user->average_rating }}</div>
							<div class="title">Rating</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>

	{{-- Farmer's Bio --}}

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title d-flex justify-content-between align-items-center">
						<h3 class="mb-0">Bio</h3>
						@if (Auth::user()->id == $user->id)
							<a href="{{ route('profile.edit', $user->id) }}" class="btn btn-sm btn-primary text-white"><i class="fas fa-edit"></i></a>
						@endif
					</div>
				</div>
				<div class="card-body">
					@if (isset($user->bio))
						<p>{{ $user->bio }}</p>
					@else
						<p class="text-muted">No bio entered!</p>
					@endif
				</div>
			</div>
		</div>
	</div>

	{{-- Farmer's Bio Ends --}}

	{{-- Farmer's Personal Details --}}

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Personal Details</div>
				</div>
				<div class="card-body">
					<form action="{{ route('profile.update', $user->id) }}" method="POST">
						@csrf
						@method('PUT')
						<input type="hidden" name="user_id" value="{{ $user->id }}">
						<input type="hidden" name="updated_by" value="{{ $user->id }}">
						<div class="row mt-3">
							<div class="col-md-12">
								<div class="form-group form-group-default">
									<label>Email</label>
									<input type="email" class="form-control" placeholder="Email" value="{{ $user->email }}" @if ($user->id == Auth::user()->id) disabled @endif>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							@if (isset($user->dob) || $user->id == Auth::user()->id)
								<div class="col">
									<div class="form-group form-group-default">
										<label>Birth Date</label>
										<input type="date" class="form-control" id="dob" name="dob" value="{{ $user->dob }}" placeholder="Birth Date">
									</div>
								</div>
							@endif
							@if (isset($user->gender) || $user->id == Auth::user()->id)
								<div class="col">
									<div class="form-group form-group-default">
										<label>Gender</label>
										<select class="form-control" id="gender" name="gender">
											<option value="1" @if ($user->gender == '1')
												selected
											@endif>Male</option>
											<option value="2" @if ($user->gender == '2')
												selected
											@endif>Female</option>
										</select>
									</div>
								</div>
							@endif
							@if (isset($user->phone_no) || $user->id == Auth::user()->id)
								<div class="col">
									<div class="form-group form-group-default">
										<label>Phone</label>
										<input type="text" class="form-control" value="{{ $user->phone_no }}" name="phone_no" placeholder="Phone">
									</div>
								</div>
							@endif
						</div>
						@isset($user->primary_address)
							<div class="row mt-3">
								<div class="col-md-12">
									<div class="form-group form-group-default">
										<label>Primary Address</label>
										<textarea class="form-control" placeholder="Address" disabled>{{ $user->primary_address->formattedAddressHTML() }}</textarea>
									</div>
								</div>
							</div>
						@endisset

						@if ($user->id == Auth::user()->id)
							<div class="text-left">
								<a href="{{ route('addresses.index') }}" class="btn btn-primary">Manage Addresses</a>
							</div>
							<div class="text-right mb-3">
								<button class="btn btn-success" type="submit">Save</button>
							</div>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>

	{{-- Farmer's Personal Details Ends --}}

	{{-- Farming History Timeline --}}

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Farming History</div>
				</div>
				<div class="card-body">
                    @if ($user->farmer()->farmingHistories()->exists())
					    <ul class="timeline">
                            @foreach ( $user->farmer()->farmingHistories()->orderBy('end_date', 'DESC')->get() as $farming_history)
                                @if ($loop->odd)
                                    <li>
                                @else
                                    <li class="timeline-inverted">
                                @endif

                                    <div class="timeline-badge"><i class="flaticon-message"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">{{ $farming_history->cropType()->first()->crop_type_name }}</h4>
                                            <p><small class="text-muted"><i class="flaticon-message"></i>{{ $farming_history->start_date . " to " . $farming_history->end_date }}</small></p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                {{ "Quantity: " . $farming_history->quantity_in_kg . "kgs" }}<br>
                                                {{"Farm: " . $farming_history->farmingAddress()->first()->address()->first()->full_name}}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-muted">There's no farming history available for this farmer!</p>
                    @endif
				</div>
			</div>
		</div>
	</div>

	{{-- Farming History Timeline Ends --}}

{{-- Farmer Profile View Ends --}}

@elseif ($user->role == '3')

	{{-- Investor Profile View --}}

	<div class="row">

		<div class="col-md-12">
			<div class="card card-profile card-secondary">
				<div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
					<div class="profile-picture">
						<div class="avatar avatar-xl">
							<img src="{{ $user->avatar }}" alt="..." class="avatar-img rounded-circle">
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="user-profile text-center">
						<div class="name">{{ $user->name }}</div>
						<div class="job">{{ $user->role_name }}</div>
					</div>
					<div class="row user-stats text-center">
						<div class="col">
							<div class="number">{{ '5 years' }}</div>
							<div class="title">Eartworm Member</div>
						</div>
						<div class="col">
							<div class="number">{{ '213' }}</div>
							<div class="title">Fundraisers Funded</div>
						</div>
						<div class="col">
							<div class="number">{{ $user->average_rating }}</div>
							<div class="title">Rating</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>

	{{-- Investor's Bio --}}

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title d-flex justify-content-between align-items-center">
						<h3 class="mb-0">Bio</h3>
						<a href="{{ route('profile.edit', $user->id) }}" class="btn btn-sm btn-primary text-white"><i class="fas fa-edit"></i></a>
					</div>
				</div>
				<div class="card-body">
					@if (isset($user->bio))
						<p>{{ $user->bio }}</p>
					@else
						<p class="text-muted">No bio entered!</p>
					@endif
				</div>
			</div>
		</div>
	</div>

	{{-- Investor's Bio Ends --}}

	{{-- Investor's Personal Details --}}

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Personal Details</div>
				</div>
				<div class="card-body">
					<form action="{{ route('profile.update', $user->id) }}" method="POST">
						@csrf
						@method('PUT')
						<input type="hidden" name="user_id" value="{{ $user->id }}">
						<input type="hidden" name="updated_by" value="{{ $user->id }}">
						<div class="row mt-3">
							<div class="col-md-12">
								<div class="form-group form-group-default">
									<label>Email</label>
									<input type="email" class="form-control" placeholder="Email" value="{{ $user->email }}" @if ($user->id == Auth::user()->id) disabled @endif>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							@if (isset($user->dob) || $user->id == Auth::user()->id)
								<div class="col">
									<div class="form-group form-group-default">
										<label>Birth Date</label>
										<input type="date" class="form-control" id="dob" name="dob" value="{{ $user->dob }}" placeholder="Birth Date">
									</div>
								</div>
							@endif
							@if (isset($user->gender) || $user->id == Auth::user()->id)
								<div class="col">
									<div class="form-group form-group-default">
										<label>Gender</label>
										<select class="form-control" id="gender" name="gender">
											<option value="1" @if ($user->gender == '1')
												selected
											@endif>Male</option>
											<option value="2" @if ($user->gender == '2')
												selected
											@endif>Female</option>
										</select>
									</div>
								</div>
							@endif
							@if (isset($user->phone_no) || $user->id == Auth::user()->id)
								<div class="col">
									<div class="form-group form-group-default">
										<label>Phone</label>
										<input type="text" class="form-control" value="{{ $user->phone_no }}" name="phone_no" placeholder="Phone">
									</div>
								</div>
							@endif
						</div>
						@isset($user->primary_address)
							<div class="row mt-3">
								<div class="col-md-12">
									<div class="form-group form-group-default">
										<label>Primary Address</label>
										<textarea class="form-control" placeholder="Address" disabled>{{ $user->primary_address->formattedAddressHTML() }}</textarea>
									</div>
								</div>
							</div>
						@endisset

						@if ($user->id == Auth::user()->id)
							<div class="text-left">
								<a href="{{ route('addresses.index') }}" class="btn btn-primary">Manage Addresses</a>
							</div>
							<div class="text-right mb-3">
								<button class="btn btn-success" type="submit">Save</button>
							</div>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>

	{{-- Investor's Personal Details Ends --}}

	{{-- Investor Profile View Ends --}}

@endif
@endsection
