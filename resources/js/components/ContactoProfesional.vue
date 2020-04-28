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

                  <div class="form-group checksito margin-left-contacto">
                    <input id="wasap" true-value="WHATSAPP" false-value="CELULAR" type="checkbox" v-model="tipo_celular" class="inp-cbx" style="display: none;"> 
                    <label for="wasap" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check"> <i class="icon-whatsapp-green esp-icono-bio"></i> Tengo Whatsapp</span></label>
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
                  <div class="custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos" style="padding-left:0;">
                    <input type="radio" id="mensaje" name="contacto" value="MENSAJE" class="custom-control-input" v-model="tipo_contacto">
                    <label class="custom-control-label custom-control-label-espacio" for="mensaje">Mensaje</label>
                  </div>
                  <p>Unicamente <strong>los usuarios registrados</strong> podrán enviarte un mensaje. Podrás leer y contestar a los mensajes a través del panel de control.</p>   
              </div>

              <div class="bloque-opcion">
                <div class="custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos" style="padding-left:0;">
                    <input type="radio" id="correo" name="contacto" value="CORREO" class="custom-control-input" v-model="tipo_contacto">
                    <label class="custom-control-label custom-control-label-espacio" for="correo">Correo</label>
                  </div>
                  <p>Todos <strong>los usuarios anónimos y registrados</strong> podrán enviarte un correo a través de la web. Podrás responder por medio de tu correo a los mensajes (tú correo no será visible en la pagina web).</p>
              </div>

              <div class="bloque-opcion">
                  <div class="custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos" style="padding-left:0;">
                    <input type="radio" id="na" name="contacto" value="NA" class="custom-control-input" v-model="tipo_contacto">
                    <label class="custom-control-label custom-control-label-espacio" for="na">Ninguno</label>
                  </div>
                  <p><strong>No quieres recibir</strong> mensajes o correos de los visitantes. Serás contactado solamente por teléfono y/o whatsapp.</p>                  
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
                    <vue-slider :marks="[0, 24]" :min="0" :max="24" v-model="horario_lunes"></vue-slider>
              </div>
              <div class="col-lg-3 col-sm-12">       
                    <div class="busqueda-detallada-range">
                        <span class="esp-d">00:00/24:00</span>  
                    </div>     
              </div>
              <div class="col-lg-4 col-sm-12">
                  <div class="busqueda-detallada-range">
                      <div class="form-group checksito">
                        <input id="nd_lunes" @change=" horario_lunes = [0,0]" type="checkbox" v-model="disponibilidad_lunes" class="inp-cbx" style="display: none;"> 
                        <label for="nd_lunes" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">No disponible</span></label>
                      </div>
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
                    <vue-slider :marks="[0, 24]" :min="0" :max="24" v-model="horario_martes"></vue-slider>
              </div>
              <div class="col-lg-3 col-sm-12">       
                    <div class="busqueda-detallada-range">
                        <span class="esp-d">00:00/24:00</span>  
                    </div>     
              </div>
              <div class="col-lg-4 col-sm-12">
                  <div class="busqueda-detallada-range">
                     <div class="form-group checksito">
                        <input id="nd_martes" @change=" horario_martes = [0,0]" type="checkbox" v-model="disponibilidad_martes" class="inp-cbx" style="display: none;"> 
                        <label for="nd_martes" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">No disponible</span></label>
                      </div>
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
                      <vue-slider :marks="[0, 24]" :min="0" :max="24" v-model="horario_miercoles"></vue-slider>
                </div>
                <div class="col-lg-3 col-sm-12">       
                      <div class="busqueda-detallada-range">
                          <span class="esp-d">00:00/24:00</span>  
                      </div>     
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range">
                      <div class="form-group checksito">
                        <input id="nd_miercoles" @change=" horario_miercoles = [0,0]" type="checkbox" v-model="disponibilidad_miercoles" class="inp-cbx" style="display: none;"> 
                        <label for="nd_miercoles" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">No disponible</span></label>
                      </div>
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
                      <vue-slider :marks="[0, 24]" :min="0" :max="24" v-model="horario_jueves"></vue-slider>
                </div>
                <div class="col-lg-3 col-sm-12">       
                      <div class="busqueda-detallada-range">
                          <span class="esp-d">00:00/24:00</span>  
                      </div>     
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range">

                      <div class="form-group checksito">
                        <input id="nd_jueves" @change=" horario_jueves = [0,0]" type="checkbox" v-model="disponibilidad_jueves" class="inp-cbx" style="display: none;"> 
                        <label for="nd_jueves" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">No disponible</span></label>
                      </div>

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
                      <vue-slider :marks="[0, 24]" :min="0" :max="24" v-model="horario_viernes"></vue-slider>
                </div>
                <div class="col-lg-3 col-sm-12">       
                      <div class="busqueda-detallada-range">
                          <span class="esp-d">00:00/24:00</span>  
                      </div>     
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range">

                      <div class="form-group checksito">
                        <input id="nd_viernes" @change=" horario_viernes = [0,0]" type="checkbox" v-model="disponibilidad_viernes" class="inp-cbx" style="display: none;"> 
                        <label for="nd_viernes" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">No disponible</span></label>
                      </div>

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
                      <vue-slider :marks="[0, 24]" :min="0" :max="24" v-model="horario_sabado"></vue-slider>
                </div>
                <div class="col-lg-3 col-sm-12">       
                      <div class="busqueda-detallada-range">
                          <span class="esp-d">00:00/24:00</span>  
                      </div>     
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range">

                      <div class="form-group checksito">
                        <input id="nd_sabado" @change=" horario_sabado = [0,0]" type="checkbox" v-model="disponibilidad_sabado" class="inp-cbx" style="display: none;"> 
                        <label for="nd_sabado" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">No disponible</span></label>
                      </div>

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
                      <vue-slider :marks="[0, 24]" :min="0" :max="24" v-model="horario_domingo"></vue-slider>
                      
                </div>
                <div class="col-lg-3 col-sm-12">       
                      <div class="busqueda-detallada-range">
                          <span class="esp-d">00:00/24:00</span>  
                      </div>     
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range">

                      <div class="form-group checksito">
                        <input id="nd_domingo" @change=" horario_domingo = [0,0]" type="checkbox" v-model="disponibilidad_domingo" class="inp-cbx" style="display: none;"> 
                        <label for="nd_domingo" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">No disponible</span></label>
                      </div>

                    </div>  
                </div>
            </div>

        </div>


        <div class="bloques-de-perfil">

            <h5 class="formulario-titulos">AGENDA:</h5>

            <div class="form-group checksito">
              <input id="agenda" name="agenda" :true-value="1" :false-value="0" type="checkbox" v-model="agenda" class="inp-cbx" style="display: none;"> 
              <label for="agenda" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check"><p>La <strong>agenda compartida</strong> le permite a tus clientes reservar una cita y de la misma forma pueden ver en que momento estas disponible. Por el contrario, cambia a la opcion a <strong>agenda oculta</strong> si deseas mantener tu disponibilidad en privado.</p></span></label>
            </div>
          
        </div>

        <div class="bloques-de-perfil">
          <div class="form-row">
            <button type="button" @click="actualizarContacto();" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
          </div>
        </div>

    </form>
</template>


<script>

import VueSlider from 'vue-slider-component';
import 'vue-slider-component/theme/default.css';

    export default {
        components: {
          VueSlider
        },
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
            arLunes : [],
            arMartes : [],
            arMiercoles : [],
            arJueves : [],
            arViernes : [],
            arSabado : [],
            arDomingo : [],
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

                      /*me.arLunes = respuesta.lunes;
                      me.arMartes = respuesta.martes;
                      me.arMiercoles = respuesta.miercoles;
                      me.arJueves = respuesta.jueves;
                      me.arViernes = respuesta.viernes;
                      me.arSabado = respuesta.sabado;
                      me.arDomingo = respuesta.domingo;*/

                      /*me.horario_lunes = [me.arLunes.idesde, me.arLunes.ihasta];
                      me.horario_martes = [me.arMartes.idesde, me.arMartes.ihasta];
                      me.horario_miercoles = [me.arMiercoles.idesde, me.arMiercoles.ihasta];
                      me.horario_jueves = [me.arJueves.idesde, me.arJueves.ihasta];
                      me.horario_viernes = [me.arViernes.idesde, me.arViernes.ihasta];
                      me.horario_sabado = [me.arSabado.idesde, me.arSabado.ihasta];
                      me.horario_domingo = [me.arDomingo.idesde, me.arDomingo.ihasta];*/

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
            obtenerDisponibilidad() {    

              let me = this;

              var arrDisponibilidad = [];
              
              arrDisponibilidad.push({ "desde" : me.horario_lunes[0], "hasta" : me.horario_lunes[1], "dia" : "LUNES" });
              arrDisponibilidad.push({ "desde" : me.horario_martes[0], "hasta" : me.horario_martes[1], "dia" : "MARTES" });
              arrDisponibilidad.push({ "desde" : me.horario_miercoles[0], "hasta" : me.horario_miercoles[1], "dia" : "MIERCOLES" });
              arrDisponibilidad.push({ "desde" : me.horario_jueves[0], "hasta" : me.horario_jueves[1], "dia" : "JUEVES" });
              arrDisponibilidad.push({ "desde" : me.horario_viernes[0], "hasta" : me.horario_viernes[1], "dia" : "VIERNES" });
              arrDisponibilidad.push({ "desde" : me.horario_sabado[0], "hasta" : me.horario_sabado[1], "dia" : "SABADO" });
              arrDisponibilidad.push({ "desde" : me.horario_domingo[0], "hasta" : me.horario_domingo[1], "dia" : "DOMINGO" });

              return JSON.stringify(arrDisponibilidad);

            },
            actualizarContacto(){

                  let me = this;

                  axios.post('contacto-profesional/actualizar', {
                      'celular' : me.celular,
                      'web' : me.web,
                      'agenda' : me.agenda,
                      'tipo_contacto' : me.tipo_contacto,
                      'tipo_celular' : me.tipo_celular,
                      'disponibilidad' : me.obtenerDisponibilidad()
                  })
                  .then(function (response) {
                      
                     Swal.fire('CONFIRMACION', response.data.mensaje ,'success');

                  })
                  .catch(function (error) {
                      console.log(error);
                  });
                  

            }
            

        }
    }

</script>
