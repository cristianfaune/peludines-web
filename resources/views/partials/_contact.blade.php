<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contacto</h1>
                <div class="col-md-6">
                  <p>
                    Mapa
                  </p>
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
