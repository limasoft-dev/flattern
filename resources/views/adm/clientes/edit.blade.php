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
                    <h6 class="m-0 font-weight-bold text-primary">Detalhe do cliente</h6>
                </div>
                <div class="card-body">
                    <form name="fclientes" action="{{route('clientes.update',$cliente->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="form-group">
                                    <label for="cliente">Cliente</label>
                                    <input type="text" class="form-control" name="cliente" value="{{$cliente->cliente}}">
                                    @error('cliente')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    @if ($cliente->imagem == null)
                                        <img src="{{asset('appimages/semimagem.png')}}" class="img-fluid">
                                    @else
                                        <img src="{{asset('appimages/clientes/'.$cliente->imagem)}}" class="img-fluid">
                                    @endif
                                    <label for="imagem">Alterar Imagem</label>
                                    <input type="file" class="form-control" name="imagem">
                                    <small class="form-text text-muted">Dimensão imagem obrigatória 800x600.</small>
                                    @error('imagem')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>


                            </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Confirmar</span>
                                </button>
                                <a href="{{route('clientes.index')}}" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-undo"></i>
                                    </span>
                                    <span class="text">Voltar</span>
                                </a>
                    </form>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-split float-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Eliminar cliente</span>
                                    </button>
                                </form>
                            </div>

                        </div>


                </div>
            </div>



        </div>


    </div>
@endsection
