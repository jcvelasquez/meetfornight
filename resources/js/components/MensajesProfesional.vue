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

    <div class="bloques-de-perfil">
        <div class="form-row item-mensaje" v-for="(mensaje, index) in arMensajes" :key="mensaje.id">
            <div class="col-lg-1 col-sm-12">
                <img src="fotos-profesionales/oswaldo_salaverry.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-lg-11 col-sm-12 datos-mensaje">
                <small>Usuario Cuenta Free</small>
                <button @click="eliminarTarifa(mensaje, index)" class="btn-eliminar" type="button"><i class="fa fa-trash-o"></i></button>
                <hr class="linea">
                <h6>{{mensaje.usuario.nombre}}</h6>
                <span class="fecha">{{mensaje.created_at}}</span>
                <div class="clear"></div>
                <div class="mensaje">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod blandit vestibulum. Donec aliquet, ipsum quis consequat faucibus, lectus orci posuere ex, a vestibulum risus dolor ac odio. Praesent commodo dolor nec interdum euismod. Donec fermentum quam eget nunc laoreet ultrices. Duis pellentesque pretium ligula vitae vehicula.</p>
                </div>
                <button @click="seleccionarMensaje(mensaje)" type="button">Responder mensaje</button>
                <div class="clear"></div>
                <!-- AQUI EMPIEZAN LAS RESPUESTAS -->

                <div class="form-row form-respuesta" v-show="mostrarFormulario">
                    <textarea name="respuesta" class="form-control" rows="4"></textarea>
                    <button type="button" class="btn btn-primary btn-responder-mensaje">ENVIAR RESPUESTA</button>
                </div>

                <div class="form-row item-respuesta" v-for="respuesta in mensajeRespuestas" :key="respuesta.id"> 
                    <div class="col-lg-1 col-sm-12">
                        <img src="fotos-profesionales/oswaldo_salaverry.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-lg-11 col-sm-12  datos-mensaje">
                        <h6>{{mensaje.usuario.nombre}}</h6>
                        <span class="fecha">{{mensaje.created_at}}</span>
                        <div class="clear"></div>
                        <div class="mensaje">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod blandit vestibulum. Donec aliquet, ipsum quis consequat faucibus, lectus orci posuere ex, a vestibulum risus dolor ac odio. Praesent commodo dolor nec interdum euismod. Donec fermentum quam eget nunc laoreet ultrices. Duis pellentesque pretium ligula vitae vehicula.</p>
                        </div>
                    </div>
                </div>

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
                usuarioMensaje: [],
                mensajeSeleccionado: [],
                mensajeRespuestas: [],
                mostrarFormulario : 0
            }
        },
        mounted() {
            this.listarMensajes();
        },
        methods:{
            listarMensajes(){

                  let me = this;

                  axios.get('/mensajes-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arMensajes = respuesta.mensajes;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            responderMensaje(){

                  let me = this;

                  if(me.validarMensaje()){
                    Swal.fire('ERROR', me.erroresMensaje.toString(),'error');
                    return;
                  }

                  axios.post('/mensajes/enviar/', {
                    'nombre' : me.nombre,
                    'celular' : me.celular,
                    'email' : me.email,
                    'mensaje' : me.mensaje
                  }).then(function (response) {

                      var respuesta = response.data;
                      console.log(respuesta);

                  }).catch(function (error) {  console.log(error);     });
                
            },
            seleccionarMensaje(mensaje){

                let me = this;

                me.mensajeSeleccionado = mensaje;
                me.usuarioMensaje = mensaje.usuario;
                /*me.serviciosReserva = JSON.parse(reserva.servicios);
                me.mostrarReserva = 1;*/

            },
            limpiarMensaje(){

                let me = this;

                me.mostrarReserva = 0;
                me.reservaSeleccionada = [];
                me.usuarioReserva = [];
                me.serviciosReserva = [];

            }

         }

    }
</script>