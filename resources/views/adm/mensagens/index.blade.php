@extends('layouts.sbadmin2')

@section('pagetitle')
    Contactos
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
            Contactos Abertos
            <div class="my-2"></div>

            @forelse ($abertos as $aberto)
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapse{{$aberto->id}}" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <b>Assunto: </b>
                            {{$aberto->assunto}}<br>
                            <span class="badge badge-pill badge-primary">Enviado {{$aberto->created_at->diffForHumans()}}</span>
                        </h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapse{{$aberto->id}}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            {{$aberto->nome}}</br>{{$aberto->email}}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Assunto: </b>{{$aberto->assunto}}</h5>
                                            <p class="card-text"><b>Mensagem:<hr> </b>{{$aberto->menssagem}}.<hr></p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="btn btn-warning btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-pen"></i>
                                                </span>
                                                <span class="text">Responder</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-pen"></i>
                                                </span>
                                                <span class="text">Arquivar sem responder</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-2"></div>

                        </div>
                    </div>
                </div>
            @empty
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                        Bom trabalho! Não tem contactos pendentes!
                    </div>
                </div>
            @endforelse




        </div>


    </div>

@endsection
