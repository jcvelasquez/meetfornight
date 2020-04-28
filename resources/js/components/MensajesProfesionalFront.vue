<template>
    <div class="espacio-reservas">
        <h2 class="sub-tit"><i class="icon-chat esp-icono-bio"></i>DÉJAME UN MENSAJE</h2>
            <div class="form-group">
                <input type="text" readonly class="form-control" name="nombre" v-model="nombre" placeholder="Nombre *" required>
            </div> 
            <div class="form-group">
                <textarea class="form-control" rows="4" name="mensaje" v-model="mensaje" placeholder="Mensaje"></textarea>
            </div>
            <button type="button" @click="enviarMensaje()" class="btn btn-primary btn-reserva">ENVIAR</button>
    </div>
</template>

<script>

    export default {
        props: ['apodoData'],
        mounted() {
            this.usuarioLogueado();
        },
        data(){
            return {
                nombre: "",
                mensaje: "",
                existeError : 0,
                erroresMensaje: []
            }
        },
        methods:{
            usuarioLogueado(){

                let me = this;

                axios.get('usuario/sesion')
                .then(function (response) { 

                    me.nombre = response.data.nombre;

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });

            },
            validarMensaje(){

                let me = this;

                me.existeError = 0;
                me.erroresMensaje = [];

                if(!me.mensaje) me.erroresMensaje.push("Ingresa tu mensaje</br>");
                                
                if(me.erroresMensaje.length) me.existeError = 1;

                return me.existeError;

            },
            limpiarCampos(){

                me.nombre = "";
                me.mensaje = "";

            },
            enviarMensaje(){

                  let me = this;

                  if(me.validarMensaje()){
                    Swal.fire({icon: 'error', title:'Completa...', html:me.erroresMensaje.join(' ')});
                    return;
                  }

                  axios.post('../perfil/mensaje/' + me.apodoData, {
                    'mensaje' : me.mensaje,
                    'apodo' : me.apodoData
                  }).then(function (response) {

                      var respuesta = response.data;

                      Swal.fire('CONFIRMACION','El mensaje ha sido enviado correctamente','success');

                      me.mensaje = '';

                  }).catch(function (error) {  console.log(error);     });
                
            }
            
         }

    }
</script>