<template>
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
          <p-radio name="contacto" id="mensaje" true-value="24" :value="24"><span>Mensaje</span><p>Unicamente <strong>los usuarios registrados</strong> podrán enviarte un mensaje. Podrás leer y contestar a los mensajes a través del panel de control.</p></p-radio>

   
          </div>
        </div>
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
          <p-radio name="contacto" id="correo" true-value="24" :value="24"><span>Correos</span><p>Todos <strong>los usuarios anónimos y registrados</strong> podrán enviarte un correo a través de la web. Podrás responder por medio de tu correo a los mensajes (tú correo no será visible en la pagina web).</p></p-radio>
          
          </div>
        </div>
        <div class="bloque-opcion">
          <div class="no-pad custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">

            <p-radio name="contacto" id="na" true-value="24" :value="24"><span>Ninguna de las anteriores</span><p>No quieres recibir mensajes o correos de los visitantes. Serás contactado solamente por teléfono y/o whatsapp.</p></p-radio>

       
          </div>
        </div>
  </div>
</div>

<div class="bloques-de-perfil">

  
<vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_lunes"></vue-range-slider>

  <h5 class="formulario-titulos">DISPONIBILIDAD EN HORAS:</h5>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Lunes</span>
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="lunes" color="info" value="24" v-model="disponibilidad_lunes" @change="cambiarHorario('lunes')">24/24</p-input>
          </div>
          <div class="form-group checksito esp-checkcheck">
         <p-input type="radio" name="lunes" color="info" value="0" v-model="disponibilidad_lunes" @change="cambiarHorario('lunes')">No disponible</p-input>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Martes</span>
            <input class="range-example" id="horario_martes" type="text" min="0" max="24" value="" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="martes" color="info" value="24" v-model="disponibilidad_martes" @change="cambiarHorario('martes')">24/24</p-input>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="martes" color="info" value="0" v-model="disponibilidad_martes" @change="cambiarHorario('martes')">No disponible</p-input>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Miércoles</span>
            <input class="range-example" id="horario_miercoles" type="text" min="0" max="24" value="" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="miercoles" color="info" value="24" v-model="disponibilidad_miercoles" @change="cambiarHorario('miercoles')">24/24</p-input>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="miercoles" color="info" value="0" v-model="disponibilidad_miercoles" @change="cambiarHorario('miercoles')">No disponible</p-input>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Jueves</span>
            <input class="range-example" id="horario_jueves" type="text" min="0" max="24" value="" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="jueves" color="info" value="24" v-model="disponibilidad_jueves" @change="cambiarHorario('jueves')">24/24</p-input>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="jueves" color="info" value="0" v-model="disponibilidad_jueves" @change="cambiarHorario('jueves')">No disponible</p-input>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Viernes</span>
            <input class="range-example" id="horario_viernes" type="text" min="0" max="24" value="" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="viernes" color="info" value="24" v-model="disponibilidad_viernes" @change="cambiarHorario('viernes')">24/24</p-input>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="viernes" color="info" value="0" v-model="disponibilidad_viernes" @change="cambiarHorario('viernes')">No disponible</p-input>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Sábado</span>
            <input class="range-example" type="text" id="horario_sabado" min="0" max="24" value="" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="sabado" color="info" value="24" v-model="disponibilidad_sabado" @change="cambiarHorario('sabado')">24/24</p-input>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="sabado" color="info" value="0" v-model="disponibilidad_sabado" @change="cambiarHorario('sabado')">No disponible</p-input>
          </div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-lg-6 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Domingo</span>
            <input class="range-example" type="text" id="horario_domingo" min="0" max="24" value="" name="points" step="1" />
            <span class="esp-d">00:00/24:00</span>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="domingo" color="info" value="24" v-model="disponibilidad_domingo" @change="cambiarHorario('domingo')">24/24</p-input>
          </div>
          <div class="form-group checksito esp-checkcheck">
            <p-input type="radio" name="domingo" color="info" value="0" v-model="disponibilidad_domingo" @change="cambiarHorario('domingo')">No disponible</p-input>
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
</template>

<script>

var martes;

import VueRangeSlider from 'vue-range-component'

    export default {
        mounted() {
           

       
            
        },
        data() {
          return {
            horario_lunes: [0,24],
            disponibilidad_lunes : 0,
            disponibilidad_martes : 0,
            disponibilidad_miercoles : 0,
            disponibilidad_jueves : 0,
            disponibilidad_viernes : 0,
            disponibilidad_sabado : 0,
            disponibilidad_domingo : 0
          }
        },
        methods:{

            cambiarHorario(dia){

              

              let me = this;

             

              //slider.setValue([0,4])
              //me.lunes[0,4];
              //me.horario_lunes.refresh;
              //console.log( me.horario_lunes)

              me.horario_lunes = [0,4];

              //me.lunes[0,4]
               
               
                //console.log(me.radio_lunes.value)
                console.log(me.disponibilidad_lunes)
                console.log(dia)

            }

        },
        components: {
          VueRangeSlider
        }
    }

    $(document).ready(function($) {


      $("#horario_miercoles, #horario_jueves, #horario_viernes, #horario_sabado, #horario_domingo").asRange({
        range: true,
        limit: false
      });

      martes = $("#horario_martes").asRange({
              range: true,
              limit: false
            });

        


    });



</script>
