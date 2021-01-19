@php
    $caminho = $config['mypath'].'api/getservicos';
    $servicos = Http::get($caminho)->json();
    $caminho = $config['mypath'].'api/getlinks';
    $links = Http::get($caminho)->json();
@endphp
<!-- ======= Footer ======= -->


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>
                <img src="{{asset('appimages/logo.png')}}" width="50px" height="50px" alt="" class="img-fluid">
                @if (!($config['shortname'] == ""))
                    {{ $config['shortname'] }}
                @else
                    {{ config('app.name', 'Laravel') }}
                @endif
            </h3>
            <p>
                {{ $config['morada'] }} <br>
                {{ $config['cpostal'] }} {{ $config['localidade'] }}<br>
              <br>
              <strong>Telefone:</strong> {{ $config['telefone'] }}<br>
              <strong>Email:</strong> {{ $config['email'] }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links úteis</h4>
            <ul>
                @foreach ($links as $link)
                    <li><i class="bx bx-chevron-right"></i> <a href="{{$link['link']}}">{{$link['texto']}}</a></li>
                @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
                @foreach ($servicos as $servico)
                    <li><i class="bx bx-chevron-right"></i> <a href="{{$servico['link']}}">{{$servico['titulo']}}</a></li>
                @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>{{ $config['newslttit'] }}</h4>
            <p>{{ $config['newslttexto'] }}</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscrever">
            </form>
          </div>

        </div>
      </div>
    </div>
