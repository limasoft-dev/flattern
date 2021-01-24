<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('inicio')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Voltar <sup>site</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('sad.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Configuração
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Perfil</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Personalizar:</h6>
                <a class="collapse-item" href="{{route('firma.contactos')}}">Contactos</a>
                <a class="collapse-item" href="{{route('firma.socials')}}">Redes Sociais</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Componentes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gerir:</h6>
                <a class="collapse-item" href="{{route('destaques.index')}}">Destaques</a>
                <a class="collapse-item" href="{{route('firma.chamadah')}}">Chamada</a>
                <a class="collapse-item" href="{{route('servicos.index')}}">Serviços</a>
                <a class="collapse-item" href="{{route('portefolios.index')}}">Portfólio</a>
                <a class="collapse-item" href="{{route('clientes.index')}}">Clientes</a>
                <a class="collapse-item" href="{{route('teams.index')}}">Equipa</a>
                <a class="collapse-item" href="{{route('testemunhos.index')}}">Testemunhos</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestão
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Interações</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Visitantes:</h6>
                <a class="collapse-item" href="#">Newsletter</a>
                <a class="collapse-item" href="#">Contactos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Estrutura</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Terapeutas:</h6>
                <a class="collapse-item" href="#">item</a>
                <a class="collapse-item" href="#">item</a>
            </div>
        </div>
    </li>

    {{--
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Interações</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Visitantes:</h6>
                <a class="collapse-item" href="#">Newsletter</a>
                <a class="collapse-item" href="#">Contactos</a>

                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Clientes:</h6>
                <a class="collapse-item" href="#">Marcações</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Newsletter</span></a>
    </li>
    --}}


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Agenda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="{{asset('sbadmin2/img/logo.png')}}" alt="">
        <p class="text-center mb-2">Use prioritariamente a nossa plataforma de apoio ao cliente para suporte!</p>
        <a class="btn btn-success btn-sm" href="#">ApoioCliente</a>
    </div>

</ul>
<!-- End of Sidebar -->
