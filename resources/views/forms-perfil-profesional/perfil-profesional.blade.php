@extends('main')

@section('title', 'Mi Perfil')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
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
                <input type="email" class="form-control espacio-campos" name="email" placeholder="Email *">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="email" class="form-control espacio-campos" name="confirmar-email" placeholder="Confirmar email *">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="contrasena" placeholder="Contraseña *">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="verificar-contrasena" placeholder="Verificar Contraseña *">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="text" class="form-control" name="usuario" placeholder="Usuario *">
                <small id="emailHelp" class="form-text text-muted espacio-campos informativo">El usuario será automaticamente el email ingresado.</small>
              </div>
              <div class="col-lg-6 col-sm-12">
                <input type="date" class="form-control espacio-campos" name="fecha-nacimiento">
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="sexo">
                  <option value="Sexo">Sexo *</option>
                  <option value="Masculino">Masculino *</option>
                  <option value="Femenino">Femenino *</option>
                  <option value="Femenino">Trans *</option>
                </select>
              </div>
              <div class="col-lg-12 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="nacionalidad">
                  <option value="Nacionalidad">Nacionalidad *</option>
                  <option value="Nacionalidad">Nacionalidad *</option>
                  <option value="Nacionalidad">Nacionalidad *</option>
                </select>
              </div>
              <!--<div class="col-lg-12 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="categoria">
                  <option value="Categoría">Categoría *</option>
                  <option value="Categoría">Categoría *</option>
                  <option value="Categoría">Categoría *</option>
                </select>
              </div>-->
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="departamento">
                  <option value="Departamento">Departamento * *</option>
                  <option value="Departamento">Departamento * *</option>
                  <option value="Departamento">Departamento * *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="distrito">
                  <option value="Distrito">Distrito *</option>
                  <option value="Distrito">Distrito *</option>
                  <option value="Distrito">Distrito *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="idioma">
                  <option value="Idioma">Idioma *</option>
                  <option value="Idioma">Idioma *</option>
                  <option value="Idioma">Idioma *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="etnia">
                  <option value="Etnia">Etnia *</option>
                  <option value="Etnia">Etnia *</option>
                  <option value="Etnia">Etnia *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="copa">
                  <option value="Copa">Pecho *</option>
                  <option value="Copa">Pecho *</option>
                  <option value="Copa">Pecho *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <input type="text" class="form-control espacio-campos" name="color-ojos" placeholder="Color de Ojos *">
              </div>
              <div class="col-lg-6 col-sm-12">
                <input type="text" class="form-control espacio-campos" name="color-cabello" placeholder="Color de cabello *">
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="corte-intimo">
                  <option value="Corte íntimo">Corte íntimo</option>
                  <option value="Corte íntimo">Corte íntimo</option>
                  <option value="Corte íntimo">Corte íntimo</option>
                </select>
              </div>
            </div>
            <div class="form-row">
                <div class="col-lg-6 col-sm-12">
                    <div class="busqueda-detallada-range espacio-campos">
                      <label>Estatura</label>
                      <span class="esp-i">140 cm</span>
                      <input class="range-example-bol" type="text" min="140" max="210" value="140" name="points" step="1" />
                      <span class="esp-d">210 cm</span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="busqueda-detallada-range espacio-campos">
                      <label>Peso</label>
                      <span class="esp-i">45 kg</span>
                      <input class="range-example-bol" type="text" min="45" max="150" value="45" name="points" step="1" />
                      <span class="esp-d">150 kg</span>
                    </div>
                </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">ORIENTACIÓN SEXUAL:</h5>
            <div class="form-row">
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="customRadioInline1">Lesbiana</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="customRadioInline2">Heterosexual</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="customRadioInline3">Transexual</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="customRadioInline4">Homosexual</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="customRadioInline5" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="customRadioInline5">Bisexual</label>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos no-marmar">CATEGORÍA:</h5>
            <span class="aparecer">En la(s) que quieres aparecer</span>
            <div class="form-row">
              <div class="col-lg-4 col-sm-12">
                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory1" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Mujeres</span>
                      </label>
                    </div>

                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory2" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas2">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Gigolós</span>
                      </label>
                    </div>

                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory3" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas3">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Gays</span>
                      </label>
                    </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory4" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas4">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Habitaciones</span>
                      </label>
                    </div>

                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory5" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas5">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Trans</span>
                      </label>
                    </div>

                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory6" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas6">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Fetiches</span>
                      </label>
                    </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory7" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas7">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Masajes</span>
                      </label>
                    </div>

                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory8" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas8">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Parejas</span>
                      </label>
                    </div>

                    <div class="form-group checksito-total">
                      <input type="radio" id="customRadioCategory9" name="customRadioCategory" class="custom-control-input">
                      <label class="cbx" for="mas9">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check">Travestis</span>
                      </label>
                    </div>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">TATUAJE(S):</h5>
            <div class="form-row">
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="tatuaje(s)-si" name="tatuaje(s)" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-si">Sí</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="tatuaje(s)-no" name="tatuaje(s)" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-no">No</label>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">PIERCING(S):</h5>
            <div class="form-row">
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="piercing(s)-si" name="piercing(s)" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="piercing(s)-si">Sí</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="piercing(s)-no" name="piercing(s)" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="piercing(s)-no">No</label>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">FUMADOR(A):</h5>
            <div class="form-row">
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="fumador(a)-si" name="fumador(a)" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="fumador(a)-si">Sí</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="fumador(a)-no" name="fumador(a)" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="fumador(a)-no">No</label>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">SEGURIDAD:</h5>
            <div class="form-group checksito-total">
                      <input class="inp-cbx" id="seguridad" type="checkbox" style="display: none;">
                      <label class="cbx" for="seguridad">
                        <span>
                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="color-check espe">Esta opción ocultará tus datos de contacto (teléfono y/o WhatsApp y correo) a los usuarios y/o clientes no registrados debidamente en nuestra plataforma, es decir, a los usuarios y/o clientes anónimos. No obstante, ten presente que esta opción afectará el porcentaje de clientes potenciales (la mayoría de nuestros usuarios y/o clientes son anónimos).</span>
                      </label>
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

          <div class="bloques-de-perfil">
            <div class="form-row">
              <button type="submit" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
            </div>
          </div>
    </form>

          
  @endsection