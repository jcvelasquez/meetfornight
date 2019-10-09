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

            <perfil-profesional-front></perfil-profesional-front>
        
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

</script>


  </body>

</html>