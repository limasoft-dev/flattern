@extends('layouts.sbadmin2')

@section('pagetitle')
    Contactos
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
        <div class="col-lg-6 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Entidade</h6>
                </div>
                <div class="card-body">
                    <form name="fentidade" action="{{route('entidade.update',1)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="shortname">Nome Curto</label>
                            <input type="text" class="form-control" name="shortname" value="{{$dados['shortname']}}">
                            @error('shortname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="longname">Nome Completo</label>
                            <input type="text" class="form-control" name="longname" value="{{$dados['longname']}}">
                            @error('longname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mypath">App Path</label>
                            <input type="text" class="form-control" name="mypath" value="{{$dados['mypath']}}">
                            @error('mypath')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Alterações</button>
                    </form>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Morada</h6>
                </div>
                <div class="card-body">
                    <form name="fmorada" action="{{route('morada.update',1)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="morada">Morada</label>
                            <input type="text" class="form-control" name="morada" value="{{$dados['morada']}}">
                            @error('morada')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cpostal">Código Postal</label>
                            <input type="text" class="form-control" name="cpostal" value="{{$dados['cpostal']}}">
                            @error('cpostal')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="localidade">Localidade</label>
                            <input type="text" class="form-control" name="localidade" value="{{$dados['localidade']}}">
                            @error('localidade')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Alterações</button>
                    </form>

                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Contactos</h6>
                </div>
                <div class="card-body">
                    <form name="femailphone" action="{{route('emailphone.update',1)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$dados['email']}}">
                            @error('email')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="emailsec">Email Alternativo</label>
                            <input type="emailsec" class="form-control" name="emailsec" value="{{$dados['emailsec']}}">
                            @error('emailsec')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" value="{{$dados['telefone']}}">
                            @error('telefone')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telefonesec">Telefone Alternativo</label>
                            <input type="text" class="form-control" name="telefonesec" value="{{$dados['telefonesec']}}">
                            @error('telefonesec')
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

