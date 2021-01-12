@extends('layouts.sbadmin2')

@section('pagetitle')
    Contactos
@endsection

@section('content')
    @if (session('success'))
        <div class="card bg-success text-white shadow">
            <div class="card-body">
                {{ session('success') }}
                <div class="text-white-50 small">#1cc88a</div>
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
                    <form>
                        <div class="form-group">
                        <label for="morada">Morada</label>
                        <input type="text" class="form-control" id="morada" value="{{$dados['morada']}}">
                        </div>
                        <div class="form-group">
                            <label for="cpostal">Códido Postal</label>
                            <input type="text" class="form-control" id="cpostal" value="{{$dados['cpostal']}}">
                        </div>
                        <div class="form-group">
                            <label for="localidade">Localidade</label>
                            <input type="text" class="form-control" id="localidade" value="{{$dados['localidade']}}">
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
                    <form>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{$dados['email']}}">
                        </div>
                        <div class="form-group">
                            <label for="emailsec">Email Alternativo</label>
                            <input type="email" class="form-control" id="emailsec" value="{{$dados['emailsec']}}">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" value="{{$dados['telefone']}}">
                        </div>
                        <div class="form-group">
                            <label for="telefonesec">Telefone Alternativo</label>
                            <input type="text" class="form-control" id="telefonesec" value="{{$dados['telefonesec']}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Alterações</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
