<div class="row justify-content-center cuerpo-perfil">
  <div class="col-lg-8 col-sm-12">

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">CELULAR:</h5>
      <div class="form-row">
        <div class="col-lg-6 col-sm-12 espacio-campos">
          <input type="text" class="form-control" name="celular" placeholder="Celular">
          <small class="form-text text-muted informativo-izq">Ejm: +51 947 827 191</small>
        </div>
        <div class="col-lg-6 col-sm-12 espacio-campos">

          <div class="form-group checksito centrando-opciones custom-control">
            <input class="inp-cbx always-validate" id="tipo_celular" name="tipo_celular" type="checkbox" value="WHATSAPP" style="display: none;" />
                <label class="cbx" for="tipo_celular">
                  <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                  </span>
                  <span class="agenda_check"><i class="icon-whatsapp-green esp-icono-bio"></i> Tengo Whatsapp</span>
                </label>
            </div>
          </div>

      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">PÁGINA WEB:</h5>
      <div class="form-row espacio-campos">
        <div class="col-lg-6 col-sm-12">
          <input type="text" class="form-control" name="pagina_web" placeholder="Página web">
        </div>
        <div class="col-lg-6 col-sm-12">
          <small class="form-text text-muted informativo-izq centrando-web">Ejm: www.meetfornight.com</small>
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">CONTACTO:</h5>
      <div class="form-row espacio-campos obligando-columna">
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check">
            <input type="radio" id="mensaje" name="tipo_contacto" value="MENSAJE" class="custom-control-input">
            <label class="custom-control-label custom-control-label-espacio" for="mensaje"><span>Mensaje</span>
              <p>Los <strong>usuarios conectados</strong> pueden enviarte un mensaje (con un adjunto). Puedes leer contestar a los mensajes a través del dashboard.</p>
            </label>
          </div>
        </div>
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check">
            <input type="radio" id="correos" name="tipo_contacto" value="CORREO" class="custom-control-input">
            <label class="custom-control-label custom-control-label-espacio" for="correos"><span>Correos</span>
              <p>Los <strong>usuarios anónimos</strong> conectados pueden enviarte un correo a través de la web. Puedes enviar respuestas a través de tu correo (tu correo no sera visible en la pagina web).</p>
            </label>
          </div>
        </div>
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check">
            <input type="radio" id="ninguna" name="tipo_contacto" value="NA" class="custom-control-input">
            <label class="custom-control-label custom-control-label-espacio" for="ninguna"><span>Ninguna de las anteriores</span>
              <p>No quieres recibir mensajes o correos de los visitantes. Serás contactada solamente por teléfono.</p>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos espacio-campos">DISPONIBILIDAD EN HORAS:</h5>
      <div class="form-row espacio-campos">
        <div class="col-lg-2 col-sm-12">
          <span class="esp-i">Lunes</span>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="desde_lunes" class="form-control selector_horario" placeholder="Desde" autocomplete="nope"/>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="hasta_lunes" class="form-control selector_horario" placeholder="Hasta" autocomplete="nope"/>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">

            <input class="inp-cbx " id="disponibilidad_lunes_0" name="horas_lunes" data-dia="lunes" type="checkbox" value="0" style="display: none;" />
            <label class="cbx" for="disponibilidad_lunes_0">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check">No disponible </span>
            </label>

        </div>
      </div>
      <div class="form-row espacio-campos">
        <div class="col-lg-2 col-sm-12">
          <span class="esp-i">Martes</span>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="desde_martes" class="form-control selector_horario" placeholder="Desde" autocomplete="nope"/>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="hasta_martes" class="form-control selector_horario" placeholder="Hasta" autocomplete="nope"/>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">

            <input class="inp-cbx " id="disponibilidad_martes_0" name="horas_martes" data-dia="martes" type="checkbox" value="0" style="display: none;" />
            <label class="cbx" for="disponibilidad_martes_0">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check">No disponible </span>
            </label>

        </div>
      </div>
      <div class="form-row espacio-campos">
        <div class="col-lg-2 col-sm-12">
          <span class="esp-i">Miercoles</span>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="desde_miercoles" class="form-control selector_horario" placeholder="Desde" autocomplete="nope"/>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="hasta_miercoles" class="form-control selector_horario" placeholder="Hasta" autocomplete="nope"/>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">

            <input class="inp-cbx " id="disponibilidad_miercoles_0" name="horas_miercoles" data-dia="miercoles" type="checkbox" value="0" style="display: none;" />
            <label class="cbx" for="disponibilidad_miercoles_0">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check">No disponible </span>
            </label>

        </div>
      </div>
      <div class="form-row espacio-campos">
        <div class="col-lg-2 col-sm-12">
          <span class="esp-i">Jueves</span>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="desde_jueves" class="form-control selector_horario" placeholder="Desde" autocomplete="nope"/>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="hasta_jueves" class="form-control selector_horario" placeholder="Hasta" autocomplete="nope"/>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">

            <input class="inp-cbx " id="disponibilidad_jueves_0" name="horas_jueves" data-dia="jueves" type="checkbox" value="0" style="display: none;" />
            <label class="cbx" for="disponibilidad_jueves_0">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check">No disponible </span>
            </label>

        </div>
      </div>
      <div class="form-row espacio-campos">
        <div class="col-lg-2 col-sm-12">
          <span class="esp-i">Viernes</span>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="desde_viernes" class="form-control selector_horario" placeholder="Desde" autocomplete="nope"/>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="hasta_viernes" class="form-control selector_horario" placeholder="Hasta" autocomplete="nope"/>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">

            <input class="inp-cbx " id="disponibilidad_viernes_0" name="horas_viernes" data-dia="viernes" type="checkbox" value="0" style="display: none;" />
            <label class="cbx" for="disponibilidad_viernes_0">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check">No disponible </span>
            </label>

        </div>
      </div>
      <div class="form-row espacio-campos">
        <div class="col-lg-2 col-sm-12">
          <span class="esp-i">Sábado</span>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="desde_sabado" class="form-control selector_horario" placeholder="Desde" autocomplete="nope"/>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="hasta_sabado" class="form-control selector_horario" placeholder="Hasta" autocomplete="nope"/>
        </div>
        <div class="col-lg-4 col-sm-12  text-center">

            <input class="inp-cbx " id="disponibilidad_sabado_0" name="horas_sabado" data-dia="sabado" type="checkbox" value="0" style="display: none;" />
            <label class="cbx" for="disponibilidad_sabado_0">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check">No disponible </span>
            </label>

        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-2 col-sm-12">
          <span class="esp-i">Domingo</span>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="desde_domingo" class="form-control selector_horario" placeholder="Desde" autocomplete="nope"/>
        </div>
        <div class="col-lg-3 col-sm-12">        
            <input type="text" readonly name="hasta_domingo" class="form-control selector_horario" placeholder="Hasta" autocomplete="nope"/>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">

            <input class="inp-cbx " id="disponibilidad_domingo_0" name="horas_domingo" data-dia="domingo" type="checkbox" value="0" style="display: none;" />
            <label class="cbx" for="disponibilidad_domingo_0">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check">No disponible </span>
            </label>

        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <div class="form-row">
        <div class="col-lg-12 col-sm-12">
          <div class="form-group checksito">
            <input class="inp-cbx " id="agenda" name="agenda" type="checkbox" value="1" style="display: none;" />
            <label class="cbx" for="agenda">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span class="agenda_check"><strong>Agenda compartida</strong> </span>
              <p>Marca la opción de <strong>agenda compartida</strong> le permite a tus clientes reservar una cita y de la misma forma pueden ver en que momento estas disponible.</p>
            </label>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>