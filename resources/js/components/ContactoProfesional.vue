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
                    <vue-timepicker auto-scroll placeholder="Desde" v-model="desde_lunes"></vue-timepicker>
              </div>
              <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">    
                    <vue-timepicker auto-scroll placeholder="Hasta" v-model="hasta_lunes"></vue-timepicker>   
              </div>
              <div class="col-lg-4 col-sm-12">
                  <div class="busqueda-detallada-range" style="padding-top:2em;">
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
                    <vue-timepicker auto-scroll placeholder="Desde" v-model="desde_martes"></vue-timepicker>
              </div>
              <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">    
                    <vue-timepicker auto-scroll placeholder="Hasta" v-model="hasta_martes"></vue-timepicker>   
              </div>
              <div class="col-lg-4 col-sm-12">
                  <div class="busqueda-detallada-range" style="padding-top:2em;">
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
                    <vue-timepicker auto-scroll placeholder="Desde" v-model="desde_miercoles"></vue-timepicker>
                </div>
                <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">    
                      <vue-timepicker auto-scroll placeholder="Hasta" v-model="hasta_miercoles"></vue-timepicker>   
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range" style="padding-top:2em;">
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
                      <vue-timepicker auto-scroll placeholder="Desde" v-model="desde_jueves"></vue-timepicker>
                </div>
                <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">    
                      <vue-timepicker auto-scroll placeholder="Hasta" v-model="hasta_jueves"></vue-timepicker>   
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range" style="padding-top:2em;">

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
                      <vue-timepicker auto-scroll placeholder="Desde" v-model="desde_viernes"></vue-timepicker>
                </div>
                <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">    
                      <vue-timepicker auto-scroll placeholder="Hasta" v-model="hasta_viernes"></vue-timepicker>   
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range" style="padding-top:2em;">

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
                      <vue-timepicker auto-scroll placeholder="Desde" v-model="desde_sabado"></vue-timepicker>
                </div>
                <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">    
                      <vue-timepicker auto-scroll placeholder="Hasta" v-model="hasta_sabado"></vue-timepicker>   
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range" style="padding-top:2em;">

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
                      <vue-timepicker auto-scroll placeholder="Desde" v-model="desde_domingo"></vue-timepicker>
                </div>
                <div class="col-lg-3 col-sm-12" style="padding-top:1.5em;">    
                      <vue-timepicker auto-scroll placeholder="Hasta" v-model="hasta_domingo"></vue-timepicker>   
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="busqueda-detallada-range" style="padding-top:2em;">

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

/* import VueSlider from 'vue-slider-component';
import 'vue-slider-component/theme/default.css';
 */
// Main JS (in UMD format)
import VueTimepicker from 'vue2-timepicker'

// CSS
import 'vue2-timepicker/dist/VueTimepicker.css'

    export default {
        components: {
          VueTimepicker
        },
        mounted() {

          this.listarDisponibilidad();
          this.listarConfiguracion();
           
        },
        data() {
          return {
            disponibilidad_lunes : 0,
            disponibilidad_martes : 0,
            disponibilidad_miercoles : 0,
            disponibilidad_jueves : 0,
            disponibilidad_viernes : 0,
            disponibilidad_sabado : 0,
            disponibilidad_domingo : 0,
            celular : '',
            web: '',
            tipo_celular: '',
            tipo_contacto: '',
            agenda: '',
            desde_lunes: "",
            hasta_lunes: "",
            desde_martes: "",
            hasta_martes: "",
            desde_miercoles: "",
            hasta_miercoles: "",
            desde_jueves: "",
            hasta_jueves: "",
            desde_viernes: "",
            hasta_viernes: "",
            desde_sabado: "",
            hasta_sabado: "",
            desde_domingo: "",
            hasta_domingo: "",
          }
        },
        methods:{
            listarConfiguracion(){

                let me = this;

                  axios.get('contacto-profesional/listar').then(function (response) {

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

                  axios.get('disponibilidad-profesional/listar').then(function (response) {

                      var respuesta= response.data;

                      me.desde_lunes = respuesta.lunes.desde;
                      me.hasta_lunes = respuesta.lunes.hasta;
                      me.desde_martes = respuesta.martes.desde;
                      me.hasta_martes = respuesta.martes.hasta;
                      me.desde_miercoles = respuesta.miercoles.desde;
                      me.hasta_miercoles = respuesta.miercoles.hasta;
                      me.desde_jueves = respuesta.jueves.desde;
                      me.hasta_jueves = respuesta.jueves.hasta;
                      me.desde_viernes = respuesta.viernes.desde;
                      me.hasta_viernes = respuesta.viernes.hasta;
                      me.desde_sabado = respuesta.sabado.desde;
                      me.hasta_sabado = respuesta.sabado.hasta;
                      me.desde_domingo = respuesta.domingo.desde;
                      me.hasta_domingo = respuesta.domingo.hasta;


                  }).catch(function (error) {  console.log(error);     });

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
                  

            },
            obtenerDisponibilidad() {    

              let me = this;

              var arrDisponibilidad = [];
              
              arrDisponibilidad.push({ "desde" : me.desde_lunes, "hasta" : me.hasta_lunes, "dia" : "LUNES" });
              arrDisponibilidad.push({ "desde" : me.desde_martes, "hasta" : me.hasta_martes, "dia" : "MARTES" });
              arrDisponibilidad.push({ "desde" : me.desde_miercoles, "hasta" : me.hasta_miercoles, "dia" : "MIERCOLES" });
              arrDisponibilidad.push({ "desde" : me.desde_jueves, "hasta" : me.hasta_jueves, "dia" : "JUEVES" });
              arrDisponibilidad.push({ "desde" : me.desde_viernes, "hasta" : me.hasta_viernes, "dia" : "VIERNES" });
              arrDisponibilidad.push({ "desde" : me.desde_sabado, "hasta" : me.hasta_sabado, "dia" : "SABADO" });
              arrDisponibilidad.push({ "desde" : me.desde_domingo, "hasta" : me.hasta_domingo, "dia" : "DOMINGO" });

              return JSON.stringify(arrDisponibilidad);

            }
            

        }
    }

</script>
