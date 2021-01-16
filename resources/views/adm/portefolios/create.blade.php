@extends('layouts.sbadmin2')

@section('pagetitle')
    Item de Portefólio
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
                    <h6 class="m-0 font-weight-bold text-primary">Detalhe do item de portefólio</h6>
                </div>
                <div class="card-body">
                    <form name="fportefolios" action="{{route('portefolios.store')}}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="texto" value="{{old('texto')}}">
                                    @error('texto')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="desenvolvimento">Desenvolvimento</label>
                                    <textarea class="form-control" name="desenvolvimento" rows="5">
                                        {{old('desenvolvimento')}}
                                    </textarea>
                                    @error('desenvolvimento')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="link">Categoria</label>
                                    <select class="form-control" name="categoria">
                                        @foreach ($categorias as $categoria)
                                            <option value="{{$categoria->id}}" @if ($categoria->id == old('categoria'))
                                                selected
                                            @endif>{{$categoria->categoria}}</option>
                                        @endforeach
                                    </select>

                                    @error('categoria')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="form-group">
                                    <label for="imagem">Imagem</label>
                                    <input type="file" class="form-control" name="imagem">
                                    <small class="form-text text-muted">Dimensão imagem obrigatória 800x600.</small>
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
                        <a href="{{route('portefolios.index')}}" class="btn btn-warning btn-icon-split">
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
