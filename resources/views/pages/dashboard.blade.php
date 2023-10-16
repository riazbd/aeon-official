@extends('layouts.admin')

@section('content')
    <div class="row content-wraper">
        <div class="col-md-4">
            <div class="link-wraper">
                <p><a href="{{ route('critical-path') }}" class="nav-link">Critical List</a></p>
            </div>

        </div>
        <div class="col-md-4">
            <div class="link-wraper">
                <p>
                    <a href="{{ route('vendor-list') }}" class="nav-link"> Buyers</a>
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="link-wraper">
                <p>
                    <a href="{{ route('vendor-list') }}" class="nav-link">Vendors </a>
                </p>
            </div>
        </div>
    </div>
@endsection
