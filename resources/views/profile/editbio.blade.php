@extends('layouts.base')
@section('page-content')
<h4 class="page-title">Edit bio</h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('profile.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="row mb-3">
                <div class="col-md-12">
                    <textarea name="bio" id="bio" placeholder="Enter Bio..." class="form-control">{{ $user->bio }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
