@extends('layouts.sbadmin2')

@section('pagetitle')
    Chamada Horizontal
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
                    <h6 class="m-0 font-weight-bold text-primary">Chamada Horizontal</h6>
                </div>
                <div class="card-body">
                    <form name="fchamadah" action="{{route('chamadah.update',1)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="twitter">Titulo</label>
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="chtitp1" value="{{$dados['chtitp1']}}">
                                    @error('chtitp1')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="chtitp2" value="{{$dados['chtitp2']}}">
                                    @error('chtitp2')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="chtitp3" value="{{$dados['chtitp3']}}">
                                    @error('chtitp3')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="chtexto">Descrição</label>
                            <input type="text" class="form-control" name="chtexto" value="{{$dados['chtexto']}}">
                            @error('chtexto')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="chtxtlink">Texto visível no botão</label>
                            <input type="text" class="form-control" name="chtxtlink" value="{{$dados['chtxtlink']}}">
                            @error('chtxtlink')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="chlink">Link</label>
                            <input type="url" class="form-control" name="chlink" value="{{$dados['chlink']}}">
                            @error('chlink')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Alterações</button>
                    </form>
                </div>
            </div>



        </div>


    </div>
@endsection
