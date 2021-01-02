<div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>
            @if (!(__('appconfig.shortname') == ""))
                {{ __('appconfig.shortname') }}
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
        @if (!(__('appconfig.twitter') == ""))
            <a href="{{__('appconfig.twitter')}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        @endif
        @if (!(__('appconfig.facebook') == ""))
            <a href="{{__('appconfig.facebook')}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        @endif
        @if (!(__('appconfig.instagran') == ""))
            <a href="{{__('appconfig.instagran')}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        @endif
        @if (!(__('appconfig.skype') == ""))
            <a href="{{__('appconfig.skype')}}" class="google-plus"><i class="bx bxl-skype"></i></a>
        @endif
        @if (!(__('appconfig.linkedin') == ""))
            <a href="{{__('appconfig.linkedin')}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        @endif







    </div>
  </div>
