@extends('main')

@section('title', 'Contacto')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


  @section('content')


<form action="#" method="post">

<div class="bloques-de-perfil">
  <h5 class="formulario-titulos">CELULAR:</h5>
  <div class="form-row">
    <div class="col-lg-6 col-sm-12 espacio-campos">
      <input type="text" class="form-control" name="celular" placeholder="Celular">
      <small id="emailHelp" class="form-text text-muted informativo-izq">Ejm: +51 947 827 191</small>
    </div>
    <div class="col-lg-6 col-sm-12 espacio-campos">
        <div class="form-row">
            <div class="form-group checksito centrando-opciones custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
                <input type="radio" id="radioWhatsapp" name="radioPhones" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="radioWhatsapp"><i class="icon-whatsapp-green esp-icono-bio"></i>Whatsapp</label>
            </div>
            <div class="form-group checksito centrando-opciones custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
                <input type="radio" id="radioCelular" name="radioPhones" class="custom-control-input">
                <label class="custom-control-label custom-control-label-espacio" for="radioCelular"><i class="fa fa-mobile esp-icono-bio"></i>Celular</label>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="bloques-de-perfil">
  <h5 class="formulario-titulos">PÁGINA WEB:</h5>
  <div class="form-row espacio-campos">
    <div class="col-lg-6 col-sm-12">
      <input type="text" class="form-control" name="pagina-web" placeholder="Página web">
    </div>
    <div class="col-lg-6 col-sm-12">
        <small id="emailHelp" class="form-text text-muted informativo-izq centrando-web">Ejm: www.meetfornight.com</small>
    </div>
  </div>
</div>

<div class="bloques-de-perfil">
  <h5 class="formulario-titulos">CONTACTO:</h5>
  <div class="form-row espacio-campos obligando-columna">
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
          <input type="radio" id="mensaje" name="customRadioInline1" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="mensaje"><span>Mensaje</span><p>Unicamente <strong>los usuarios registrados</strong> podrán enviarte un mensaje. Podrás leer y contestar a los mensajes a través del panel de control.</p></label>
          </div>
        </div>
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
          <input type="radio" id="correos" name="customRadioInline1" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="correos"><span>Correos</span><p>Todos <strong>los usuarios anónimos y registrados</strong> podrán enviarte un correo a través de la web. Podrás responder por medio de tu correo a los mensajes (tú correo no será visible en la pagina web).</p></label>
          </div>
        </div>
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
          <input type="radio" id="ninguna" name="customRadioInline1" class="custom-control-input">
          <label class="custom-control-label custom-control-label-espacio" for="ninguna"><span>Ninguna de las anteriores</span><p>No quieres recibir mensajes o correos de los visitantes. Serás contactado solamente por teléfono y/o whatsapp.</p></label>
          </div>
        </div>
  </div>
</div>

<div class="bloques-de-perfil">
  <h5 class="formulario-titulos">DISPONIBILIDAD EN HORAS:</h5>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Lunes</span>
            <input class="range-example" type="text" min="0" max="24" value="5,24" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="lun" type="checkbox" style="display: none;"/>
            <label class="cbx" for="lun">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>24/24</span>
            </label>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="no-lun" type="checkbox" style="display: none;"/>
            <label class="cbx" for="no-lun">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>No disponible</span>
            </label>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Martes</span>
            <input class="range-example" type="text" min="0" max="24" value="5,24" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="mar" type="checkbox" style="display: none;"/>
            <label class="cbx" for="mar">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>24/24</span>
            </label>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="no-mar" type="checkbox" style="display: none;"/>
            <label class="cbx" for="no-mar">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>No disponible</span>
            </label>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Miércoles</span>
            <input class="range-example" type="text" min="0" max="24" value="5,24" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="mie" type="checkbox" style="display: none;"/>
            <label class="cbx" for="mie">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>24/24</span>
            </label>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="no-mie" type="checkbox" style="display: none;"/>
            <label class="cbx" for="no-mie">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>No disponible</span>
            </label>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Jueves</span>
            <input class="range-example" type="text" min="0" max="24" value="5,24" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="jue" type="checkbox" style="display: none;"/>
            <label class="cbx" for="jue">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>24/24</span>
            </label>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="no-jue" type="checkbox" style="display: none;"/>
            <label class="cbx" for="no-jue">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>No disponible</span>
            </label>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Viernes</span>
            <input class="range-example" type="text" min="0" max="24" value="5,24" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="vie" type="checkbox" style="display: none;"/>
            <label class="cbx" for="vie">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>24/24</span>
            </label>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="no-vie" type="checkbox" style="display: none;"/>
            <label class="cbx" for="no-vie">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>No disponible</span>
            </label>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Sábado</span>
            <input class="range-example" type="text" min="0" max="24" value="5,24" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="sab" type="checkbox" style="display: none;"/>
            <label class="cbx" for="sab">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>24/24</span>
            </label>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="no-sab" type="checkbox" style="display: none;"/>
            <label class="cbx" for="no-sab">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>No disponible</span>
            </label>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Domingo</span>
            <input class="range-example" type="text" min="0" max="24" value="5,24" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="dom" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dom">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>24/24</span>
            </label>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <input class="inp-cbx" id="no-dom" type="checkbox" style="display: none;"/>
            <label class="cbx" for="no-dom">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
              <span>No disponible</span>
            </label>
          </div>
      </div>
  </div>
</div>

<!--<div class="bloques-de-perfil">
  <h5 class="formulario-titulos">DISPONIBILIDAD EN FECHAS:</h5>
  <div class="form-row espacio-campos-big">
    <div class="disponibilidad">
      <div class="fecha">
        <a href="">Lun</a>
        <span class="cencen">
            <input class="inp-cbx" id="dia1" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dia1">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
            </label>
        </span>
      </div>
      <div class="fecha">
        <a href="">Mar</a>
        <span class="cencen">
            <input class="inp-cbx" id="dia2" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dia2">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
            </label>
        </span>
      </div>
      <div class="fecha">
        <a href="">Mie</a>
        <span class="cencen">
            <input class="inp-cbx" id="dia3" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dia3">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
            </label>
        </span>
      </div>
      <div class="fecha">
        <a href="">Jue</a>
        <span class="cencen">
            <input class="inp-cbx" id="dia4" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dia4">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
            </label>
        </span>
      </div>
      <div class="fecha">
        <a href="">Vie</a>
        <span class="cencen">
            <input class="inp-cbx" id="dia5" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dia5">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
            </label>
        </span>
      </div>
      <div class="fecha">
        <a href="">Sab</a>
        <span class="cencen">
            <input class="inp-cbx" id="dia6" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dia6">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
            </label>
        </span>
      </div>
      <div class="fecha">
        <a href="">Dom</a>
        <span class="cencen">
            <input class="inp-cbx" id="dia7" type="checkbox" style="display: none;"/>
            <label class="cbx" for="dia7">
              <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
              </span>
            </label>
        </span>
      </div>
    </div>
  </div>
</div>-->

<div class="bloques-de-perfil">
  <div class="form-row">
    <div class="col-lg-12 col-sm-12">
      <div class="form-group checksito">
        <input class="inp-cbx" id="agenda" type="checkbox" style="display: none;"/>
        <label class="cbx" for="agenda">
          <span>
            <svg width="12px" height="10px" viewbox="0 0 12 10">
              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
            </svg>
          </span>
          <span>Agenda compartida</span><p>La <strong>agenda compartida</strong> le permite a tus clientes reservar una cita y de la misma forma pueden ver en que momento estas disponible.</p>
        </label>
      </div>
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