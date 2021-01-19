@extends('layouts.sbadmin2')

@section('pagetitle')
    Dashboard
@endsection

@section('content')
    @include('sbadmin2parts.resume')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Em desenvolvimento</h6>
        </div>
        <div class="card-body">
            <p>p tipo normal.</p>
            <p class="mb-0">p tipo mb-0.</p>
        </div>
    </div>
@endsection
