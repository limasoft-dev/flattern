@extends('layouts.flattern')

@section('head')
    @php
        $page = "home";
        $config = Http::get(config('app.api').'/api/getconfigs')->json();
    @endphp
@endsection

@section('content')
    @include('flatternparts.hero')
    @include('flatternparts.chamadah')
    @include('flatternparts.servicos')
    @include('flatternparts.portfolio')
    @include('flatternparts.clientes')
@endsection
