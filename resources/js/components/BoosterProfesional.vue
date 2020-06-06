<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">BOOSTER:</h5>
      <p>
        <strong class="precio-morado">EL BOOSTER</strong> te permite propulsar tu anuncio nuevamente a las primeras posiciones y multiplicar de esta manera la visibilidad de tu anuncio y aumentar el número de contactos.
      </p>
      <p>
        Recuerda que cuando publicas un anuncio este va perdiendo posiciones en función de las nuevas inscripciones y/o de los
        <strong class="precio-morado">BOOSTERS</strong> utilizados por las demás personas de la comunidad Meet For Night.
      </p>
      <p>
        El servicio
        <strong class="precio-morado">BOOSTER</strong> sube automáticamente tu anuncio a las primeras posiciones cada 1,2,3,6,24 o 48 horas de forma automática pero también lo podrías hacer manualmente si así lo deseas y elegir los días y la horas que mejor consideres.
      </p>
      <p>
        Los anuncios que aparecen marcados con este símbolo
        <i class="icon-podium fucsia"></i> se mantienen por encima del resto de los anuncios durante algún tiempo (en función de la saturación de la categoría).
      </p>
      <p>
        Por tanto, podrás utilizar los
        <strong class="precio-morado">BOOSTERS</strong> cada vez que lo desees para darle un impulso a tu anuncio.
      </p>

      <p>Si estas interesado sigue estos pasos:</p>
    </div>

    <div class="bloques-de-perfil">
      <div class="row">

        <div class="col-lg-12 col-sm-12 form-row espacio-campos">
          <h6 class="total-actual formulario-titulos">
            Dispones actualmente de
            <span>"{{creditos}}"</span> crédito(s) y te permite hacer
            <span>"{{boosters}}"</span> booster(s)
          </h6>
        </div>

      </div>

      <div class="form-row">
          <div class="col-lg-12 col-sm-12 form-row-no espacio-campos borde-abajo">
              <p-input type="radio" name="frecuencia" color="info" value="DESACTIVADO" @change="actualizarConfiguracion()" v-model="frecuencia">Desactivado</p-input>
          </div>
      </div>  
      <div class="form-row">
          <div class="col-lg-12 col-sm-12 espacio-campos borde-abajo">            
                <p-input type="radio" name="frecuencia" color="info" value="AUTOMATICO" @change="actualizarConfiguracion()" v-model="frecuencia"><strong>Frecuencia Automática</strong>
                </p-input>

               
                <div class="form-row interior-frecuencia" v-show="frecuencia == 'AUTOMATICO'">
                  <select type="text" class="form-control auto-width" v-model="intervalo" @change="actualizarConfiguracion()">
                    <option value="15m">Cada 15 min</option>
                    <option value="30m">Cada 30 min</option>
                    <option value="1h">Cada hora</option>
                    <option value="2h">Cada 2 horas</option>
                    <option value="3h">Cada 3 horas</option>
                    <option value="4h">Cada 4 horas</option>
                    <option value="6h">Cada 6 horas</option>
                    <option value="1d">Cada día</option>
                    <option value="2d">Cada 2 días</option>
                  </select>
                </div>
                <div class="form-row interior-frecuencia" v-show="frecuencia == 'AUTOMATICO'">
                    <span class="aparecer">Desactivar Booster por la noche (De 00:00 a 9:00am)</span>
                </div>
                <div class="form-row interior-frecuencia" v-show="frecuencia == 'AUTOMATICO'">
                    <p-input type="radio" name="desactivar" color="info" :value="1" @change="actualizarConfiguracion()" v-model="desactivarNoche">Si</p-input>
                    <p-input type="radio" name="desactivar" color="info" :value="0" @change="actualizarConfiguracion()" v-model="desactivarNoche">No</p-input> 
                </div>

          </div>
      </div>

      <div class="form-row">

        <div class="col-lg-12 col-sm-12 espacio-campos">

                <p-input type="radio" name="frecuencia" color="info" value="MANUAL" @change="actualizarConfiguracion()" v-model="frecuencia"><strong>Frecuencia Manual</strong>
                </p-input>

                <div class="form-row" v-show="frecuencia == 'MANUAL'">

                      <div class="horizontal interior-frecuencia col-lg-12 col-sm-12 form-row" v-for="(frecuencia, index) in arFrecuencia" :key="frecuencia.id">
                        <label class="col-form-label formulario-titulos tamano-pequeno esp-radio">Fecha</label>
                        <div class="esp-radio">
                          {{frecuencia.fecha}}
                        </div>
                        <label class="col-form-label formulario-titulos tamano-pequeno esp-radio">Hora</label>
                        <div class="esp-radio">
                          {{frecuencia.hora}}
                        </div>
                        <label class="col-form-label formulario-titulos tamano-pequeno esp-radio">Categoria</label>
                        <div class="esp-radio">
                          {{frecuencia.nombre_categoria}}
                        </div>
                        <div class="">
                          <button type="button" @click="eliminarFrecuencia(frecuencia, index)" class="btn btn-primary x-circulo">
                            <i class="fa fa-times" aria-hidden="true"></i>
                          </button>
                        </div>
                      </div>

                      <div class="horizontal" style="margin-top:20px;">
                        <label class="col-form-label formulario-titulos tamano-pequeno esp-radio">Fecha</label>
                        <div class="espacio-campos esp-radio">
                          <input type="date" name="fechabooster" v-model="fechabooster"  class="form-control icono-calendario" />
                        </div>

                        <label class="col-form-label formulario-titulos tamano-pequeno esp-radio">Hora</label>
                        <div class="espacio-campos esp-radio">
                          <input type="time" name="horabooster" v-model="horabooster" class="form-control" value="00:00" />
                        </div>

                        <label class="col-form-label formulario-titulos tamano-pequeno esp-radio">Categoria</label>
                        <div class="espacio-campos esp-radio">
                          <select name="idcategoria" v-model="idcategoria" class="form-control">
                              <option v-for="cat in arCategorias" v-bind:value="cat.idcategoria" v-bind:key="cat.idcategoria">{{ cat.nombre_categoria }}</option>
                            </select>
                        </div>
                      
                        <div class="espacio-campos">
                          <button type="button" class="btn btn-primary" @click="agregarFrecuencia()">
                            <i class="fa fa-plus" aria-hidden="true"></i> AGREGAR
                          </button>
                        </div>
                      </div>

                </div>

        </div>

      </div>
    </div>

<!--     <div class="bloques-de-perfil">
      <a href="/creditos-profesional/" class="btn btn-primary btn-espacio-fuc btn-tarjeta-credito">
        <i class="icon-credit-cards esp-icono-bio"></i>
        <span>COMPRAR CRÉDITOS</span>
      </a>
    </div> -->

    <p>El uso de este servicio incrementa las posibilidades de éxito de tu anuncio pero no lo garantiza. Si quiere tener éxito la oferta debe ser competitiva.  Para evitar gastar tus créditos en horas en las que no hay tantos usuarios conectados a la página, te aconsejamos no usar tus boosters entre las 00:00 y las 09:00 am.</p><p> Si los anuncios son eliminados el servicio de booster se detiene automáticamente. También puede ser detenido manualmente. Y los créditos en la cuenta no utilizados se reembolsarían.</p>

    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table">
            <thead class="cabecera-fake">
              <tr>
                <th scope="col" colspan="4" style="text-align:center;text-transform:uppercase; background:#5b376f;">Histórico de los booster</th>
              </tr>
              <tr>
                <th scope="col">Evento</th>
                <th scope="col"># Cantidad</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
              </tr>
            </thead>
            <tbody class="resultado-fake">

              <template v-if="arCobrados.length > 0">

                  <tr v-for="cobrado in arCobrados" :key="cobrado.id">
                    <td>Booster cobrado</td>
                    <td>{{cobrado.cantidad_boosters}} booster(s)</td>
                    <td>{{cobrado.fecha}}</td>
                    <td>{{cobrado.hora}}</td>
                  </tr>

              </template>

              <template v-else>

                  <tr>
                    <td colspan="4" style="text-align:center;">No existen uso de boosters registrados aún.</td>
                  </tr>

              </template>

              
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
</template>

<script>
    export default {
        data(){
            return {
                frecuencia : "",
                existeError : 0,
                frecuencia: "",
                intervalo: "",
                fechabooster: "",
                horabooster: "",
                idcategoria: 0,
                creditos:0,
                boosters:0,
                desactivarNoche : 0,
                erroresBooster: [],
                arFrecuencia: [],
                arConfiguracion: [],
                arCategorias: [],
                arCobrados: []
            }
        },
        mounted() {
            this.listarFrecuenciaBoosters();
            this.listarConfiguracionBoosters();
            this.listarCategoriasProfesional();
            this.listarBoostersCobrados();
        },
        methods:{
            listarCategoriasProfesional(){

                let me = this;

                axios.get('categorias-profesional/listar').then(function (response) {

                    var respuesta = response.data;

                    me.arCategorias = respuesta.categorias;

                }).catch(function (error) {  console.log(error);     });
                

            },
            listarBoostersCobrados(){

                let me = this;

                axios.get('booster-cobrado/listar').then(function (response) {

                    var respuesta = response.data;

                    me.arCobrados = respuesta.cobrados;

                }).catch(function (error) {  console.log(error);     });
                

            },
            listarConfiguracionBoosters(){

                  let me = this;

                  axios.get('booster-profesional/listar').then(function (response) {

                      var respuesta = response.data;
                      me.arConfiguracion = respuesta.configuracion;

                      me.frecuencia = me.arConfiguracion.frecuencia;
                      me.intervalo = me.arConfiguracion.intervalo;
                      me.desactivarNoche = me.arConfiguracion.desactivarNoche;


                      me.creditos = respuesta.creditos;
                      me.boosters = respuesta.boosters;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            actualizarConfiguracion(){

                let me = this;

                axios.post('booster-profesional/actualizar', {
                    'id' : me.arConfiguracion.id,
                    'frecuencia' : me.frecuencia,
                    'intervalo' : me.intervalo,
                    'desactivarNoche' : me.desactivarNoche
                }).then(function (response) {

                    var respuesta = response.data;

                    Swal.fire('CONFIRMACIÓN', respuesta.mensaje,'success');

                }).catch(function (error) {  console.log(error);     });
                

            },
            agregarFrecuencia(){

                  let me = this;

                  axios.post('frecuencia-booster/agregar', {
                      'fecha' : me.fechabooster,
                      'hora' : me.horabooster,
                      'idcategoria' : me.idcategoria
                  }).then(function(response){

                      var respuesta = response.data;
                      
                      me.listarFrecuenciaBoosters();
                      me.limpiarFrecuencia();

                      Swal.fire('CONFIRMACIÓN', respuesta.mensaje,'success');

                  }).catch(function(error){ console.log(error); });

            },
            limpiarFrecuencia(){

                let me = this;

                me.fechabooster = "";
                me.horabooster = "";
                me.idcategoria = 0;

            },
            listarFrecuenciaBoosters(){

                  let me = this;

                  axios.get('frecuencia-booster/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arFrecuencia = respuesta.frecuencia;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            eliminarFrecuencia(frecuencia, index){

                  let me = this;

                     Swal.fire({
                        title: 'CONFIRMAR ACCIÓN',
                        text: 'Estas a punto de eliminar un registro, esta acción no de puede deshacer.',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, Eliminar',
                        cancelButtonText: 'No, Cancelar'
                    }).then((result) => {
                    
                      if (result.value) {

                            axios.post('frecuencia-booster/eliminar', {
                                'id' : frecuencia.id
                            }).then(function (response) {

                                var respuesta = response.data;

                                Swal.fire('CONFIRMACIÓN', respuesta.mensaje,'success');

                                 me.$delete(me.arFrecuencia, index);

                            }).catch(function (error) {  console.log(error);     });

                      } 
                    
                  });     
                
            },
            seleccionarMensaje(mensaje){

                let me = this;

                mensaje.esActivo = true;

            },
            cancelarMensaje(mensaje){

                let me = this;

                mensaje.responder = "";
                //mensaje.esActivo = !mensaje.esActivo;
                mensaje.esActivo = false;

            },
            validarMensaje(mensaje){

                let me = this;

                me.existeError = 0;
                me.erroresMensaje = [];
 
                 if(!mensaje.responder) me.erroresMensaje.push("Debes ingresar una respuesta válida.");

                if(me.erroresMensaje.length) me.existeError = 1;

                return me.existeError;

            
            }

         }

    }
</script>