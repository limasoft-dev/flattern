@php
    $caminho = $config['mypath'].'api/getteams';
    $teams = Http::get($caminho)->json();
@endphp
<!-- ======= Our Team Section ======= -->
@if (!($teams == null))


    <section id="team" class="team section-bg">
        <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>{{$config['teamtitp1']}} <strong>{{$config['teamtitp2']}}</strong></h2>
            <p>{{$config['teamtexto']}}</p>
        </div>

        <div class="row">

            @foreach ($teams as $team)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                        <img src="{{asset('appimages/teams/'.$team['imagem'])}}" class="img-fluid" alt="">
                        <div class="social">
                            @if (!($team['twitter']==""))
                                <a href="{{$team['twitter']}}"><i class="icofont-twitter"></i></a>
                            @endif
                            @if (!($team['facebook']==""))
                                <a href="{{$team['facebook']}}"><i class="icofont-facebook"></i></a>
                            @endif
                            @if (!($team['instagram']==""))
                                <a href="{{$team['instagram']}}"><i class="icofont-instagram"></i></a>
                            @endif
                            @if (!($team['linkedin']==""))
                                <a href="{{$team['linkedin']}}"><i class="icofont-linkedin"></i></a>
                            @endif
                        </div>
                        </div>
                        <div class="member-info">
                        <h4>{{$team['nome']}}</h4>
                        <span>{{$team['funcao']}}</span>
                        </div>
                    </div>
                </div>
            @endforeach






        </div>

        </div>
    </section><!-- End Our Team Section -->
@endif
