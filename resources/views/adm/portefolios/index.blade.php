@extends('layouts.sbadmin2')

@section('pagetitle')
    Portfólio
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
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Titulo</h6>
                </div>
                <div class="card-body">
                    <form name="fportfolio" action="{{route('titportefolio.update',1)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label for="pttitp1">Normal</label>
                                    <input type="text" class="form-control" name="pttitp1" value="{{$dados['pttitp1']}}">
                                    @error('pttitp1')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="pttitp2">Destaque</label>
                                    <input type="text" class="form-control" name="pttitp2" value="{{$dados['pttitp2']}}">
                                    @error('pttitp2')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Alterações</button>
                    </form>



                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <a href="{{route('categorias.create')}}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Categoria</span>
            </a>
            <a href="{{route('portefolios.create')}}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Item de Portfólio</span>
            </a>
            <div class="my-2"></div>

            @foreach ($categorias as $categoria)
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapse{{$categoria->id}}" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{$categoria->categoria}}
                        </h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapse{{$categoria->id}}">
                        <div class="card-body">
                            
                            <a href="{{route('categorias.edit',$categoria->id)}}" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Alterar Categoria</span>
                            </a>
                            <div class="my-2"></div>

                            <div class="row">
                                @foreach ($categoria->portefolios as $portefolio)
                                    <div class="col-lg-3 col-md-6 mb-2">
                                        <div class="card">
                                            <img src="{{asset('appimages/portfolio/'.$portefolio->imagem)}}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$portefolio->titulo}}</h5>
                                                <p class="card-text">{{$portefolio->texto}}</p>
                                                <a href="{{route('portefolios.edit',$portefolio->id)}}" class="btn btn-warning btn-icon-split float-right">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                    <span class="text">Alterar Item</span>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach


                            </div>



                        </div>
                    </div>
                </div>
            @endforeach




        </div>


    </div>
@endsection
