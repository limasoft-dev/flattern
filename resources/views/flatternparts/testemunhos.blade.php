@php
    $caminho = $config['mypath'].'api/gettestemunhos';
    $testemunhos = Http::get($caminho)->json();
@endphp
<!-- ======= Our Team Section ======= -->
@if (!($testemunhos == null))
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>{{$config['testemunhotitp1']}} <strong>{{$config['testemunhotitp2']}}</strong></h2>

            </div>
        <div class="row">
            @foreach ($testemunhos as $testemunho)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="testimonial-item">
                        <img src="{{asset('appimages/testemunhos/'.$testemunho['imagem'])}}" class="testimonial-img" alt="">
                        <h3>{{$testemunho['nome']}}</h3>
                        <h4>{{$testemunho['funcao']}}</h4>
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{$testemunho['testemunho']}}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
            @endforeach




        </div>

        </div>
    </section><!-- End Testimonials Section -->
@endif
