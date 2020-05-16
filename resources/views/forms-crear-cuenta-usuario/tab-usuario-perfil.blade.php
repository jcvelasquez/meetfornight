<div class="row justify-content-center cuerpo-perfil">
  <div class="col-lg-8 col-sm-12">
    <div class="bloques-de-perfil">
      <div class="espaciado-formulario">
        <h5 class="formulario-titulos">DATOS:</h5>
        <span class="obligatorio">(*) Campos Obligatorios</span>
      </div>
      <div class="form-row">
        <div class="col-lg-6 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="nombre" id="nombre" placeholder="Nombre *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="text" class="form-control" name="apodo" id="apodo" placeholder="Apodo *">
          <small id="emailHelp" class="form-text text-muted espacio-campos informativo">El Apodo será el único dato personal que se visualizará en la web</small>
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="email" id="email" placeholder="Email *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="confirmar_email" id="confirmar_email" placeholder="Confirmar email *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" id="password" name="password" placeholder="Contraseña *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" id="confirmar_clave" name="confirmar_clave" placeholder="Verificar Contraseña *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="fecha_nacimiento" data-date-format='dd/mm/yyyy' placeholder="Fecha nacimiento (dd/mm/yyyy) *" id="fecha_nacimiento">
        </div>
        <div class="col-lg-6 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="sexo" id="sexo">
            <option value="">Seleccione su sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>

        <div class="espaciado-formulario">
          <h5 class="formulario-titulos">LOCALIZACION:</h5>
        </div>

        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <select type="text" class="form-control espacio-campos" name="idcountry" id="idcountry">
              <option value="">Seleccione una nacionalidad</option>
              @foreach($countries as $country)
              <option value="{{$country->id}}">{{$country->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-6 col-sm-12">
            <select type="text" class="form-control espacio-campos" name="idstate" id="idstate">
              <option value="">Seleccione un departamento</option>
            </select>
          </div>
          <div class="col-lg-6 col-sm-12">
            <select type="text" class="form-control espacio-campos" name="idcity" id="idcity">
              <option value="">Seleccione un distrito</option>
            </select>
          </div>
        </div>
        

      </div>

    </div>

  </div>

</div>