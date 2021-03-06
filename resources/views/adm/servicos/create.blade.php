@extends('layouts.sbadmin2')

@section('pagetitle')
    Serviços
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
                    <h6 class="m-0 font-weight-bold text-primary">Detalhe do serviço</h6>
                </div>
                <div class="card-body">
                    <form name="fservicos" action="{{route('servicos.store')}}" method="post">
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
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" name="link" value="{{old('link')}}">
                                    @error('link')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="texto">Descrição</label>
                                    <textarea class="form-control" name="texto" rows="2">
                                        {{old('texto')}}
                                    </textarea>
                                    @error('texto')
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

                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <div class="row">
                                        <div class="col-lg-9 mb-4">
                                            <input type="text" class="form-control" name="icon" value="{{old('icon')}}">
                                            @error('icon')
                                                <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <a href="https://icofont.com/icons" target="blank" class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Consultar icons</span>
                                            </a>
                                        </div>
                                    </div>

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
                        <a href="{{route('servicos.index')}}" class="btn btn-warning btn-icon-split">
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
