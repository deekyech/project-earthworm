@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Crops</h4>
@isset($croptypes)
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Available Crops</h3>
                        <a href="{{ route('croptypes.create') }}" class="btn btn-sm btn-primary text-white"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($croptypes) != 0)
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Sr. No.</th>
                                    <th scope="col">Crop Category Name</th>
                                    <th scope="col">Crop Name</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $croptypes as $croptype )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $croptype->crop->crop_name }}</td>
                                        <td>{{ $croptype->crop_type_name }}</td>
                                        <td><a href="{{ route('croptypes.edit', $croptype->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                                        <td>
                                            <form action="{{ route('croptypes.destroy', $croptype->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-muted font-italic">No crops found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endisset
@endsection
