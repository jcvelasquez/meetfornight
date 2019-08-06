@extends('main')

@section('title', 'Seguridad de Usuario')

@section('top')

    @include('tops.top-usuario-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-usuario')
    
@endsection

@section('content')

<h5 class="formulario-titulos">SEGURIDAD:</h5>

<div class="cargar-imagenes">
  <span class="haz-click esp-seguridad">Este apartado de seguridad es facultativo y estrictamente confidencial (solo Meet For Night tendrá acceso a ver sus datos) pero si accedes a rellenarlo con los datos que te solicitamos te permitiremos comunicarte con nuestras anfitrionas que hayan solicitado ocultar sus datos de contacto a los usuarios que no hayan rellenado este apartado de seguridad.<br>
  Meet For Night quiere ser un portal discreto pero de calidad donde cualquier cliente y/o usuario se sienta seguro, cómodo y protegido.<br><br>
  <strong class="rojo-importante">Si no deseas marcar esta opción ahora, dale click al botón "SIGUIENTE PASO" y llénalo más adelante si lo deseas.</strong>
  </span>
  <button type="button" class="btn btn-primary"><i class="fa fa-check"></i></button>
</div>

<h5 class="formulario-titulos">Cargar foto de perfil:</h5>

<div class="cargar-imagenes">
<span class="titulo-cargar-imagenes">Sube tus imágenes</span>
<span class="haz-click">Haz click</span>
<button type="button" class="btn btn-primary"><i class="icon-cargar-archivo cargar"></i>SUBIR</button>
</div>

<h5 class="formulario-titulos">Cargar foto de tu documento de identidad:</h5>

<div class="cargar-imagenes">
<span class="titulo-cargar-imagenes">Sube tus imágenes</span>
<span class="haz-click">Haz click</span>
<button type="button" class="btn btn-primary"><i class="icon-cargar-archivo cargar"></i>SUBIR</button>
</div>


<h5 class="formulario-titulos">Ingresa tu número de móvil:</h5>
<div class="form-row">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control espacio-campos" name="celular" placeholder="Celular *">
    </div>
    </div>



<div class="cuadro-servicios cargar-imagenes">
  <span class="haz-click esp-seguridad">
  <strong class="rojo-importante">Tu información proporcionada será estrictamente confidencial y no se mostrará en ninguna parte de la web.</strong>
  </span>
</div>


<div class="form-row">
  <button type="submit" class="btn btn-primary btn-busqueda-detallada">SIGUIENTE PASO</button>
</div>

@endsection