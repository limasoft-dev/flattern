@extends('layouts.flattern')

@section('head')
    @php
        $page = "about";
        $config = Http::get(config('app.api').'/api/getconfigs')->json();
    @endphp
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sobre Nós</h2>
                <ol>
                <li><a href="{{route('inicio')}}">Início</a></li>
                <li>Sobre Nós</li>
                </ol>
            </div>

        </div>
    </section>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Em desenvolvimento</h6>
        </div>
        <div class="card-body">
            <p>p tipo normal.</p>
            <p class="mb-0">p tipo mb-0.</p>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    {{--
    @include('flatternparts.about')
    @include('flatternparts.team')
    @include('flatternparts.skills')
    @include('flatternparts.clientes')
    --}}
@endsection
