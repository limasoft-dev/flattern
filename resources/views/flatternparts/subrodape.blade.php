@php
    $config = Http::get(config('app.api').'/api/getconfigs')->json();
@endphp

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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
        Desenvolvido por <a href="https://limasoft.pt/">LimaSoft, Lda</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @if (!($config['twitter'] == ""))
            <a href="{{$config['twitter']}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        @endif
        @if (!($config['facebook'] == ""))
            <a href="{{$config['facebook']}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        @endif
        @if (!($config['instagran'] == ""))
            <a href="{{$config['instagran']}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        @endif
        @if (!($config['skype'] == ""))
            <a href="{{$config['skype']}}" class="google-plus"><i class="bx bxl-skype"></i></a>
        @endif
        @if (!($config['linkedin'] == ""))
            <a href="{{$config['linkedin']}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        @endif







    </div>
  </div>
