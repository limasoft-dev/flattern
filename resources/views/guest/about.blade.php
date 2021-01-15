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
    <!-- End Breadcrumbs -->
    @include('flatternparts.about')
    @include('flatternparts.team')
    @include('flatternparts.skills')
    @include('flatternparts.clientes')
@endsection
