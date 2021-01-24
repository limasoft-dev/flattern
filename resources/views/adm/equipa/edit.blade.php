@extends('layouts.sbadmin2')

@section('pagetitle')
    Equipa
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
                    <h6 class="m-0 font-weight-bold text-primary">Detalhe do membro</h6>
                </div>
                <div class="card-body">
                    <form name="fclientes" action="{{route('teams.update',$team->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="{{$team->nome}}">
                                    @error('nome')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="funcao">Função</label>
                                    <input type="text" class="form-control" name="funcao" value="{{$team->funcao}}">
                                    @error('funcao')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{$team->twitter}}">
                                    @error('twitter')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$team->facebook}}">
                                    @error('facebook')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$team->instagram}}">
                                    @error('instagram')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{$team->linkedin}}">
                                    @error('linkedin')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    @if ($team->imagem == null)
                                        <img src="{{asset('appimages/semimagem.png')}}" class="img-fluid">
                                    @else
                                        <img src="{{asset('appimages/teams/'.$team->imagem)}}" class="img-fluid">
                                    @endif
                                    <label for="imagem">Alterar Imagem</label>
                                    <input type="file" class="form-control" name="imagem">
                                    <small class="form-text text-muted">Dimensão imagem recomendada 600x600.</small>
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
                                <a href="{{route('teams.index')}}" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-undo"></i>
                                    </span>
                                    <span class="text">Voltar</span>
                                </a>
                    </form>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <form action="{{route('teams.destroy',$team->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-split float-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Eliminar membro</span>
                                    </button>
                                </form>
                            </div>

                        </div>


                </div>
            </div>



        </div>


    </div>
@endsection
