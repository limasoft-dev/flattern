<div class="map-section">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14745.788620852622!2d-8.804259314770874!3d39.01713387508746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd18e044f987a84f%3A0xcdffe609a51aeaf6!2sLIMASOFT%20Inform%C3%A1tica!5e0!3m2!1spt-PT!2spt!4v1611474772632!5m2!1spt-PT!2spt" frameborder="0" allowfullscreen></iframe>
  </div>

  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Localização:</h4>
                <p>{{$config['morada']}}<br>{{$config['cpostal']}}-{{$config['localidade']}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{$config['email']}}<br>{{$config['emailsec']}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Telefones:</h4>
                <p>{{$config['telefone']}}<br>{{$config['telefonesec']}}</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
            <form action="{{route('fcontactos.store')}}" method="post" class="contact-form">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu Nome" value="{{old('nome')}}"/>
                        @error('nome')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" value="{{old('email')}}"/>
                        @error('email')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" value="{{old('assunto')}}"/>
                    @error('assunto')
                        <div class="text-danger"><small>{{$message}}</small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="menssagem" rows="5" placeholder="Menssagem">{{old('menssagem')}}</textarea>
                    @error('menssagem')
                        <div class="text-danger"><small>{{$message}}</small></div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit">Enviar Menssagem</button>
                </div>
            </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
