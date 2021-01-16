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
                    <h6 class="m-0 font-weight-bold text-primary">Titulo</h6>
                </div>
                <div class="card-body">
                    <form name="fservicos" action="{{route('titservicos.update',1)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label for="servtitp1">Normal</label>
                                    <input type="text" class="form-control" name="servtitp1" value="{{$dados['servtitp1']}}">
                                    @error('servtitp1')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="servtitp1">Destaque</label>
                                    <input type="text" class="form-control" name="servtitp2" value="{{$dados['servtitp2']}}">
                                    @error('servtitp2')
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
                    <h6 class="m-0 font-weight-bold text-primary">Serviços</h6>
                </div>
                <div class="card-body">
                    <a href="{{route('servicos.create')}}" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Serviço</span>
                    </a>
                    <div class="my-2"></div>


                    <table class="table table-hover table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Ações</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Ordem</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Link</th>
                            <th scope="col">Texto</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicos as $servico)
                                <tr>

                                    <td>
                                        <a href="{{route('servicos.edit',$servico->id)}}" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
                                    <td><div class="icon"><i class="{{$servico->icon}}"></i></div></th>
                                    <td><span class="badge badge-pill badge-primary">{{$servico->ordem}}</span></td>
                                    <td>{{$servico->titulo}}</td>
                                    <td>{{$servico->link}}</td>
                                    <td>{{$servico->texto}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>

    </div>

@endsection
