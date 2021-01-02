<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            @if (!(__('appconfig.email') == ""))
                <i class="icofont-envelope"></i><a href="mailto:contact@example.com">{{ __('appconfig.email') }}</a>
            @endif
            @if (!(__('appconfig.telefone') == ""))
            <i class="icofont-phone"></i> {{ __('appconfig.telefone') }}
            @endif


        </div>
        <div class="social-links">
            @if (!(__('appconfig.twitter') == ""))
                <a href="{{__('appconfig.twitter')}}" class="twitter"><i class="icofont-twitter"></i></a>
            @endif
            @if (!(__('appconfig.facebook') == ""))
                <a href="{{__('appconfig.facebook')}}" class="facebook"><i class="icofont-facebook"></i></a>
            @endif
            @if (!(__('appconfig.instagran') == ""))
                <a href="{{__('appconfig.instagran')}}" class="instagram"><i class="icofont-instagram"></i></a>
            @endif
            @if (!(__('appconfig.skype') == ""))
                <a href="{{__('appconfig.skype')}}" class="skype"><i class="icofont-skype"></i></a>
            @endif
            @if (!(__('appconfig.linkedin') == ""))
                <a href="{{__('appconfig.linkedin')}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            @endif




      </div>
    </div>
  </section>
