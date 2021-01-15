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
            <a href="{{route('destaques.create')}}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Destaque</span>
            </a>
            <div class="my-2"></div>

            @foreach ($heros as $hero)
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapse{{$hero->id}}" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <span class="badge badge-pill badge-primary">{{$hero->ordem}}</span>
                            {{$hero->titulo}}
                        </h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapse{{$hero->id}}">
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
                                    <div class="form-group">
                                      <label for="">Descrição</label>
                                      <textarea class="form-control" rows="5" disabled>{{$hero->texto}}</textarea>
                                    </div>
                                    <label></label>

                                    <div class="form-group">
                                      <label for="">Link</label>
                                      <a name="" id="" class="btn btn-primary btn-block" href="{{$hero->link}}" target="blank" role="button">{{$hero->link}}</a>
                                      <small id="helpId" class="text-muted">Prima o botão para testar o link</small>
                                    </div>
                                    <label></label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <a href="{{route('destaques.edit',$hero->id)}}" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Alterar destaque</span>
                                    </a>
                                </div>
                                <div class="col-lg-8 mb-4">
                                    <form action="{{route('destaques.destroy',$hero->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Eliminar destaque</span>
                                        </button>
                                    </form>
                                </div>
                            </div>





                            <div class="my-2"></div>

                        </div>
                    </div>
                </div>
            @endforeach




        </div>


    </div>
@endsection
