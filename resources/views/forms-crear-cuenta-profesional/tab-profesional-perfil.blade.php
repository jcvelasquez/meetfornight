<div class="row justify-content-center cuerpo-perfil">
  <div class="col-lg-8 col-sm-12">
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
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="email" id="email" placeholder="Email *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="confirmar_email" placeholder="Confirmar email *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" name="password" id="password" placeholder="Contraseña *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" name="confirmar_clave" placeholder="Verificar Contraseña *">
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="fecha_nacimiento" placeholder="Fecha nacimiento (dd/mm/yyyy) *" id="fecha_nacimiento">
        </div>
        <div class="col-lg-6 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="sexo" id="sexo">
            <option value="">Seleccione un sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
            <option value="T">Trans</option>
          </select>
        </div>
      </div>
      <div class="espaciado-formulario">
        <h5 class="formulario-titulos">LOCALIZACION:</h5>
        <span class="obligatorio">(*) Campos Obligatorios</span>
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
      <div class="espaciado-formulario">
        <h5 class="formulario-titulos">CARACTERISTICAS PERSONALES:</h5>
        <span class="obligatorio">(*) Campos Obligatorios</span>
      </div>
      <div class="form-row">
        <div class="col-lg-6 col-sm-12" id="campo_pecho">
          <select type="text" class="form-control espacio-campos" name="pecho" id="pecho">
            <option value="">Seleccione tamaño de pecho</option>
            <option value="AA">AA</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="DD">DD</option>
            <option value="Otros">Otros</option>
          </select>
        </div>
        <div class="col-lg-6 col-sm-12" id="campo_pene">
          <select type="text" class="form-control espacio-campos" name="pene" id="pene">
            <option value="">Seleccione tamaño de pene</option>
            <option value="SMALL">SMALL</option>
            <option value="MEDIUM">MEDIUM</option>
            <option value="LARGE">LARGE</option>
          </select>
        </div>
        <div class="col-lg-6 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="color_ojos">
            <option value="">Seleccione un color de ojos</option>
            <option value="Ojos Castaños">Ojos Castaños</option>
            <option value="Ojos Negros">Ojos Negros</option>
            <option value="Ojos Miel (Avellana)">Ojos Miel (Avellana)</option>
            <option value="Ojos Verdes">Ojos Verdes</option>
            <option value="Ojos Azules">Ojos Azules</option>
            <option value="Otros">Otros</option>
          </select>
        </div>
        <div class="col-lg-6 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="color_cabello" id="color_cabello">
            <option value="">Seleccione un color de cabello</option>
            <option value="Cabello negro">Cabello negro</option>
            <option value="Cabello castaño">Cabello castaño</option>
            <option value="Cabello rubio o castaño claro">Cabello rubio o castaño claro</option>
            <option value="Cabello pelirrojo (rojo anaranjado)">Cabello pelirrojo (rojo anaranjado)</option>
            <option value="Cabello canoso">Cabello canoso</option>
            <option value="Cabello blanco">Cabello blanco</option>
            <option value="Otros">Otros</option>
          </select>
        </div>
        <div class="col-lg-6 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="corte_intimo" id="corte_intimo">
            <option value="">Seleccione un corte intimo</option>
            <option value="Natural">Natural</option>
            <option value="Triangulo">Triangulo</option>
            <option value="Afeitado">Afeitado</option>
            <option value="Otros">Otros</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range espacio-campos">
            <h5 class="formulario-titulos" style="margin-bottom:40px;">ESTATURA (CM):</h5>
            <input id="estatura" name="estatura" type="text" value="140" />
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range espacio-campos">
            <h5 class="formulario-titulos" style="margin-bottom:40px;">PESO (KG):</h5>
            <input id="peso" name="peso" type="text" value="40" />
          </div>
        </div>
      </div>
    </div>
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">ORIENTACIÓN SEXUAL:</h5>
      <div class="form-row">
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="raLESBIANA" value="LESBIANA" name="orientacion" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="raLESBIANA">Lesbiana</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="raHETEROSEXUAL" value="HETEROSEXUAL" name="orientacion" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="raHETEROSEXUAL">Heterosexual</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="raTRANSEXUAL" value="TRANSEXUAL" name="orientacion" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="raTRANSEXUAL">Transexual</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="raHOMOSEXUAL" value="HOMOSEXUAL" name="orientacion" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="raHOMOSEXUAL">Homosexual</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="raBISEXUAL" value="BISEXUAL" name="orientacion" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="raBISEXUAL">Bisexual</label>
        </div>
      </div>
    </div>
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos no-marmar">CATEGORÍA:</h5>
      <span class="aparecer">En la(s) que quieres aparecer</span>
      <div class="form-row">

        @foreach($categorias as $cat)
        <div class="col-lg-4 col-sm-12" style="display:none;" id="cat{{$cat->nombre_categoria}}">
          
          <div class="form-group checksito">
            <input type="checkbox" data-dia="{{$cat->nombre_categoria}}" style="display:none;" value="{{$cat->id}}" id="categoria{{$cat->id}}" name="categorias[]" class="inp-cbx always-validate">
            <label class="cbx" style="width:100%;" for="categoria{{$cat->id}}">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="tam-check">{{$cat->nombre_categoria}}</span>
            </label>
          </div>

        </div>
        @endforeach
      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos no-marmar">IDIOMAS:</h5>
      <span class="aparecer">Con el que puedes comunicarte con los clientes</span>
      <div class="form-row">

        @foreach($idiomas as $idio)
        <div class="col-lg-4 col-sm-12" id="cat{{$idio->nombre_idioma}}">
          <div class="form-group checksito">
            <input type="checkbox" style="display:none;" value="{{$idio->id}}" id="idioma{{$idio->id}}" data-idioma="{{$idio->nombre_idioma}}" name="idiomas[]" class="inp-cbx always-validate">
            <label class="cbx" style="width:100%;" for="idioma{{$idio->id}}">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="tam-check check-idiomas">{{$idio->nombre_idioma}}</span>
            </label>

          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">TATUAJE(S):</h5>
      <div class="form-row radio-tatuaje">
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="tatuaje_si" name="tatuaje" value="1" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="tatuaje_si">Sí</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="tatuaje_no" name="tatuaje" value="0" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="tatuaje_no">No</label>
        </div>
      </div>
    </div>
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">PIERCING(S):</h5>
      <div class="form-row radio-piercing">
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="piercing_si" name="piercing" value="1" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="piercing_si">Sí</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="piercing_no" name="piercing" value="0" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="piercing_no">No</label>
        </div>
      </div>
    </div>
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">FUMADOR(A):</h5>
      <div class="form-row radio-fumador">
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="fumador_si" name="fumador" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="fumador_si">Sí</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
          <input type="radio" id="fumador_no" name="fumador" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="fumador_no">No</label>
        </div>
      </div>
    </div>
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">SEGURIDAD:</h5>
      <div class="form-row">
        <div class="col-lg-12 col-sm-12">
          <div class="form-group checksito">
            <input class="inp-cbx" id="seguridad" name="seguridad" value="1" type="checkbox" style="display: none;" />
            <label class="cbx" for="seguridad">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="tam-check">Esta opción ocultará sus datos de contacto (teléfono y/o WhatsApp y correo) a los usuarios no registrados debidamente. No obstante, tenga presente que esta opción afectará el porcentaje de clientes potenciales (la mayoría de nuestros usuarios son usuarios no registrados).</span>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">FRASE QUE RESALTE:</h5>
      <div class="form-row espacio-campos">
        <div class="col-lg-12 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="frase" placeholder="Ejm: Te invito a mi mundo de fantasía">
        </div>
      </div>
    </div>
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">DESCRIPCIÓN:</h5>
      <div class="form-row espacio-campos">
        <div class="col-lg-12 col-sm-12">
          <textarea type="text" rows="5" class="form-control" name="descripcion"></textarea>
          <small id="emailHelp" class="form-text text-muted espacio-campos informativo">1000 caracteres como máximo</small>
        </div>
      </div>
    </div>
  </div>
</div>