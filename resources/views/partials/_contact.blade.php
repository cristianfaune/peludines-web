<!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Contacto</h1>
        <div class="col-md-6">

          <div class="map-section">
            <iframe class="map-section" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13377.619458966206!2d-71.57279263658681!3d-33.04580641151322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689de1f15c5489f%3A0xb00b098a9d7c4630!2sBorinquen%2C+Vi%C3%B1a+del+Mar%2C+Regi%C3%B3n+de+Valpara%C3%ADso!5e0!3m2!1ses-419!2scl!4v1477793377069"
            width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="social-network">

          </div>

        </div>
        <div class="col-md-4 col-md-offset-1">
          {!! Form::open(['url' => 'foo/bar']) !!}
          {{ Form::label('name', 'Nombre:')}}
          {{Form::text('name',null, array('class'=>'form-control'))}}
          <br>
          {{ Form::label('email', 'Email:')}}
          {{Form::text('email',null, array('class'=>'form-control'))}}
          <br>
          {{Form::label('message', 'Mensaje:')}}
          {{Form::textarea('message',null, array('class'=>'form-control'))}}
          <br>
          {{Form::submit('Enviar', array('class'=>'btn btn-default btn-success btn-block'))}}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</section>
