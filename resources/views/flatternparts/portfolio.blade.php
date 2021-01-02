@php
    $caminho = __('appconfig.mypath').'api/getcategorias';
    $categorias = Http::get($caminho)->json();
    $caminho = __('appconfig.mypath').'api/getportefolios';
    $portefolios = Http::get($caminho)->json();
@endphp
<!-- ======= Portfolio Section ======= -->
@if (count($portefolios)>0)
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>{{__('appconfig.pttitp1')}} <strong>{{__('appconfig.pttitp2')}}</strong></h2>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todas</li>
                        @foreach ($categorias as $categoria)
                            <li data-filter=".filter-{{$categoria['id']}}">{{$categoria['categoria']}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">
                @foreach ($portefolios as $portefolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portefolio['categoria_id']}}">
                        <img src="{{asset('flattern/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$portefolio['titulo']}}</h4>
                            <p>{{$portefolio['texto']}}</p>
                            <a href="{{asset('flattern/assets/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$portefolio['titulo']}}"><i class="bx bx-plus"></i></a>
                            <a href="{{$portefolio['link']}}" class="details-link" title="Mais detalhes"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endif
