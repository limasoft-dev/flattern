@php
    $config = Http::get(config('app.api').'/api/getconfigs')->json();
    $caminho = $config['mypath'].'api/getheros';
    $heros = Http::get($caminho)->json();
    $primeiro = 0;
@endphp
<!-- ======= Hero Section ======= -->
@if (count($heros)>0)
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                @foreach ($heros as $hero)
                    <div class="carousel-item <?php if ($primeiro == 0) { echo"active";$primeiro=1;}?>" style="background-image: url({{asset('flattern/assets/img/slide/slide-1.jpg')}});">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2>{{$hero['titulo']}}</h2>
                                <p>{{$hero['texto']}}.</p>
                                <div class="text-center"><a href="{{$hero['linke']}}" class="btn-get-started">Saber mais</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->
@endif
