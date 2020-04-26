<template>

   <form action="#" method="post">

      <div class="bloques-de-perfil">
        <h5 class="formulario-titulos">CELULAR:</h5>
        <div class="form-row">
          <div class="col-lg-6 col-sm-12 espacio-campos">
            <input type="text" name="celular" class="form-control" placeholder="Celular" v-model="celular" />
            <small class="form-text text-muted informativo-izq">Ejm: +51 947 827 191</small>
          </div>
          <div class="col-lg-6 col-sm-12 espacio-campos">
              <div class="form-row">
                  <div class="form-group checksito centrando-opciones custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
                      <p-input type="radio" name="tipo_celular" color="info" value="WHATSAPP" v-model="tipo_celular"><i class="icon-whatsapp-green esp-icono-bio"></i>Whatsapp</p-input>
                  </div>
                  <div class="form-group checksito centrando-opciones custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12">
                      <p-input type="radio" name="tipo_celular" color="info" value="CELULAR" v-model="tipo_celular"><i class="fa fa-mobile esp-icono-bio"></i>Celular</p-input>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <div class="bloques-de-perfil">
        <h5 class="formulario-titulos">PÁGINA WEB:</h5>
        <div class="form-row espacio-campos">
          <div class="col-lg-6 col-sm-12">
            <input type="text" class="form-control" name="web" v-model="web" placeholder="Página web">
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
                <div class="no-margin-right-check col-lg col-md-12 col-sm-12">
                <p-input type="radio" name="contacto" value="MENSAJE" v-model="tipo_contacto"><span>Mensaje</span></p-input>
                <p>Unicamente <strong>los usuarios registrados</strong> podrán enviarte un mensaje. Podrás leer y contestar a los mensajes a través del panel de control.</p>   
                </div>
              </div>
              <div class="bloque-opcion">
                <div class="no-margin-right-check col-lg col-md-12 col-sm-12">
                <p-input type="radio" name="contacto" value="CORREO" v-model="tipo_contacto"><span>Correos</span></p-input>
                <p>Todos <strong>los usuarios anónimos y registrados</strong> podrán enviarte un correo a través de la web. Podrás responder por medio de tu correo a los mensajes (tú correo no será visible en la pagina web).</p>
                </div>
              </div>
              <div class="bloque-opcion">
                <div class="no-margin-right-check col-lg col-md-12 col-sm-12">
                  <p-input type="radio" name="contacto" value="NA" v-model="tipo_contacto"><span>Ninguna de las anteriores</span></p-input>
                  <p>No quieres recibir mensajes o correos de los visitantes. Serás contactado solamente por teléfono y/o whatsapp.</p>
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
                    <p-input type="radio" name="lunes" color="info" value="24" v-model="disponibilidad_lunes" @change=" horario_lunes = [0,24] ">24/24</p-input>
                    <p-input type="radio" name="lunes" color="info" value="0" v-model="disponibilidad_lunes" @change=" horario_lunes = [0,0] ">No disponible</p-input>
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
                    <p-input type="radio" name="martes" color="info" value="24" v-model="disponibilidad_martes" @change=" horario_martes = [0,24] ">24/24</p-input>
                    <p-input type="radio" name="martes" color="info" value="0" v-model="disponibilidad_martes" @change=" horario_martes = [0,0] ">No disponible</p-input>
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
                      <p-input type="radio" name="miercoles" color="info" value="24" v-model="disponibilidad_miercoles" @change=" horario_miercoles = [0,24] ">24/24</p-input>
                      <p-input type="radio" name="miercoles" color="info" value="0" v-model="disponibilidad_miercoles" @change=" horario_miercoles = [0,0] ">No disponible</p-input>
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
                      <p-input type="radio" name="jueves" color="info" value="24" v-model="disponibilidad_jueves" @change=" horario_jueves = [0,24] ">24/24</p-input>
                      <p-input type="radio" name="jueves" color="info" value="0" v-model="disponibilidad_jueves" @change=" horario_jueves = [0,0] ">No disponible</p-input>
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
                      <p-input type="radio" name="viernes" color="info" value="24" v-model="disponibilidad_viernes" @change=" horario_viernes = [0,24] ">24/24</p-input>
                      <p-input type="radio" name="viernes" color="info" value="0" v-model="disponibilidad_viernes" @change=" horario_viernes = [0,0] ">No disponible</p-input>
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
                      <p-input type="radio" name="sabado" color="info" value="24" v-model="disponibilidad_sabado" @change=" horario_sabado = [0,24] ">24/24</p-input>
                      <p-input type="radio" name="sabado" color="info" value="0" v-model="disponibilidad_sabado" @change=" horario_sabado = [0,0] ">No disponible</p-input>
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
                      <p-input type="radio" name="domingo" color="info" value="24" v-model="disponibilidad_domingo" @change=" horario_domingo = [0,24] ">24/24</p-input>
                      <p-input type="radio" name="domingo" color="info" value="0" v-model="disponibilidad_domingo" @change=" horario_domingo = [0,0] ">No disponible</p-input>
                    </div>  
                </div>
            </div>

        </div>


        <div class="bloques-de-perfil">
          <div class="form-row">
            <div class="col-lg-12 col-sm-12">
              <div class="form-group bloque-opcion">

                <p-check class="p-default p-curve" v-model="agenda" :true-value=1 :false-value=0 @change="actualizarHorarios()" color="success" off-color="danger" toggle>
                    <span>AGENDA COMPARTIDA</span>
                    <label slot="off-label"><span>AGENDA OCULTA</span></label>
                </p-check>

                <p>La <span>agenda compartida</span> le permite a tus clientes reservar una cita y de la misma forma pueden ver en que momento estas disponible. Por el contrario, cambia a la opcion a <span>agenda oculta</span> si deseas mantener tu disponibilidad en privado.</p>
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

    export default {
        mounted() {

          this.listarDisponibilidad();
          this.listarConfiguracion();
           
        },
        data() {
          return {
            horario_lunes: [],
            horario_martes: [],
            horario_miercoles: [],
            horario_jueves: [],
            horario_viernes: [],
            horario_sabado: [],
            horario_domingo: [],
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
            tipo_contacto: '',
            agenda: ''
          }
        },
        methods:{
            listarConfiguracion(){

                let me = this;

                  axios.get('/contacto-profesional/listar').then(function (response) {

                      var respuesta= response.data;

                      me.celular = respuesta.contacto.celular;
                      me.web = respuesta.contacto.web;
                      me.agenda = respuesta.contacto.agenda;
                      me.tipo_contacto = respuesta.contacto.tipo_contacto;
                      me.tipo_celular = respuesta.contacto.tipo_celular;

                  }).catch(function (error) {  console.log(error);     });


            },
            listarDisponibilidad(){

                  let me = this;

                  axios.get('/disponibilidad-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arDisponibilidad = respuesta.disponibilidad;

                      if(me.arDisponibilidad.length > 0){

                            me.horario_lunes = me.obtenerHorarioDia(me.arDisponibilidad, 'LUNES');
                            me.horario_martes = me.obtenerHorarioDia(me.arDisponibilidad, 'MARTES');
                            me.horario_miercoles = me.obtenerHorarioDia(me.arDisponibilidad, 'MIERCOLES');
                            me.horario_jueves = me.obtenerHorarioDia(me.arDisponibilidad, 'JUEVES');
                            me.horario_viernes = me.obtenerHorarioDia(me.arDisponibilidad, 'VIERNES');
                            me.horario_sabado = me.obtenerHorarioDia(me.arDisponibilidad, 'SABADO');
                            me.horario_domingo = me.obtenerHorarioDia(me.arDisponibilidad, 'DOMINGO');

                      }


                  }).catch(function (error) {  console.log(error);     });

            },
            obtenerHorarioDia(disponibilidad, dia) {

              for(var i=0; i < disponibilidad.length; i++){
                  if(disponibilidad[i].dia == dia){
                      return [disponibilidad[i].idesde, disponibilidad[i].ihasta];
                  }
              }

            },
            actualizarHorarios(){

                  let me = this;
                  var tarifa, opcion;

            }
            

        }
    }

</script>
