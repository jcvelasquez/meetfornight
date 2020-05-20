<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">MENSAJES:</h5>
      <p>
        <strong class="precio-morado">La Reserva</strong> te permite propulsar tu anuncio nuevamente a las primeras posiciones y multiplicar de esta manera la visibilidad de tu anuncio y aumentar el número de contactos.
      </p>
      <p>
        Recuerda que cuando publicas un anuncio este va perdiendo posiciones en función de las nuevas inscripciones y/o de los
        <strong class="precio-morado">BOOSTERS</strong> utilizados por las demás personas de la comunidad Meet For Night.
      </p>
      <p>Si estas interesado sigue estos pasos:</p>
    </div>

    <div class="row">
        <div class="col-lg-12">
        <div class="table-responsive">

            <table class="table">
            <thead class="cabecera-fake">
                <tr>
                <th scope="col">Enviado por</th>
                <th scope="col">Tipo Plan</th>
                <th scope="col">Enviado el</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="resultado-fake">

                <template v-if="arMensajes.length > 0">

                    <template v-for="mensaje in arMensajes">

                        <tr v-bind:key="mensaje.id">
                            <td>{{mensaje.nombre}} </td>
                            <td v-text="mensaje.nombre_plan"></td>
                            <td v-text="mensaje.enviado_el"></td>
                            <td>
                                <button @click="eliminarMensaje(mensaje)" class="btn-responder-mensaje-profesional" type="button"><i class="fa fa-trash-o"></i></button>
                                <button @click="seleccionarMensaje(mensaje)" class="btn-responder-mensaje-profesional" type="button"> <i class="fa fa-search"></i></button>
                            </td>
                        </tr>
                        <tr v-if="mensaje.esActivo" v-bind:key=" 'resp' + mensaje.id">
                            <td colspan="5" style="background:#ededed;">
                                <div class="form-row form-respuesta">
                                    <textarea name="responder" v-model="mensaje.responder" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-row form-respuesta">
                                    <div class="col-lg-6 col-sm-12">
                                        <button type="button" @click="responderMensaje(mensaje)" class="btn btn-primary btn-responder-mensaje">ENVIAR RESPUESTA</button>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <button type="button" @click="cancelarMensaje(mensaje)" class="btn btn-primary btn-rechazar-reserva">CANCELAR</button>
                                    </div>
                                </div>
                                <div class="form-row item-respuesta" v-for="respuesta in mensaje.respuestas" :key="respuesta.id"> 
                                    <div class="col-lg-12 col-sm-12  datos-mensaje">
                                        <h6>{{respuesta.nombre}}</h6>
                                        <span class="fecha">{{respuesta.enviado_el}}</span>
                                        <div class="clear"></div>
                                        <div class="mensaje">
                                            <p>{{respuesta.mensaje}}</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </template>

                </template>

                <template v-else>
                    <tr>
                        <td colspan="4" align="center"> No existen mensajes registrados en tu cuenta</td>
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
                nombre: "",
                celular: "",
                email: "",
                mensaje: "",
                existeError : 0,
                erroresMensaje: [],
                arMensajes: [],
                mensajeSeleccionado: [],
                mensajeRespuestas: [],
                mostrarFormulario : 0,
                isSeleccionado : false,
                responder: ""
            }
        },
        mounted() {
            this.listarMensajes();
        },
        methods:{
            listarMensajes(){

                  let me = this;

                  axios.get('/mensajes-usuario/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arMensajes = respuesta.mensajes;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            responderMensaje(mensaje){

                  let me = this;

                  if(me.validarMensaje(mensaje)){
                    Swal.fire('ERROR', me.erroresMensaje.toString(),'error');
                    return;
                  }


                     Swal.fire({
                        title: 'CONFIRMAR ACCIÓN',
                        text: 'Estas a punto de responder un mensaje al usuario, se le notificará via email.',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, Enviar',
                        cancelButtonText: 'No, Cancelar'
                    }).then((result) => {
                    
                      if (result.value) {

                            axios.post('/mensajes-profesional/responder', {
                                'parent_id' : mensaje.id,
                                'idprofesional' : mensaje.idprofesional,
                                'idusuario' : mensaje.idprofesional,
                                'mensaje' : mensaje.responder
                            }).then(function (response) {

                                var respuesta = response.data;

                                Swal.fire('CONFIRMACIÓN', respuesta.mensaje,'success');

                                me.listarMensajes();

                                //me.cancelarMensaje(mensaje);

                            }).catch(function (error) {  console.log(error);     });

                      } 
                    
                  });

                  
                
            },
            eliminarMensaje(mensaje){

                  let me = this;

                     Swal.fire({
                        title: 'CONFIRMAR ACCIÓN',
                        text: 'Estas a punto de eliminar un mensaje, esta acción no de puede deshacer.',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, Eliminar',
                        cancelButtonText: 'No, Cancelar'
                    }).then((result) => {
                    
                      if (result.value) {

                            axios.post('/mensajes-profesional/eliminar', {
                                'id' : mensaje.id
                            }).then(function (response) {

                                var respuesta = response.data;

                                Swal.fire('CONFIRMACIÓN', respuesta.mensaje,'success');

                                me.listarMensajes();

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