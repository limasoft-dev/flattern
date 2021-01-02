<!-- ======= Cta Section ======= -->
@if ((__('appconfig.chtitp1')<>"") or (__('appconfig.chtitp2')<>"") or (__('appconfig.chtitp3')<>""))


<section id="cta" class="cta">
    <div class="container">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>{{ __('appconfig.chtitp1')}} <span>{{ __('appconfig.chtitp2')}}</span> {{ __('appconfig.chtitp3')}}</h3>
          <p> {{ __('appconfig.chtexto')}}.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="{{ __('appconfig.chlink')}}">{{ __('appconfig.chtxtlink')}}</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->
@endif
