@extends('layouts.sbadmin2')

@section('pagetitle')
    Destaques
@endsection

@section('content')
    @if (session('success'))
        <div class="card bg-success text-white shadow">
            <div class="card-body">
                {{ session('success') }}

            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 mb-4">
            <a href="#">Create</a>

            @foreach ($heros as $hero)
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapse{{$hero->id}}" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">{{$hero->titulo}}</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapse{{$hero->id}}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    @if ($hero->imagem == null)
                                        <img src="{{asset('appimages/semimagem.png')}}" alt="{{$hero->intro}}" class="img-fluid">
                                    @else
                                        <img src="{{asset('appimages/destaques/'.$hero->imagem)}}" alt="{{$hero->intro}}" class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-lg-8 mb-4">
                                    {{$hero->texto}}<br>
                                    <a name="" id="" class="btn btn-primary" href="" role="button">{{$hero->link}}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach




        </div>


    </div>
@endsection
