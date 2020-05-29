<!doctype html>
<html lang="es">

  @include('header')

  <body>

  @include('tops.top-free')


  <!--BANNER-->

  <div id="banner-reservas">
    <div class="container-fluid no-container-fluid-esp banner-reservas">
      <div class="centrar-banner-reservas">
        <div class="tipo-de-perfil">PERFIL {{$perfil->nombre_plan}}</div>
        <h2>{{ $perfil->nombre }}</h2>
        <h3>"{{ $perfil->frase }}"</h3>

          @if(Auth::check())
            @if (Auth::user()->idrol == 3 )
              <a href="">FAVORITO<i class="icon-heart"></i></a>
            @endif
          @endif

        <div class="sellos">
          @if($perfil->verificado)
            <img src="{{ asset('img/perfil-averiguado.png') }}">
          @endif
          @if($perfil->sanidad)
            <img src="{{ asset('img/control-sanitario.png') }}">
          @endif
        
        </div>
      </div>
    </div>
  </div>

  <!--CHICAS-->

  <section>

    <div class="container">
      <div class="cabecera-chicas">
        <div class="navegacion-cabecera-chicas">
          <div class="botones-cabecera-chicas">
            <a href="{{url('/')}}">Inicio</a>
            <span><i class="fa fa-angle-right"></i></span>
            <a href="#" class="cabecera-chicas-active">{{ $perfil->nombre }}</a>
          </div>
          <div class="reserva-fecha">{{ date("l d, Y")}} | <!-- <i class="icon-podium esp-icono-bio fucsia"></i> --><time>{{ date("H:i")}}</time><a class="" data-toggle="modal" data-target="#denunciar"><i class="icon-danger espacio-busqueda red-denunciar"></i></a></div>
        </div>
      </div>
    </div>


    <div class="container">
    
      <div class="row" id="main-perfil">
        <div class="col-lg-4" id="sidebar">
            <div class="sidebar__inner">

              <!-- Content goes here -->

              <div class="espacio-reservas">
                <ul id="thumbnail_list">

                     @foreach($fotos as $foto)
													<li>
														<img src="{{ asset('fotos_profesionales').'/'.$foto->url_foto }} " class="img-responsive" />
														<a class="nunca-mostrar" data-fancybox="gallery" href="{{ asset('fotos_profesionales').'/'.$foto->url_foto }}" data-caption="Sexy Woman"></a>
                          </li>
										@endforeach

                </ul>
              </div>

                  <div class="espacio-reservas">
                    <h2 class="subtitulo-reservas">PERFIL</h2>
                    <div class="reserva-info">
                      <ul>
                        <li>
                          <div class="reserva-info-morado">Sexo</div>
                          <div class="reserva-info-plomo">{{ $perfil->sexo }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Orientación</div>
                          <div class="reserva-info-plomo">{{ $perfil->orientacion }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Nacionalidad</div>
                          <div class="reserva-info-plomo">{{ $perfil->name_country }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Ciudad</div>
                          <div class="reserva-info-plomo">{{ $perfil->name_state }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Distrito</div>
                          <div class="reserva-info-plomo">{{ $perfil->name_city }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Idiomas</div>
                          <div class="reserva-info-plomo">{{ $perfil->idioma }}</div>
                        </li> 
                        <li>
                          <div class="reserva-info-morado">Edad</div>
                          <div class="reserva-info-plomo">{{ $perfil->edad }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Tamaño</div>
                          <div class="reserva-info-plomo">{{ $perfil->estatura }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Peso</div>
                          <div class="reserva-info-plomo">{{ $perfil->peso }}Kg</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Cabello</div>
                          <div class="reserva-info-plomo">{{ $perfil->color_cabello }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Ojos</div>
                          <div class="reserva-info-plomo">{{ $perfil->color_ojos }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Corte íntimo</div>
                          <div class="reserva-info-plomo">{{ $perfil->corte_intimo }}</div>
                        </li>
                        @if($perfil->pecho)
                        <li>
                          <div class="reserva-info-morado">Pecho</div>
                          <div class="reserva-info-plomo">{{ $perfil->pecho }}</div>
                        </li>
                        @endif
                        @if($perfil->pene)
                        <li>
                          <div class="reserva-info-morado">Pene</div>
                          <div class="reserva-info-plomo">{{ $perfil->pene }}</div>
                        </li>
                        @endif
                        <li>
                          <div class="reserva-info-morado">Tatuajes</div>
                          <div class="reserva-info-plomo">{{ $perfil->tatuaje }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Piercing</div>
                          <div class="reserva-info-plomo">{{ $perfil->piercing }}</div>
                        </li>
                        <li>
                          <div class="reserva-info-morado">Fumador(a)</div>
                          <div class="reserva-info-plomo">{{ $perfil->fumador }}</div>
                        </li>
                      </ul>

                    </div>

                  </div>

                  @if(count($valoraciones) > 0)
                  <div class="espacio-reservas">
                    <h2 class="subtitulo-reservas">VALORACIÓN<br><div class="subsub-reserva"><p>Las calificaciones corresponden<br>a las experiencias</p></div></h2>
                    <div class="reserva-info">
                      <ul>
                        @foreach($valoraciones as $valor)
                        <li>
                          <div class="reserva-info-morado" style="text-transform: capitalize !important;">{{strtolower($valor->nombre_criterio)}}</div>
                           <div class="fucsia"> {!! $valor->puntuacion_html !!} </div> 
                        </li>
                        @endforeach

                      </ul>
                    </div>
                  </div>
                  @endif


            </div>
        </div>

        <div class="col-lg-8">           

            <div class="espacio-reservas">
            <div class="reserva-info-derecha subtitulo-reservas-derecha">
              <div class="reserva-biografia">
                <i class="icon-user-woman"></i>
                <div class="biografia">
                  <h2>DESCRIPCIÓN</h2>
                  <h3 style="text-transform: uppercase;">ID: {{$perfil->apodo}}</h3>
                </div>
              </div>
              <div class="ranking">
                <div class="ranking-letra">Ranking</div><div class="fucsia horizontal"><div class="ranking-letra"> {{ $ranking }} /5</div> {!! $ranking_html !!}</div><div class="ranking-letra vistas">{{ $reservas }} servicios</div>
              </div>
            </div>
            <p class="texto-biografia tamano-delicado">{{ $perfil->descripcion }}</p>
          </div>
          <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-diary esp-icono-bio"></i>CONTÁCTAME</h2>
            <div class="reserva-contactame">
              <p class="texto-biografia"><i class="icon-whatsapp-green esp-icono-bio"></i>{{ $perfil->celular }}</p>
              @if($perfil->web)
              <div class="web"><i class="icon-world esp-icono-bio"></i><a href="#" target="_blank">{{ $perfil->web }}</a></div>
              @endif
            </div>
          </div>
          <!-- <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-video esp-icono-bio"></i>VIDEO</h2>
          </div> -->


          <div class="espacio-reservas servicios-reservas">
            <h2 class="sub-tit"><i class="icon-massage esp-icono-bio"></i>SERVICIOS</h2>

           <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
             <li class="nav-item" id="nav-preliminares">
               <a class="nav-link active" id="preliminares-tab" data-toggle="tab" href="#preliminares" role="tab" aria-controls="preliminares" aria-selected="false">PRELIMINARES</a>
             </li>
             <li class="nav-item" id="nav-intimo">
               <a class="nav-link" id="intimo-tab" data-toggle="tab" href="#intimo" role="tab" aria-controls="intimo" aria-selected="false">ÍNTIMO</a>
             </li>
              <li class="nav-item" id="nav-masajes">
               <a class="nav-link" id="masajes-tab" data-toggle="tab" href="#masajes" role="tab" aria-controls="masajes" aria-selected="true">MASAJES</a>
             </li> 
              <li class="nav-item" id="nav-fetiches">
               <a class="nav-link" id="fetiches-tab" data-toggle="tab" href="#fetiches" role="tab" aria-controls="fetiches" aria-selected="false">FETICHES</a>
             </li>
              <li class="nav-item" id="nav-otros">
               <a class="nav-link" id="otros-tab" data-toggle="tab" href="#otros" role="tab" aria-controls="otros" aria-selected="false">OTROS</a>
             </li>
              <li class="nav-item" id="nav-discapacitados">
               <a class="nav-link celeste" id="discapacitados-tab" data-toggle="tab" href="#discapacitados" role="tab" aria-controls="discapacitados" aria-selected="false">DISCAPACITADOS</a>
             </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="preliminares" role="tabpanel" aria-labelledby="preliminares-tab">
                <ul class="lista-servicio lista-preliminares">

                 @foreach($servicios as $ser)
                     @if($ser->categoria_servicio == 'PRELIMINARES' && $ser->es_marcado == "1")
                       <li>{{$ser->nombre_servicio}}</li>
                     @endif
                 @endforeach
                 @foreach($personalizados as $per)
                     @if($per->categoria_servicio == 'PRELIMINARES')
                       <li>{{$per->nombre_servicio}}</li>
                     @endif
                 @endforeach
                 
                </ul>
              </div>
              <div class="tab-pane fade" id="masajes" role="tabpanel" aria-labelledby="masajes-tab">
                <ul class="lista-servicio lista-masajes">
                  @foreach($servicios as $ser)
                     @if($ser->categoria_servicio == 'MASAJES' && $ser->es_marcado == "1")
                       <li>{{$ser->nombre_servicio}}</li>
                     @endif
                 @endforeach
                  @foreach($personalizados as $per)
                     @if($per->categoria_servicio == 'MASAJES')
                       <li>{{$per->nombre_servicio}}</li>
                     @endif
                 @endforeach
                </ul>
              </div>
              <div class="tab-pane fade" id="fetiches" role="tabpanel" aria-labelledby="fetiches-tab">
                <ul class="lista-servicio lista-fetiches">
                  @foreach($servicios as $ser)
                     @if($ser->categoria_servicio == 'FETICHE' && $ser->es_marcado == "1")
                       <li>{{$ser->nombre_servicio}}</li>
                     @endif
                 @endforeach
                  @foreach($personalizados as $per)
                     @if($per->categoria_servicio == 'FETICHE')
                       <li>{{$per->nombre_servicio}}</li>
                     @endif
                 @endforeach
                </ul>
              </div>
              <div class="tab-pane fade" id="intimo" role="tabpanel" aria-labelledby="intimo-tab">
                <ul class="lista-servicio lista-intimos">
                  @foreach($servicios as $ser)
                     @if($ser->categoria_servicio == 'INTIMO' && $ser->es_marcado == "1")
                       <li>{{$ser->nombre_servicio}}</li>
                     @endif
                 @endforeach
                  @foreach($personalizados as $per)
                     @if($per->categoria_servicio == 'INTIMO')
                       <li>{{$per->nombre_servicio}}</li>
                     @endif
                 @endforeach
                </ul>
              </div>
              <div class="tab-pane fade" id="otros" role="tabpanel" aria-labelledby="otros-tab">
                <ul class="lista-servicio lista-otros">
                  @foreach($servicios as $ser)
                     @if($ser->categoria_servicio == 'OTROS' && $ser->es_marcado == "1")
                       <li>{{$ser->nombre_servicio}}</li>
                     @endif
                 @endforeach
                  @foreach($personalizados as $per)
                     @if($per->categoria_servicio == 'OTROS')
                       <li>{{$per->nombre_servicio}}</li>
                     @endif
                 @endforeach
                </ul>
              </div>
              <div class="tab-pane fade" id="discapacitados" role="tabpanel" aria-labelledby="discapacitados-tab">
                <ul class="lista-servicio lista-discapacitados icon-celeste">
                  @foreach($servicios as $ser)
                      @if($ser->categoria_servicio == 'DISCAPACITADOS' && $ser->es_marcado == "1")
                        <li>{{$ser->nombre_servicio}}</li>
                      @endif
                  @endforeach

                  @foreach($personalizados as $per)
                      @if($per->categoria_servicio == 'DISCAPACITADOS')
                        <li>{{$per->nombre_servicio}}</li>
                      @endif
                  @endforeach

                </ul>
              </div>
            </div>
          </div>
    
          <div id="widget">
        
             <disponibilidad-profesional-front :apodo-data="{{json_encode($perfil->apodo)}}"></disponibilidad-profesional-front>

             @if(Auth::check())
                @if (Auth::user()->idrol == 4)

                  <div class="servicios_seleccionados espacio-reservas">
                    <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>ACCEDISTE COMO PROFESIONAL</h2>
                        <div class="form-row" style="margin-top:20px;">
                            <div class="col-lg-12 col-sm-12">
                              <p>Para ver las tarifas del profesional o realizar una reserva, debes iniciar sesión como un usuario. Si no tienes una cuenta de usuario, primero debes <a href="{{ route('cerrar-sesion', app()->getLocale() ) }}">cerrar la sesión</a>, y luego <a href="{{ route('crear-cuenta', app()->getLocale())}}">registrarse desde aquí</a>.
                              </p>
                            </div>
                        </div>
                    </div> 
                @elseif (Auth::user()->idrol == 3)
                    <reservas-profesional-front :apodo-data="{{json_encode($perfil->apodo)}}"></reservas-profesional-front>
                @endif

             @else
                  
            <div class="servicios_seleccionados espacio-reservas">

              <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>INICIAR SESION</h2>

                  <div class="form-row" style="margin-top:20px;">
                      <div class="col-lg-12 col-sm-12">
                        Para ver las tarifas del profesional o realizar una reserva, debes iniciar sesión. Si no tiene una cuenta con nosotros aún, <a href="{{ route('crear-cuenta', app()->getLocale() )}}">registrarse desde aquí</a>. Si no recuerdas su contraseña también puedes 
                        
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request', app()->getLocale() ) }}">
                                {{ __('recuperarla desde aquí') }}
                            </a>
                        @endif
                        
                      </div>
                  </div>

                  <form action="{{ route('comprobar-credenciales', app()->getLocale() ) }}" method="POST">
                    @csrf
                    <!-- SECCION INTERIOR DE DATOS -->
                    <div class="form-row" style="margin-top:20px;">
                        <div class="col-lg-6 col-sm-12">

                            <input id="email" type="email" placeholder="Correo electronico" class="form-control espacio-campos" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            {!!$errors->first('email','<span class="invalid-feedback">:message</span>')!!}

                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input id="password" type="password" class="form-control espacio-campos" name="password" required autocomplete="current-password" placeholder="Password">
                            {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
                            <input type="hidden" name="toredirect" value="{{url()->current()}}">
                        </div>
                        <div class="col-lg-12 col-sm-12">
                          <button type="submit" class="btn btn-primary btn-busqueda-detallada">INICIAR SESION</button>
                        </div>
                    </div>
                    <!-- FIN SECCION INTERIOR DE DATOS -->
                  </form>

            </div> 
            
            @endif


          <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-medical-stethoscope esp-icono-bio"></i>SALUD</h2>
            <div class="reserva-salud">
              <img src="{{ asset('img/control-sanitario.png') }}">
              <p class="texto-salud-reserva">La gestión de la agenda es responsabilidad del administrador del perfil, por lo tanto no nos hacemos responsables de la reserva.</p>
            </div>
          </div>


          @if($perfil->seguridad)
          <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-like esp-icono-bio"></i>SEGURIDAD</h2>
            <div class="texto-biografia">
              <p>Únicamente asisto a citas con usuarios de perfiles registrados con datos reales, DNI y fotos aprobadas por el administrador de la web.</p>
            </div>
          </div>
          @endif


          @if(Auth::check())

                @if (Auth::user()->idrol == 4)

                <div class="servicios_seleccionados espacio-reservas">

                  <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>ACCEDISTE COMO PROFESIONAL</h2>

                      <div class="form-row" style="margin-top:20px;">
                          <div class="col-lg-12 col-sm-12">
                            <p>Para enviar un mensaje al profesional, debes iniciar sesión como un usuario. Si no tienes una cuenta de usuario, primero debes <a href="{{ route('cerrar-sesion') }}">cerrar la sesión</a>, y luego <a href="{{url('crear-cuenta')}}">registrarse desde aquí</a>.
                            </p>
                          </div>
                      </div>

                  </div> 
                @elseif (Auth::user()->idrol == 3)
                    <mensajes-profesional-front :apodo-data="{{json_encode($perfil->apodo)}}"></mensajes-profesional-front> 
                @endif

          @else
                  
            <div class="servicios_seleccionados espacio-reservas">
              <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>INICIAR SESION</h2>
                  <div class="form-row" style="margin-top:20px;">
                      <div class="col-lg-12 col-sm-12">
                        Para enviar un mensaje al profesional, debes iniciar sesión. Si no tiene una cuenta con nosotros aún, <a href="{{ route('crear-cuenta', app()->getLocale() )}}">registrarse desde aquí</a>. Si no recuerdas su contraseña también puedes 
                        
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request', app()->getLocale() ) }}">
                                {{ __('recuperarla desde aquí') }}
                            </a>
                        @endif
                        
                      </div>
                  </div>

                  <form action="{{ route('comprobar-credenciales', app()->getLocale() ) }}" method="POST">
                    @csrf
                    <!-- SECCION INTERIOR DE DATOS -->
                    <div class="form-row" style="margin-top:20px;">
                        <div class="col-lg-6 col-sm-12">

                            <input id="email" type="email" placeholder="Correo electronico" class="form-control espacio-campos" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            {!!$errors->first('email','<span class="invalid-feedback">:message</span>')!!}

                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input id="password" type="password" class="form-control espacio-campos" name="password" required autocomplete="current-password" placeholder="Password">
                            {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
                            <input type="hidden" name="toredirect" value="{{url()->current()}}">
                        </div>
                        <div class="col-lg-12 col-sm-12">
                          <button type="submit" class="btn btn-primary btn-busqueda-detallada">INICIAR SESION</button>
                        </div>
                    </div>
                    <!-- FIN SECCION INTERIOR DE DATOS -->
                  </form>

            </div> 
            
            @endif      

          </div>
        </div>
      </div>



      <div class="row margen-otras-chicas">
        <div class="col-lg-12">
          <h2 class="sub-tit"><i class="icon-c-lesbiana esp-icono-bio"></i>OTRAS CHICAS</h2>

          <!-- inicio de carrusel -->
          <div id="perfilesRelacionados" class="owl-carousel owl-theme">

              @foreach($otraschicas as $chica)
              <div class="item">

                   
                    <div class="item-chica item-otras-chicas">
                      <button class="triangulo btnAgregarFavoritos" data-apodo="{{$chica->apodo}}"><i class="icon-heart"></i></button>
                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">
                      <div class="texto-chica">
                        <h3>{{$chica->nombre}}</h3>
                       <!--  <h4>Lima │ 21 años</h4>
                        <h5>$ 150</h5> -->
                        <!-- <span>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                        </span> -->
                        <a href="{{ route('perfil', ['locale' => app()->getLocale(), 'apodo' => $chica->apodo ]  ) }}" target="_blank">VER PERFIL</a>
                        
                      </div>
                    </div>
                   

              </div>
              @endforeach

          </div>
          <!-- fin de carrusel -->

     <!--   <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
            <div class="carrusel-bot-circle"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
            <div class="carrusel-bot-circle"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
            <span class="sr-only">Next</span>
          </a>  -->

        </div>
      </div>
    </div>
  </section>

  @include('footers.footer-free')
  @include('modal')
  
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/meetfornight.js') }}"></script>

</body>
</html>