@php
    $caminho = $config['mypath'].'api/getclientes';
    $clientes = Http::get($caminho)->json();
@endphp

<!-- ======= Our Clients Section ======= -->
@if (count($clientes)>0)
    <section id="clients" class="clients">
        <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>{{$config['cltitp1']}} <strong>{{$config['cltitp2']}} </strong></h2>
            <p>{{$config['cltexto']}}.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

            @foreach ($clientes as $cliente)
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('appimages/clientes/'.$cliente['imagem'])}}" class="img-fluid" alt="">
                    </div>
                </div>
            @endforeach




        </div>

        </div>
    </section><!-- End Our Clients Section -->
@endif
