@extends('main')

@section('title', 'Fotos')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')

<form action="#" method="post">
        <h5 class="formulario-titulos">CARGAR FOTOS:</h5>

        <div class="cargar-imagenes">
          <span class="titulo-cargar-imagenes">Sube tus imágenes</span>
          <span class="haz-click">Haz click</span>
          <button type="button" class="btn btn-primary"><i class="icon-cargar-archivo cargar"></i>SUBIR</button>
        </div>

        <div class="img-cargada">
          <div class="img-cargada-izq">
            <img src="img/galeria/galeria-1.png">
            <div class="img-cargada-datos">
              <span class="nom-img">foto-1.jpg</span>
              <span class="peso-img">234 KB</span>
            </div>
          </div>
          <div class="img-cargada-der">
            <button class="btn btn-primary x-cargar-img"><i class="icon-x"></i></button>
          </div>
        </div>
        <div class="img-cargada">
          <div class="img-cargada-izq">
            <img src="img/galeria/galeria-1.png">
            <div class="img-cargada-datos">
              <span class="nom-img">foto-1.jpg</span>
              <span class="peso-img">234 KB</span>
            </div>
          </div>
          <div class="img-cargada-der">
            <button class="btn btn-primary x-cargar-img"><i class="icon-x"></i></button>
          </div>
        </div>
        <div class="img-cargada">
          <div class="img-cargada-izq">
            <img src="img/galeria/galeria-1.png">
            <div class="img-cargada-datos">
              <span class="nom-img">foto-1.jpg</span>
              <span class="peso-img">234 KB</span>
            </div>
          </div>
          <div class="img-cargada-der">
            <button class="btn btn-primary x-cargar-img"><i class="icon-x"></i></button>
          </div>
        </div>
        <div class="img-cargada">
          <div class="img-cargada-izq">
            <img src="img/galeria/galeria-1.png">
            <div class="img-cargada-datos">
              <span class="nom-img">foto-1.jpg</span>
              <span class="peso-img">234 KB</span>
            </div>
          </div>
          <div class="img-cargada-der">
            <button class="btn btn-primary x-cargar-img"><i class="icon-x"></i></button>
          </div>
        </div>
        <div class="img-cargada">
          <div class="img-cargada-izq">
            <img src="img/galeria/galeria-1.png">
            <div class="img-cargada-datos">
              <span class="nom-img">foto-1.jpg</span>
              <span class="peso-img">234 KB</span>
            </div>
          </div>
          <div class="img-cargada-der">
            <button class="btn btn-primary x-cargar-img"><i class="icon-x"></i></button>
          </div>
        </div>
        <div class="form-row">
          <button type="submit" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
        </div>
      </form>

                
  @endsection