<div class="row justify-content-center cuerpo-perfil">
      <div class="col-lg-8 col-sm-12">
          

       <!--    <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">TIPO DE MONEDA:</h5>
            <p>Elige el tipo de moneda en el que deseas trabajar con tus clientes.</p>
            <div class="linea-morada">
              <div class="row">
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                  <input type="radio" id="tatuaje(s)-si" name="tatuaje(s)" class="custom-control-input">
                  <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-si">/S.</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                  <input type="radio" id="tatuaje(s)-no" name="tatuaje(s)" class="custom-control-input">
                  <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-no">$</label>
                </div>
              </div>
            </div>
          </div> -->

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">TARIFAS:</h5>
            <p>Especifique sus <strong class="precio-morado">tarifas privadas</strong> a continuación, o si prefiere puede agregarlas luego:</p>

            <table class="table" id="tarifaxhoras">
                <thead>
                  <tr>
                    <th width="40">#</th>
                    <th>Tipo</th>
                    <th>Tarifa</th>
                    <th width="80">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <div class="form-row" >
              <div class="col-lg col-sm-12 espacio-campos">
                <select type="text" class="form-control" name="servicio_opcion" id="servicio_opcion">
                  <option value="">Selecciona un tipo</option>
                  <option value="30 Minutos">30 minutos</option>
                  <option value="1 Hora">1 Hora</option>
                  <option value="1h30">1h30</option>
                  <option value="2 Horas">2 Horas</option>
                  <option value="2h30">2h30</option>
                  <option value="Cena">Cena</option>
                  <option value="Noche">Noche</option>
                </select>
              </div>
              <div class="col-lg col-sm-12 espacio-campos">
                <input type="number" class="form-control" name="servicio_tarifa" id="servicio_tarifa" placeholder="Costo de servicio">
              </div>
              <div class="col-lg-1 col-sm-12 espacio-campos">
                <button type="button" onclick="agregarTarifa()" class="btn btn-primary mas-cuadrado"><i class="fa fa-plus"></i></button>
              </div>
            </div>
         
      
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">ESCORT:</h5>
            <p><strong class="rojo-importante">Anotación importante</strong></p>
            <p>Unicamente apareceran en la categoría <strong class="precio-morado">"escort"</strong> los miembros de <strong class="precio-morado">Meet For Night</strong> que presten <strong class="precio-morado">ACOMPAÑAMIENTO</strong> tales y como: a una feria, un evento (anfitrionas o anfitriones), o esten de acuerdo en acompañar a su cliente en su(s) viaje(s) fuera o dentro del país.</p>
            <p>Especifique sus <strong class="precio-morado">tarifas de acompañante</strong> a continuación, o si prefiere puede agregarlas luego</p>

            <table class="table" id="escort">
                <thead>
                  <tr>
                    <th scope="col" width="40">#</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col" width="80">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            
                <div class="form-row">
                  <div class="col-lg col-sm-12 espacio-campos">
                    <select type="text" class="form-control" name="escort_opcion" id="escort_opcion">
                      <option value="">Selecciona un tipo</option>
                      <option value="Gastos de viaje +25km">Gastos de viaje +25km</option>
                      <option value="Gastos de viaje +50km">Gastos de viaje +50km</option>
                      <option value="Gastos de viaje +75km">Gastos de viaje +75km</option>
                      <option value="Gastos de viaje +100km">Gastos de viaje +100km</option>
                      <option value="Viaje de negocios">Viaje de negocios</option>
                    </select>
                  </div>
                  <div class="col-lg col-sm-12 espacio-campos">
                    <input type="number" class="form-control" name="escort_tarifa" id="escort_tarifa" placeholder="Costo de servicio">
                  </div>
                  <div class="col-lg-1 col-sm-12 espacio-campos">
                    <button type="button" onclick="agregarEscort()" class="btn btn-primary mas-cuadrado"><i class="fa fa-plus"></i></button>
                  </div>
                </div>

          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">EXTRAS:</h5>
            <p>Especifique sus <strong class="precio-morado">tarifas adicionales</strong> a continuación, o si prefiere puede agregarlas luego (Las posibilidades se toman del paso anterior)</p>
            
            <table class="table" id="extras">
                <thead>
                  <tr>
                    <th scope="col" width="40">#</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col" width="80">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>

              <div class="form-row">
                <div class="col-lg col-sm-12 espacio-campos">
                  <select type="text" class="form-control" name="extra_opcion" id="extra_opcion">
                    <option value="">Selecciona un tipo</option>
                    <option value="Intercambio">Intercambio</option>
                    <option value="Cena">Cena</option>
                    <option value="Pelicula o fotos">Pelicula o fotos</option>
                    <option value="Pasar la noche">Pasar la noche</option>
                    <option value="Posibilidad de ducharse">Posibilidad de ducharse</option>
                    <option value="Condon femenino (Femidon)">Condon femenino (Femidon)</option>
                    <option value="Quickies (algo rapido)">Quickies (algo rapido)</option>
                    <option value="Sauna">Sauna</option>
                    <option value="Sexo al aire libre">Sexo al aire libre</option>
                    <option value="Sexo en el coche">Sexo en el coche</option>
                    <option value="Streaptease">Streaptease</option>
                    <option value="Trio (M/M/H)">Trio (M/M/H)</option>
                    <option value="Trio (H/H/M)">Trio (H/H/M)</option>
                    <option value="Visita a clubes de intercambio">Visita a clubes de intercambio</option>
                    <option value="Viaje de negocios al exterior">Viaje de negocios al exterior</option>
                    <option value="Viaje de negocios interno">Viaje de negocios interno</option>
                  </select>
                </div>
                
                <div class="col-lg col-sm-12 espacio-campos">
                  <input type="number" class="form-control" name="extra_tarifa" id="extra_tarifa" placeholder="Costo de servicio">
                </div>
                <div class="col-lg-1 col-sm-12 espacio-campos">
                  <button type="button" onclick="agregarExtras()" class="btn btn-primary mas-cuadrado"><i class="fa fa-plus"></i></button>
                </div>
              </div>
       
          </div>
      </div>
    </div>