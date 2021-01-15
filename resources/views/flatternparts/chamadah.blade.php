<!-- ======= Cta Section ======= -->
@if (($config['chtitp1']<>"") or ($config['chtitp2']<>"") or ($config['chtitp3']<>""))
<section id="cta" class="cta">
    <div class="container">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>{{$config['chtitp1']}} <span>{{$config['chtitp2']}}</span> {{$config['chtitp3']}}</h3>
          <p> {{$config['chtexto']}}.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="{{$config['chlink']}}">{{$config['chtxtlink']}}</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->
@endif
