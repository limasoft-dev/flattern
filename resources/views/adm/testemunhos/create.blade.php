@extends('layouts.sbadmin2')

@section('pagetitle')
    Testemunho
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
                    <h6 class="m-0 font-weight-bold text-primary">Detalhe do testemunho</h6>
                </div>
                <div class="card-body">
                    <form name="fteam" action="{{route('testemunhos.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
                                    @error('nome')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="funcao">Função</label>
                                    <input type="text" class="form-control" name="funcao" value="{{old('funcao')}}">
                                    @error('funcao')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="testemunho">Testemunho</label>
                                    <input type="text" class="form-control" name="testemunho" value="{{old('testemunho')}}">
                                    @error('testemunho')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="ordem">Ordem</label>
                                    <input type="number" class="form-control" name="ordem" value="{{old('ordem')}}">
                                    @error('ordem')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="imagem">Imagem</label>
                                    <input type="file" class="form-control" name="imagem">
                                    <small class="form-text text-muted">Dimensão imagem recomendada 400x400.</small>
                                    @error('imagem')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Confirmar</span>
                        </button>
                        <a href="{{route('testemunhos.index')}}" class="btn btn-warning btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-undo"></i>
                            </span>
                            <span class="text">Voltar</span>
                        </a>
                    </form>
                </div>
            </div>



        </div>


    </div>
@endsection
