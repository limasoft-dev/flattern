@php
    $caminho = __('appconfig.mypath').'api/getservicos';
    $servicos = Http::get($caminho)->json();
    $delay = 0;
@endphp
<!-- ======= Services Section ======= -->
{{--@if (count($servicos)>0)--}}
    <section id="services" class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>{{ __('appconfig.servtitp1')}} <strong>{{ __('appconfig.servtitp2')}}</strong></h2>
            </div>
            <div class="row">
                @foreach ($servicos as $servico)
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="{{$delay}}">
                            <div class="icon"><i class="{{$servico['icon']}}"></i></div>
                            <h4 class="title"><a href="{{$servico['link']}}">{{$servico['titulo']}}</a></h4>
                            <p class="description">{{$servico['texto']}}</p>
                        </div>
                    </div>
                    @php
                        $delay += 100;
                    @endphp
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->
{{--@endif--}}
