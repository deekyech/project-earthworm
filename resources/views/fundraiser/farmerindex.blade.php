@extends('layouts.base')
@section('page-content')
<h4 class="page-title">My Fundraisers</h4>
<div class="d-flex justify-content-end align-items-center">
    <a href="{{ route('fundraiser.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>

@include('fundraiser._index')
@endsection
