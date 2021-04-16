@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Edit Crop Category</h4>
@isset($crop)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Crop Category Details:</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('crops.update', $crop->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group form-group-default">
                                    <label for="crop_name">Crop Category Name:</label>
                                    <input type="text" name="crop_name" id="crop_name" class="form-control" value="{{ $crop->crop_name }}" placeholder="Enter Crop Category Name:" required>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endisset
@endsection
