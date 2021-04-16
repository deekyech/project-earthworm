@extends('layouts.base')

@section('page-content')
<h4 class="page-title">Add Crop Category</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Enter Crop Category Details:</div>
            </div>
            <div class="card-body">
                <form action="{{ route('crops.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="updated_by" value="{{ Auth::user()->id }}">
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label for="crop_name">Crop Category Name:</label>
                                <input type="text" name="crop_name" id="crop_name" class="form-control" placeholder="Enter Crop Category Name:" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Add Crop Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
