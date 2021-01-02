@php
    $caminho = __('appconfig.mypath').'api/getservicos';
    $servicos = Http::get($caminho)->json();
    $caminho = __('appconfig.mypath').'api/getlinks';
    $links = Http::get($caminho)->json();
@endphp
<!-- ======= Footer ======= -->


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>
                @if (!(__('appconfig.shortname') == ""))
                    {{ __('appconfig.shortname') }}
                @else
                    {{ config('app.name', 'Laravel') }}
                @endif
            </h3>
            <p>
                {{ __('appconfig.morada') }} <br>
                {{ __('appconfig.cpostal') }} {{ __('appconfig.localidade') }}<br>
              <br>
              <strong>Telefone:</strong> {{ __('appconfig.telefone') }}<br>
              <strong>Email:</strong> {{ __('appconfig.email') }}<br>
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
            <h4>{{ __('appconfig.newslttit') }}</h4>
            <p>{{ __('appconfig.newslttexto') }}</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscrever">
            </form>
          </div>

        </div>
      </div>
    </div>
