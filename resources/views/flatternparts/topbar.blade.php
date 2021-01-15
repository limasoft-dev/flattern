<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            @if (!($config['email'] == ""))
                <i class="icofont-envelope"></i><a href="mailto:contact@example.com">{{ $config['email'] }}</a>
            @endif
            @if (!($config['telefone'] == ""))
            <i class="icofont-phone"></i> {{ $config['telefone'] }}
            @endif


        </div>
        <div class="social-links">
            @if (!($config['twitter'] == ""))
                <a href="{{$config['twitter']}}" class="twitter"><i class="icofont-twitter"></i></a>
            @endif
            @if (!($config['facebook'] == ""))
                <a href="{{$config['facebook']}}" class="facebook"><i class="icofont-facebook"></i></a>
            @endif
            @if (!($config['instagran'] == ""))
                <a href="{{$config['instagran']}}" class="instagram"><i class="icofont-instagram"></i></a>
            @endif
            @if (!($config['skype'] == ""))
                <a href="{{$config['skype']}}" class="skype"><i class="icofont-skype"></i></a>
            @endif
            @if (!($config['linkedin'] == ""))
                <a href="{{$config['linkedin']}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            @endif




      </div>
    </div>
  </section>
