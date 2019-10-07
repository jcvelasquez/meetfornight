<!doctype html>
<html lang="es">

  @include('header')


  <body>


  @include('tops.top')


  <!--BANNER-->

  <div id="banner-reservas">

    <div class="container-fluid no-container-fluid-esp banner-reservas">

      <div class="centrar-banner-reservas">

        <div class="tipo-de-perfil">PERFIL PLATINIUM</div>

        <h2>{{ $perfil[0]->nombre }}</h2>

        <h3>"{{ $perfil[0]->frase }}"</h3>

        <a href="">FAVORITO<i class="icon-heart"></i></a>

        <div class="sellos"><img src="{{ asset('img/perfil-averiguado.png') }}"><img src="{{ asset('img/control-sanitario.png') }}"></div>

      </div>

    </div>

  </div>



  <!--CHICAS-->

  <section>



    <div class="container">

      <div class="cabecera-chicas">

        <div class="navegacion-cabecera-chicas">

          <div class="botones-cabecera-chicas">

            <a href="index.php">Inicio</a>

            <span><i class="fa fa-angle-right"></i></span>

            <a href="privado.php">Privado</a>

            <span><i class="fa fa-angle-right"></i></span>

            <a href="mujeres.php">Mujeres</a>

            <span><i class="fa fa-angle-right"></i></span>

            <a href="no-reserva.php" class="cabecera-chicas-active">{{ $perfil[0]->nombre }}</a>

          </div>

          <div class="reserva-fecha">Sábado 18 de Julio 2018, <i class="icon-podium esp-icono-bio fucsia"></i><time>13:30pm</time><a class="" data-toggle="modal" data-target="#denunciar"><i class="icon-danger espacio-busqueda red-denunciar"></i></a></div>

        </div>

      </div>

    </div>



    <div class="container">

      <div class="row" id="main-perfil">

        <div class="col-lg-4" id="sidebar">

            <div class="sidebar__inner">
              <!-- Content goes here -->
                  <div class="espacio-reservas">

                    <div class="reservas-img-grande">

                      <img id="currentImg" src="{{ asset('img/galeria/galeria-1.png') }}" class="img-responsive">

                      <a id="currentImg2" href="{{ asset('img/galeria/galeria-1.png') }}" data-fancybox="gallery" data-caption="Sexy Woman">

                        <div class="img-grande-lupa">

                          <i class="icon-search"></i>

                        </div>

                      </a>

                      <div class="img-grande-logo">

                        <img src="img/logo-blanco.png">

                      </div>

                    </div>

                  </div>

                  <div class="reservas-img-pequenas espacio-reservas">

                      <div class="item-reservas-img-pequenas">

                        <img src="{{asset('img/galeria/galeria-1.png')}}" class="img-responsive" onclick="showImage('galeria-1.png'), nombre('galeria-1.png');" />

                        <a class="nunca-mostrar" data-fancybox="gallery" href="{{ asset('img/galeria/galeria-1.png') }}" data-caption="Sexy Woman"></a>

                      </div>

                      <div class="item-reservas-img-pequenas">

                        <img src="{{ asset('img/galeria/galeria-1.png') }}" class="img-responsive" onclick="showImage('galeria-2.png'), nombre('galeria-2.png');" />

                        <a class="nunca-mostrar" data-fancybox="gallery" href="{{ asset('img/galeria/galeria-1.png') }}" data-caption="Sexy Woman"></a>

                      </div>

                      <div class="item-reservas-img-pequenas">

                        <img src="{{ asset('img/galeria/galeria-3.png') }}" class="img-responsive" onclick="showImage('galeria-3.png'), nombre('galeria-3.png');" />

                        <a class="nunca-mostrar" data-fancybox="gallery" href="img/galeria/galeria-3.png" data-caption="Sexy Woman"></a>

                      </div>

                      <div class="item-reservas-img-pequenas">

                        <img src="{{ asset('img/galeria/galeria-4.png') }}" class="img-responsive" onclick="showImage('galeria-4.png'), nombre('galeria-4.png');" />

                        <a class="nunca-mostrar" data-fancybox="gallery" href="img/galeria/galeria-4.png" data-caption="Sexy Woman"></a>

                      </div>

                  </div>

                  <div class="espacio-reservas">

                    <h2 class="subtitulo-reservas">PERFIL</h2>

                    <div class="reserva-info">

                      <ul>

                        <li>

                          <div class="reserva-info-morado">Sexo</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->sexo }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Orientación</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->orientacion }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Nacionalidad</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->nacionalidad }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Ciudad</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->departamento }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Distrito</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->distrito }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Idiomas</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->idioma }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Edad</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->edad }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Tamaño</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->estatura }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Peso</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->peso }}Kg</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Cabello</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->color_cabello }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Ojos</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->color_ojos }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Corte íntimo</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->corte_intimo }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Copa</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->pecho }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Tatuajes</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->tatuaje }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Piercing</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->piercing }}</div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Fumador(a)</div>

                          <div class="reserva-info-plomo">{{ $perfil[0]->fumador }}</div>

                        </li>

                      </ul>

                    </div>

                  </div>

                  <div class="espacio-reservas">

                    <h2 class="subtitulo-reservas">VALORACIÓN<br><div class="subsub-reserva"><p>Las calificaciones corresponden<br>a las experiencias</p></div></h2>

                    <div class="reserva-info">

                      <ul>

                        <li>

                          <div class="reserva-info-morado">Amabilidad</div>

                          <div class="fucsia"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Sensualidad</div>

                          <div class="fucsia"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Conversación</div>

                          <div class="fucsia"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Diversión</div>

                          <div class="fucsia"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>

                        </li>

                        <li>

                          <div class="reserva-info-morado">Corresponde a la foto</div>

                          <div class="fucsia"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>

                        </li>

                      </ul>

                    </div>

                  </div>

            </div>
        </div>

        <div class="col-lg-8">

          <div class="espacio-reservas">

            <div class="reserva-info-derecha subtitulo-reservas-derecha">

              <div class="reserva-biografia">

                <i class="icon-user-woman"></i>

                <div class="biografia">

                  <h2>DESCRIPCIÓN</h2>

                  <h3>ID: MFN001</h3>

                </div>

              </div>

              <div class="ranking">

                <div class="ranking-letra">Ranking</div><div class="fucsia horizontal"><div class="ranking-letra">5/5</div><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div><div class="ranking-letra vistas">20 servicios</div>

              </div>

            </div>

            <p class="texto-biografia tamano-delicado">{{ $perfil[0]->descripcion }}</p>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-diary esp-icono-bio"></i>CONTÁCTAME</h2>

            <div class="reserva-contactame">

              <p class="texto-biografia"><i class="icon-whatsapp-green esp-icono-bio"></i>{{ $perfil[0]->celular }}</p>

              <div class="web"><i class="icon-world esp-icono-bio"></i><a href="#" target="_blank">www.franchescarhodes.com</a></div>

            </div>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-video esp-icono-bio"></i>VIDEO</h2>

            <iframe width="100%" height="315" src="https://www.youtube.com/embed/r1ncXWTwx2g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

          </div>




          <div class="espacio-reservas servicios-reservas">

            <h2 class="sub-tit"><i class="icon-massage esp-icono-bio"></i>SERVICIOS</h2>


            <ul class="nav nav-tabs" id="myTab" role="tablist">

              <li class="nav-item">

                <a class="nav-link active" id="preliminares-tab" data-toggle="tab" href="#preliminares" role="tab" aria-controls="preliminares" aria-selected="false">PRELIMINARES</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" id="intimo-tab" data-toggle="tab" href="#intimo" role="tab" aria-controls="intimo" aria-selected="false">ÍNTIMO</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" id="masajes-tab" data-toggle="tab" href="#masajes" role="tab" aria-controls="masajes" aria-selected="true">MASAJES</a>

              </li> 

              <li class="nav-item">

                <a class="nav-link" id="fetiches-tab" data-toggle="tab" href="#fetiches" role="tab" aria-controls="fetiches" aria-selected="false">FETICHES</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" id="otros-tab" data-toggle="tab" href="#otros" role="tab" aria-controls="otros" aria-selected="false">OTROS</a>

              </li>

              <li class="nav-item">

                <a class="nav-link celeste" id="discapacitados-tab" data-toggle="tab" href="#discapacitados" role="tab" aria-controls="discapacitados" aria-selected="false">DISCAPACITADOS</a>

              </li>

            </ul>

            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="preliminares" role="tabpanel" aria-labelledby="preliminares-tab">

                <ul class="lista-servicio">

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

                <ul class="lista-servicio">

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

                <ul class="lista-servicio">

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

                <ul class="lista-servicio">

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

                <ul class="lista-servicio">

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

                <ul class="lista-servicio icon-celeste">

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

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>DISPONIBILIDAD</h2>

            <div class="disponibilidad">

              <div class="fecha">

                <span class="dias">Lun</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Mar</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Mie</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Jue</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Vie</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Sab</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Dom</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

            </div>

          </div>

          <div id="widget"> </div>
        
              <div id="calendar"></div>

         

          <div class="espacio-reservas" style="margin-top:40px;">
            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS SERVICIO</h2>
            <div class="tarifario-vertical">
              @foreach($tarifas as $tar)
                @if($tar->categoria_tarifa == 'SERVICIO')
                  <div class="tarifario-horizontal">
                    <div class="tarifario-morado">{{$tar->opcion_tarifa}} </div>
                    <div class="tarifario-rojo">{{$tar->costo_tarifa}}</div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>

          <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS ESCORT</h2>
            <div class="tarifario-vertical">
              @foreach($tarifas as $tar)
                @if($tar->categoria_tarifa == 'ESCORT')
                  <div class="tarifario-horizontal">
                    <div class="tarifario-morado">{{$tar->opcion_tarifa}} </div>
                    <div class="tarifario-rojo">{{$tar->costo_tarifa}}</div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>

          <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS EXTRAS</h2>
            <div class="tarifario-vertical">
              @foreach($tarifas as $tar)
                  @if($tar->categoria_tarifa == 'EXTRAS')
                    <div class="tarifario-horizontal">
                      <div class="tarifario-morado">{{$tar->opcion_tarifa}} </div>
                      <div class="tarifario-rojo">{{$tar->costo_tarifa}}</div>
                    </div>
                  @endif
              @endforeach
            </div>
          </div>




          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-medical-stethoscope esp-icono-bio"></i>SALUD</h2>

            <div class="reserva-salud">

              <img src="{{ asset('img/control-sanitario.png') }}">

              <p class="texto-salud-reserva">La gestión de la agenda es responsabilidad del administrador del perfil, por lo tanto no nos hacemos responsables de la reserva.</p>

            </div>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-like esp-icono-bio"></i>SEGURIDAD</h2>

            <div class="texto-biografia">

              <p>Únicamente asisto a citas con usuarios de perfiles registrados con datos reales, DNI y fotos aprobadas por el administrador de la web.</p>

            </div>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-chat esp-icono-bio"></i>DÉJAME UN MENSAJE</h2>

            <form>

              <div class="form-group">

                <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre *" required>

              </div>

              <div class="form-group">

                <input type="cel" class="form-control" id="exampleInputPassword1" name="celular" placeholder="Celular">

              </div>

              <div class="form-group">

                <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email *" required>

              </div>

              <div class="form-group">

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mensaje" placeholder="Mensaje"></textarea>

              </div>

              <button type="submit" class="btn btn-primary btn-reserva">ENVIAR</button>

            </form>

          </div>

        </div>

      </div>



      <div class="row margen-otras-chicas">

        <div class="col-lg-12">

          <h2 class="sub-tit"><i class="icon-c-lesbiana esp-icono-bio"></i>OTRAS CHICAS</h2>

          <div id="carouselExampleIndicators3" class="carousel slide carrusel-bot" data-ride="carousel">

            <div class="carousel-inner">

              <div class="carousel-item active">

                <div class="row">

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="carousel-item">

                <div class="row">

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="carousel-item">

                <div class="row">

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="item-chica">

                      <img src="{{ asset('img/chicas/chica1.jpg') }}" class="img-responsive">

                      <div class="texto-chica">

                        <h3>FRANCESCA</h3>

                        <h4>Lima │ 21 años</h4>

                        <h5>$ 150</h5>

                        <span>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                          <i class="icon-star"></i>

                        </span>

                        <a href="no-reserva.php">VER PERFIL</a>

                        <div class="triangulo"><i class="icon-heart"></i></div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">

              <div class="carrusel-bot-circle"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>

              <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">

              <div class="carrusel-bot-circle"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>

              <span class="sr-only">Next</span>

            </a>

          </div>

        </div>

      </div>

      

    </div>



  </section>

  @include('footers.footer-free')

  @include('modal')

  
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/meetfornight.js') }}"></script>

<script>

      var sidebar = new StickySidebar('#sidebar', {resizeSensor: false, maxWidth:350, topSpacing: 0, bottomSpacing: 50, containerSelector: '#main-perfil' });



      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid', 'timeGrid' ], defaultView: 'timeGridWeek'
        });

        calendar.render();
      });


</script>


  </body>

</html>