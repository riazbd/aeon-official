@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <button class="btn btn-primary"><a href="{{ route('add-critical-path') }}" class="nav-link">Add New</a></button>
        </div>
    </div>
</div>

@endsection