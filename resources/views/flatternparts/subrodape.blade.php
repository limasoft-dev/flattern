<div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>
            @if (!($config['shortname'] == ""))
                {{ $config['shortname'] }}
            @else
                {{ config('app.name', 'Laravel') }}
            @endif
        </span></strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        Desenvolvido por <a href="https://limasoft.pt/">LimaSoft, Lda</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
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
            <a href="{{$config['skype']}}" class="google-plus"><i class="icofont-skype"></i></a>
        @endif
        @if (!($config['linkedin'] == ""))
            <a href="{{$config['linkedin']}}" class="linkedin"><i class="icofont-linkedin"></i></a>
        @endif
        @if (!($config['smugmug'] == ""))
            <a href="{{$config['smugmug']}}" class="smugmug"><i class="icofont-smugmug"></i></a>
        @endif







    </div>
  </div>
