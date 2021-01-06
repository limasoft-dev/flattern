@extends('layouts.flattern')

@section('head')
    @php
        $page = "home";
    @endphp
@endsection

@section('content')
    @include('flatternparts.hero')
    @include('flatternparts.chamadah')
    @include('flatternparts.servicos')
    @include('flatternparts.portfolio')
    @include('flatternparts.clientes')
@endsection
