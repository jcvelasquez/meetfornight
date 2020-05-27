<!doctype html>
<html lang="es">
  
    @include('header')

  <body>
  
    @include('tops.top-free')

  <!--BANNER-->
  <div id="banner-internas">
    <div class="container-fluid no-container-fluid-esp" style="background: url( {{asset('img/banner-internas/banner-internas-1.jpg')}} )">
        <h2>BLOG</h2>
    </div>
  </div>

  <!--CHICAS-->
  <section>

  <div class="container">
      <div class="cabecera-chicas">
        <div class="navegacion-cabecera-chicas">
          <div class="botones-cabecera-chicas">
            <a href="/">Inicio</a>
            <span><i class="fa fa-angle-right"></i></span>
            <a href="/blog" class="cabecera-chicas-active">BLOG</a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-9">

        @if(isset($articulos))
      
              @foreach($articulos as $post)

              <article class="blog">
                  <div class="row">
                    <div class="col-lg-3">
                        <img src="fotos_profesionales/{{$post->imagen}}" class="img-responsive" />
                    </div>
                    <div class="col-lg-9">
                      <div class="titulo-cabecera-chicas">
                        <h4 align="left">{{$post->titulo}}</h4>
                        <h3 align="left">Publicado el {{ date("d/m/Y", strtotime($post->created_at))}}</h3>
                      </div>
                      <hr/>
                      <p>{{substr($post->contenido,0,400)."..." }}</p>
                      <div class="clr"></div>
                      <a href="/blog/{{$post->id}}" class="btn-acceder">Leer más</a>
                    </div>
                  </div>

              </article>
              @endforeach

              {{ $articulos->links() }}

        @else

            <article class="blog_detalle">
                <div class="row espacio-campos">
                  <div class="col-lg-12">
                    <div class="titulo-cabecera-chicas">
                      <h4 align="left">{{$articulo->titulo}}</h4>
                      <h3 align="left">{{ date("d/m/Y", strtotime($articulo->created_at))}}</h3>
                    </div>
                    <div class="foto_blog"><img src="/fotos_profesionales/{{$articulo->imagen}}" class="img-responsive" /></div>
                    
                    <p class="content_blog">{{$articulo->contenido}}</p>
                    <div class="clr"></div>
                    
                  </div>
                </div>

                <hr/>

                <div class="row espacio-campos">
                  <div class="col-lg-6">
                  </div>
                  <div class="col-lg-6 text-right">
                      <a href="/blog" class="btn_volver_blog">REGRESAR AL BLOG</a>
                  </div>
                </div>

                <hr/>

                <div class="row espacio-campos push_bottom_blog">
                  <div class="col-lg-2">
                    <span class="circulo_user">
                      <a href="{{ url('/') }}"><img src="{{ asset('img/logo-blanco-intranet.png') }}"></a>
                    </span>
                  </div>
                  <div class="col-lg-10">
                       <strong class="title_user_blog">MeetForNight</strong>
                       <p class="user_blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt mi id nibh vulputate laoreet. Pellentesque ac rhoncus mi. In ornare eleifend quam, ut molestie magna placerat vel.</p>
                  </div>
                </div>

            </article>

        @endif
          
        </div>
        <div class="col-lg-3">

            <ul id="lista_lateral">
                @foreach($perfiles as $perfil)
                <li>
                  <div class="item-chica">
                      <div class="texto-chica">
                            <h3 v-text="profesional.apodo">{{$perfil->apodo}}</h3>
                          <h4 v-text="profesional.ubicacion_edad"></h4>
                          <h5 v-text="profesional.precio"></h5> 
                          <span>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                          </span>
                          <a href="/perfil/{{$perfil->apodo}}" target="_blank">VER PERFIL</a>
                          
                      </div>
                      <img src="/fotos_profesionales/{{$perfil->url_foto}}" class="img-responsive" />
                  </div>
                </li>
                @endforeach
            </ul>

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