@php
    $caminho = $config['mypath'].'api/getservicos';
    $servicos = Http::get($caminho)->json();
    $delay = 0;
@endphp
@if (($config['servtitp1']<>"") or ($config['servtitp2']<>""))
    <section id="services" class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>{{ $config['servtitp1']}} <strong>{{ $config['servtitp2']}}</strong></h2>
            </div>
            <div class="row">
                @foreach ($servicos as $servico)
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="{{$delay}}">
                            <div class="icon"><i class="{{$servico['icon']}}"></i></div>
                            @if ($servico['link']=="")
                                <h4 class="title">{{$servico['titulo']}}</h4>
                            @else
                                <h4 class="title"><a href="{{$servico['link']}}">{{$servico['titulo']}}</a></h4>
                            @endif
                            <p class="description">{{$servico['texto']}}</p>
                        </div>
                    </div>
                    @php
                        $delay += 100;
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
@endif

