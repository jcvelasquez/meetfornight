<div class="row justify-content-center cuerpo-perfil">
      <div class="col-lg-8 col-sm-12">
          <form action="crear-cuenta-3.php" method="post">
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
                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria1" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria1">Mujeres</label>
                    </div>

                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria2" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria2">Gigolós</label>
                    </div>

                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria3" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria3">Gays</label>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-12">
                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria4" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria4">Habitaciones</label>
                    </div>

                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria5" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria5">Trans</label>
                    </div>

                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria6" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria6">Fetiches</label>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-12">
                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria7" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria7">Masajes</label>
                    </div>

                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria8" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria8">Parejas</label>
                    </div>

                    <div class="custom-radio espacio-campos">
                        <input type="radio" id="radioCuenta2Categoria9" name="radioCuenta2Categoria" class="custom-control-input">
                        <label class="custom-control-label custom-control-label-espacio" for="radioCuenta2Categoria9">Travestis</label>
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
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="form-group checksito">
                      <input class="inp-cbx" id="cbx7" type="checkbox" style="display: none;"/>
                      <label class="cbx" for="cbx7">
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
              <!--<div class="bloques-de-perfil">
                <h5 class="formulario-titulos">SALUD:</h5>
                <div class="form-row espacio-campos">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile">Cargar certificado médico</label>
                  </div>
                  <small id="emailHelp" class="form-text text-muted espacio-campos informativo">Se debe subir el documento en formato PDF, peso máximo de 2MB</small>
                </div>
              </div>-->
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
                  <button type="submit" class="btn btn-busqueda-detallada">SIGUIENTE PASO</button>
                </div>
              </div>
          </form>
      </div>
    </div>