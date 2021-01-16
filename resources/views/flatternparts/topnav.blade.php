<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">
        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{route('inicio')}}">
                @if (!($config['shortname'] == ""))
                    {{ $config['shortname'] }}
                @else
                    {{ config('app.name', 'Laravel') }}
                @endif

            </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li @if ($page == "home") class="active" @endif><a href="{{route('inicio')}}">Início</a></li>
                <li @if ($page == "about") class="active" @endif><a href="{{route('about')}}">Sobre Nós</a></li>
                <li @if ($page == "servicos") class="active" @endif><a href="#">Serviços</a></li>
                <li @if ($page == "portefolio") class="active" @endif><a href="#">Portefólio</a></li>
                <li @if ($page == "testemunhos") class="active" @endif><a href="#">Testemunhos</a></li>
                <li @if ($page == "precos") class="active" @endif><a href="#">Preços</a></li>
                <li @if ($page == "noticias") class="active" @endif><a href="#">Notícias</a></li>
                <!--
                <li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="drop-down"><a href="#">Drop Down 2</a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                -->
                <li @if ($page == "contactos") class="active" @endif><a href="#">Contactos</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="drop-down"><a href="#">{{Auth::User()->name}}</a>
                        <ul>
                            @if (Auth::User()->utype === 'SAD')
                                {{--SUPERADM--}}
                                <li><a href="{{route('sad.dashboard')}}">Superadmin</a></li>
                            @else
                                @if (Auth::User()->utype === 'ADM')
                                    {{--ADMIN--}}
                                    <li><a href="{{route('adm.dashboard')}}">Admin</a></li>
                                @else
                                    {{--USER--}}
                                    <li><a href="{{route('usr.dashboard')}}">User</a></li>
                                @endif
                            @endif
                            <li>
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" action="{{route('logout')}}" method="post">
                                @csrf
                            </form>
                        </ul>
                    @else
                        <li><a href="{{route('login')}}">Área Cliente</a></li>
                    @endauth
                @endif
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
