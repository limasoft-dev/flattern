@extends('layouts.sbadmin2')

@section('pagetitle')
    Redes Sociais
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
                    <h6 class="m-0 font-weight-bold text-primary">Redes Sociais</h6>
                </div>
                <div class="card-body">
                    <form name="fsocials" action="{{route('socials.update',1)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{$dados['twitter']}}">
                            @error('twitter')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{$dados['facebook']}}">
                            @error('facebook')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="instagran">Instagran</label>
                            <input type="text" class="form-control" name="instagran" value="{{$dados['instagran']}}">
                            @error('instagran')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="skype">Skype</label>
                            <input type="text" class="form-control" name="skype" value="{{$dados['skype']}}">
                            @error('skype')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" value="{{$dados['linkedin']}}">
                            @error('linkedin')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="smugmug">Smugmug</label>
                            <input type="text" class="form-control" name="smugmug" value="{{$dados['smugmug']}}">
                            @error('smugmug')
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
