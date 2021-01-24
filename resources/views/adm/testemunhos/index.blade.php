@extends('layouts.sbadmin2')

@section('pagetitle')
    Testemunhos
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
                    <form name="ftestemunhos" action="{{route('tittestemunhos.update',1)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label for="testemunhotitp1">Normal</label>
                                    <input type="text" class="form-control" name="testemunhotitp1" value="{{$dados['testemunhotitp1']}}">
                                    @error('testemunhotitp1')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="testemunhotitp2">Destaque</label>
                                    <input type="text" class="form-control" name="testemunhotitp2" value="{{$dados['testemunhotitp2']}}">
                                    @error('testemunhotitp2')
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
                    <h6 class="m-0 font-weight-bold text-primary">Testemunhos</h6>
                </div>
                <div class="card-body">
                    <a href="{{route('testemunhos.create')}}" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Testemunho</span>
                    </a>
                    <div class="my-2"></div>

                    <div class="row">
                        @foreach ($testemunhos as $testemunho)
                            <div class="col-lg-2 mb-4">
                                <div class="card">
                                    <img src="{{asset('appimages/testemunhos/'.$testemunho->imagem)}}" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">{{$testemunho->ordem}} | {{$testemunho->nome}}</p>
                                        <p class="card-text">{{$testemunho->funcao}}</p>
                                        <p class="card-text">{{$testemunho->testemunho}}</p>
                                        <a href="{{route('testemunhos.edit',$testemunho->id)}}" class="btn btn-warning btn-icon-split float-right">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-pen"></i>
                                            </span>
                                            <span class="text">Alterar team</span>
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
