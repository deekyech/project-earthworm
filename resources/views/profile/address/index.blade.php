@extends('layouts.base')

@section('page-content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="page-title">User Addresses</h4>
    <a href="{{ route('addresses.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>

@if (isset($farming_addresses))
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Farming Addresses:</div>
			</div>
			<div class="card-body">
				{{-- <div class="card-sub">
					This is the basic table view of the ready dashboard :
				</div> --}}
				<table class="table mt-3">
					<thead>
						<tr>
							<th scope="col">Sr. No.</th>
							<th scope="col">Full Name</th>
							<th scope="col">Line 1</th>
							<th scope="col">Line 2</th>
							<th scope="col">Landmark</th>
							<th scope="col">City</th>
							<th scope="col">State</th>
							<th scope="col">Pincode</th>
							<th scope="col">Land_area</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $farming_addresses as $farming_address)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $farming_address->address->full_name }}</td>
								<td>{{ $farming_address->address->line_1 }}</td>
								<td>{{ $farming_address->address->line_2 }}</td>
								<td>{{ $farming_address->address->landmark }}</td>
								<td>{{ $farming_address->address->city }}</td>
								<td>{{ $farming_address->address->state }}</td>
								<td>{{ $farming_address->address->pincode }}</td>
								<td>{{ $farming_address->land_area }}</td>
								<td><a href="{{ route('addresses.edit', $farming_address->address_id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td>
                                    <form action="{{ route('addresses.destroy', $farming_address->address_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endif

@if (isset($residential_addresses))
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Residential Addresses:</div>
			</div>
			<div class="card-body">
				{{-- <div class="card-sub">
					This is the basic table view of the ready dashboard :
				</div> --}}
				<table class="table mt-3">
					<thead>
						<tr>
							<th scope="col">Sr. No.</th>
							<th scope="col">Full Name</th>
							<th scope="col">Line 1</th>
							<th scope="col">Line 2</th>
							<th scope="col">Landmark</th>
							<th scope="col">City</th>
							<th scope="col">State</th>
							<th scope="col">Pincode</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $residential_addresses as $residential_address)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $residential_address->address->full_name }}</td>
								<td>{{ $residential_address->address->line_1 }}</td>
								<td>{{ $residential_address->address->line_2 }}</td>
								<td>{{ $residential_address->address->landmark }}</td>
								<td>{{ $residential_address->address->city }}</td>
								<td>{{ $residential_address->address->state }}</td>
								<td>{{ $residential_address->address->pincode }}</td>
								<td><a href="{{ route('addresses.edit', $residential_address->address_id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td>
                                    <form action="{{ route('addresses.destroy', $residential_address->address_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endif

@endsection
