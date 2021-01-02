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
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            @endif
            @if (!(__('appconfig.facebook') == ""))
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            @endif
            @if (!(__('appconfig.instagran') == ""))
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            @endif
            @if (!(__('appconfig.skype') == ""))
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            @endif
            @if (!(__('appconfig.linkedin') == ""))
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            @endif




      </div>
    </div>
  </section>
