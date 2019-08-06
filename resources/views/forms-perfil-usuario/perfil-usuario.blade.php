@extends('main')

@section('title', 'Perfil de Usuario')

@section('top')

    @include('tops.top-usuario-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-usuario')
    
@endsection

@section('content')


<form action="#" method="post">

<div class="bloques-de-perfil">
<div class="espaciado-formulario">
<h5 class="formulario-titulos">DATOS:</h5>
<span class="obligatorio">(*) Campos Obligatorios</span>
</div>
<div class="form-row">
    <div class="col-lg-12 col-sm-12">
    <input type="text" class="form-control espacio-campos" name="nombre" placeholder="Nombre *">
    </div>
    <div class="col-lg-12 col-sm-12">
    <input type="text" class="form-control" name="apodo" placeholder="Apodo *">
    <small id="emailHelp" class="form-text text-muted espacio-campos informativo">El Apodo será el único dato personal que se visualizará en la web</small>
    </div>
    <div class="col-lg-12 col-sm-12">
    <input type="password" class="form-control espacio-campos" name="contrasena" placeholder="Contraseña *">
    </div>
    <div class="col-lg-12 col-sm-12">
    <input type="password" class="form-control espacio-campos" name="verificar-contrasena" placeholder="Verificar Contraseña *">
    </div>
    <div class="col-lg-6 col-sm-12">
    <input type="date" class="form-control espacio-campos" name="fecha-nacimiento">
    </div>
    <div class="col-lg-6 col-sm-12">
    <select type="text" class="form-control espacio-campos" name="sexo">
        <option value="Sexo">Sexo *</option>
        <option value="Masculino">Masculino *</option>
        <option value="Femenino">Femenino *</option>
    </select>
    </div>
    <div class="col-lg-12 col-sm-12">
    <select type="text" class="form-control espacio-campos" name="nacionalidad">
        <option value="Nacionalidad">Nacionalidad *</option>
        <option value="Nacionalidad">Nacionalidad *</option>
        <option value="Nacionalidad">Nacionalidad *</option>
    </select>
    </div>
    <div class="col-lg-12 col-sm-12">
    <select type="text" class="form-control espacio-campos" name="idioma">
        <option value="Idioma">Idioma *</option>
        <option value="Idioma">Idioma *</option>
        <option value="Idioma">Idioma *</option>
    </select>
    </div>
    <div class="col-lg-6 col-sm-12">
    <input type="email" class="form-control espacio-campos" name="email" placeholder="Email *">
    </div>
    <div class="col-lg-6 col-sm-12">
    <input type="email" class="form-control espacio-campos" name="confirmar-email" placeholder="Confirmar email *">
    </div>
</div>
</div>

<div class="bloques-de-perfil">
<div class="form-row">
    <button type="submit" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
</div>
</div>
</form>


@endsection