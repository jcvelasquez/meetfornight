<div class="row justify-content-center cuerpo-perfil">
  <div class="col-lg-8 col-sm-12">
    <div class="bloques-de-perfil">
      <div class="espaciado-formulario">
        <h5 class="formulario-titulos">DATOS:</h5>
        <span class="obligatorio">(*) Campos Obligatorios</span>
      </div>
      <div class="form-row">
        <div class="col-lg-12 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="nombre" id="nombre" placeholder="Nombre *">
        </div>
        <div class="col-lg-12 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="empresa" id="empresa" placeholder="Empresa *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="email" id="email" placeholder="Email *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="confirmar_email" id="confirmar_email" placeholder="Confirmar email *">
          <input type="hidden" name="estado" value="0" />
          <input type="hidden" name="idrol" id="idrol" value="3" />
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" id="password" name="password" placeholder="Contraseña *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" id="confirmar_clave" name="confirmar_clave" placeholder="Verificar Contraseña *">
        </div>

        <div class="espaciado-formulario">
          <h5 class="formulario-titulos">LOCALIZACION:</h5>
        </div>

        <div class="form-row">
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