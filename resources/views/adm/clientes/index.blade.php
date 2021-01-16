@extends('layouts.sbadmin2')

@section('pagetitle')
    Clientes
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
                    <form name="fclientes" action="{{route('titclientes.update',1)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label for="cltitp1">Normal</label>
                                    <input type="text" class="form-control" name="cltitp1" value="{{$dados['cltitp1']}}">
                                    @error('cltitp1')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="cltitp2">Destaque</label>
                                    <input type="text" class="form-control" name="cltitp2" value="{{$dados['cltitp2']}}">
                                    @error('cltitp2')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <label for="cltexto">Destaque</label>
                                    <input type="text" class="form-control" name="cltexto" value="{{$dados['cltexto']}}">
                                    @error('cltexto')
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
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
                </div>
                <div class="card-body">
                    <a href="{{route('clientes.create')}}" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Cliente</span>
                    </a>
                    <div class="my-2"></div>

                    <div class="row">
                        @foreach ($clientes as $cliente)
                            <div class="col-lg-2 mb-4">
                                <div class="card">
                                    <img src="{{asset('appimages/clientes/'.$cliente->imagem)}}" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">{{$cliente->cliente}}</p>
                                        <a href="{{route('clientes.edit',$cliente->id)}}" class="btn btn-warning btn-icon-split float-right">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-pen"></i>
                                            </span>
                                            <span class="text">Alterar cliente</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
