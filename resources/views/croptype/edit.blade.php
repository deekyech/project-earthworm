@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Edit Crop</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Crop Details:</div>
            </div>
            <div class="card-body">
                <form action="{{ route('croptypes.update', $croptype->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="crop_id">Select Crop Category</label>
                                <select name="crop_id" id="crop_id" class="form-control">
                                    @foreach ( App\Crop::all() as $crop)
                                        <option value="{{ $crop->id }}" @if ($crop->id == $croptype->crop_id) selected @endif>{{ $crop->crop_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="crop_type_name">Crop Name:</label>
                                <input type="text" name="crop_type_name" id="crop_type_name" value="{{ $croptype->crop_type_name }}" class="form-control" placeholder="Enter Crop Name:" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
