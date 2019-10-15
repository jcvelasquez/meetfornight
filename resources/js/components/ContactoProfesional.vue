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

  <h5 class="formulario-titulos">DISPONIBILIDAD EN HORAS:</h5>

  <div class="form-row">
      <div class="col-lg-2 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Lunes</span>
          </div>   
      </div>
      <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">
            <vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_lunes"></vue-range-slider>
      </div>
      <div class="col-lg-3 col-sm-12">       
            <div class="busqueda-detallada-range">
                <span class="esp-d">00:00/24:00</span>  
            </div>     
      </div>
      <div class="col-lg-4 col-sm-12">
          <div class="busqueda-detallada-range">
            <p-input type="radio" name="lunes" color="info" value="24" v-model="disponibilidad_lunes" @change="cambiarHorario('lunes')">24/24</p-input>
            <p-input type="radio" name="lunes" color="info" value="0" v-model="disponibilidad_lunes" @change="cambiarHorario('lunes')">No disponible</p-input>
          </div>  
      </div>
  </div>

  <div class="form-row">
      <div class="col-lg-2 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Martes</span>
          </div>   
      </div>
      <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">
            <vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_martes"></vue-range-slider>
      </div>
      <div class="col-lg-3 col-sm-12">       
            <div class="busqueda-detallada-range">
                <span class="esp-d">00:00/24:00</span>  
            </div>     
      </div>
      <div class="col-lg-4 col-sm-12">
          <div class="busqueda-detallada-range">
            <p-input type="radio" name="martes" color="info" value="24" v-model="disponibilidad_martes" @change="cambiarHorario('martes')">24/24</p-input>
            <p-input type="radio" name="martes" color="info" value="0" v-model="disponibilidad_martes" @change="cambiarHorario('martes')">No disponible</p-input>
          </div>  
      </div>
  </div>

  <div class="form-row">
      <div class="col-lg-2 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Miercoles</span>
          </div>   
      </div>
      <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">
            <vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_miercoles"></vue-range-slider>
      </div>
      <div class="col-lg-3 col-sm-12">       
            <div class="busqueda-detallada-range">
                <span class="esp-d">00:00/24:00</span>  
            </div>     
      </div>
      <div class="col-lg-4 col-sm-12">
          <div class="busqueda-detallada-range">
            <p-input type="radio" name="miercoles" color="info" value="24" v-model="disponibilidad_miercoles" @change="cambiarHorario('miercoles')">24/24</p-input>
            <p-input type="radio" name="miercoles" color="info" value="0" v-model="disponibilidad_miercoles" @change="cambiarHorario('miercoles')">No disponible</p-input>
          </div>  
      </div>
  </div>

  <div class="form-row">
      <div class="col-lg-2 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Jueves</span>
          </div>   
      </div>
      <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">
            <vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_jueves"></vue-range-slider>
      </div>
      <div class="col-lg-3 col-sm-12">       
            <div class="busqueda-detallada-range">
                <span class="esp-d">00:00/24:00</span>  
            </div>     
      </div>
      <div class="col-lg-4 col-sm-12">
          <div class="busqueda-detallada-range">
            <p-input type="radio" name="jueves" color="info" value="24" v-model="disponibilidad_jueves" @change="cambiarHorario('jueves')">24/24</p-input>
            <p-input type="radio" name="jueves" color="info" value="0" v-model="disponibilidad_jueves" @change="cambiarHorario('jueves')">No disponible</p-input>
          </div>  
      </div>
  </div>

  <div class="form-row">
      <div class="col-lg-2 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Viernes</span>
          </div>   
      </div>
      <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">
            <vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_viernes"></vue-range-slider>
      </div>
      <div class="col-lg-3 col-sm-12">       
            <div class="busqueda-detallada-range">
                <span class="esp-d">00:00/24:00</span>  
            </div>     
      </div>
      <div class="col-lg-4 col-sm-12">
          <div class="busqueda-detallada-range">
            <p-input type="radio" name="viernes" color="info" value="24" v-model="disponibilidad_viernes" @change="cambiarHorario('viernes')">24/24</p-input>
            <p-input type="radio" name="viernes" color="info" value="0" v-model="disponibilidad_viernes" @change="cambiarHorario('viernes')">No disponible</p-input>
          </div>  
      </div>
  </div>

  <div class="form-row">
      <div class="col-lg-2 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Sabado</span>
          </div>   
      </div>
      <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">
            <vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_sabado"></vue-range-slider>
      </div>
      <div class="col-lg-3 col-sm-12">       
            <div class="busqueda-detallada-range">
                <span class="esp-d">00:00/24:00</span>  
            </div>     
      </div>
      <div class="col-lg-4 col-sm-12">
          <div class="busqueda-detallada-range">
            <p-input type="radio" name="sabado" color="info" value="24" v-model="disponibilidad_sabado" @change="cambiarHorario('sabado')">24/24</p-input>
            <p-input type="radio" name="sabado" color="info" value="0" v-model="disponibilidad_sabado" @change="cambiarHorario('sabado')">No disponible</p-input>
          </div>  
      </div>
  </div>

  <div class="form-row">
      <div class="col-lg-2 col-sm-12">
          <div class="busqueda-detallada-range">
            <span class="esp-i">Domingo</span>
          </div>   
      </div>
      <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">
            <vue-range-slider ref="slider" :min="0" :max="24" v-model="horario_domingo"></vue-range-slider>
      </div>
      <div class="col-lg-3 col-sm-12">       
            <div class="busqueda-detallada-range">
                <span class="esp-d">00:00/24:00</span>  
            </div>     
      </div>
      <div class="col-lg-4 col-sm-12">
          <div class="busqueda-detallada-range">
            <p-input type="radio" name="domingo" color="info" value="24" v-model="disponibilidad_domingo" @change="cambiarHorario('domingo')">24/24</p-input>
            <p-input type="radio" name="domingo" color="info" value="0" v-model="disponibilidad_domingo" @change="cambiarHorario('domingo')">No disponible</p-input>
          </div>  
      </div>
  </div>

</div>


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
    <button type="button" @click="actualizarHorarios()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
  </div>
</div>
</form>
</template>

<script>

    import VueRangeSlider from 'vue-range-component'

    export default {
        mounted() {

          this.listarDisponibilidad();
           
        },
        data() {
          return {
            horario_lunes: [0,24],
            horario_martes: [0,24],
            horario_miercoles: [0,24],
            horario_jueves: [0,24],
            horario_viernes: [0,24],
            horario_sabado: [0,24],
            horario_domingo: [0,24],
            disponibilidad_lunes : 0,
            disponibilidad_martes : 0,
            disponibilidad_miercoles : 0,
            disponibilidad_jueves : 0,
            disponibilidad_viernes : 0,
            disponibilidad_sabado : 0,
            disponibilidad_domingo : 0,
            arDisponibilidad : [],
            celular : '',
            web: '',
            tipo_celular: '',
            agenda: ''
          }
        },
        methods:{

            listarDisponibilidad(){

                  let me = this;

                  axios.get('/disponibilidad-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arDisponibilidad = respuesta.disponibilidad;


                  }).catch(function (error) {  console.log(error);     });

            },
            cambiarHorario(dia){

                let me = this;

                /*

                if(dia == 'lunes'){
                  horario_lunes = [0,me.disponibilidad_lunes]
                }else if(dia == 'martes'){
                  me.disponibilidad_martes
                }else if(dia == 'miercoles'){
                  me.disponibilidad_miercoles
                }else if(dia == 'jueves'){
                  me.disponibilidad_jueves
                }else if(dia == 'viernes'){
                  me.disponibilidad_viernes
                }else if(dia == 'sabado'){
                  me.disponibilidad_sabado
                }else if(dia == 'domingo'){
                  me.disponibilidad_domingo

                }

                */
            },
            actualizarHorarios(){


                  let me = this;
                  var tarifa, opcion;

                  /*
                  if(me.validarTarifas(tipo)){
                    Swal.fire('ERROR', me.erroresPerfil.toString(),'error');
                    return;
                  }

                  switch(tipo){

                    case 'SERVICIO' :   opcion = me.servicio_opcion;
                                        tarifa = me.servicio_tarifa;
                                        break;

                    case 'ESCORT' :     opcion = me.escort_opcion;
                                        tarifa = me.escort_tarifa;
                                        break;

                    case 'EXTRAS' :     opcion = me.extra_opcion;
                                        tarifa = me.extra_tarifa;
                                        break;                                        

                  }
                  */
                  axios.post('disponibilidad-profesional/registrar', {
                    'idusuario' : me.$idusuario,
                    'desde' : desde,
                    'hasta' : hasta,
                    'dia' : dia
                  })
                  .then(function (response) {

                    /*var _tarifa = response.data.tarifa;

                      me.limpiarCampos();
                      me.arTarifas.push(_tarifa);

                      Swal.fire('CONFIRMACION', 'Tarifa agregada correctamente','success');*/

                  })
                  .catch(function (error) {
                      // handle error
                      console.log(error);
                  });

            }
            

        },
        components: {
          VueRangeSlider
        }
    }

    /*
    $(document).ready(function($) {


      $("#horario_miercoles, #horario_jueves, #horario_viernes, #horario_sabado, #horario_domingo").asRange({
        range: true,
        limit: false
      });

      martes = $("#horario_martes").asRange({
              range: true,
              limit: false
            });

    });*/



</script>
