@extends('layouts.sbadmin2')

@section('pagetitle')
    Categorias
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
                    <h6 class="m-0 font-weight-bold text-primary">Detalhe da categoria</h6>
                </div>
                <div class="card-body">
                    <form name="fcategorias" action="{{route('categorias.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label for="categoria">categoria</label>
                                    <input type="text" class="form-control" name="categoria" value="{{old('categoria')}}">
                                    @error('categoria')
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
