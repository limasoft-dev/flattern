<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset('flattern/assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('flattern/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('flattern/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            .meu {
                background-color: #d80618;
                color: #fff;
            }
            .meu:hover {
                background-color: #aa2934;
                color: rgb(228, 161, 161);
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="{{asset('logincss/signin.css')}}" rel="stylesheet">
    </head>
    <body class="text-center">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form class="form-signin" action="{{ route('login') }}" method="POST">
            @csrf
            <img class="mb-4" src="{{asset('appimages/logo.png')}}" width="300" height="300">
            <h1 class="h3 mb-3 font-weight-normal">Autentique-se por favor</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password">
            <div class="checkbox mb-3">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    Lembrar-me
                </label>
            </div>
            <button class="btn btn-lg btn-block meu" type="submit">Entrar</button>
        </form>
    </body>
</html>
