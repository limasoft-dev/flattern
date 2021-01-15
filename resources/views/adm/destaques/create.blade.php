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

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detalhe do destaque</h6>
                </div>
                <div class="card-body">
                    <form name="fdestaques" action="{{route('destaques.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="form-group">
                                    <label for="titulo">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
                                    @error('titulo')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="texto">Descrição</label>
                                    <textarea class="form-control" name="texto" rows="5">
                                        {{old('texto')}}
                                    </textarea>
                                    @error('texto')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="form-group">
                                    <label for="imagem">Imagem</label>
                                    <input type="file" class="form-control" name="imagem">
                                    <small class="form-text text-muted">Dimensão imagem recomendada 1920x1088.</small>
                                    @error('imagem')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" name="link" value="{{old('link')}}">
                                    @error('link')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="ordem">ordem</label>
                                    <input type="number" class="form-control" name="ordem" value="{{old('ordem')}}">
                                    @error('ordem')
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
                        <a href="{{route('destaques.index')}}" class="btn btn-warning btn-icon-split">
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
