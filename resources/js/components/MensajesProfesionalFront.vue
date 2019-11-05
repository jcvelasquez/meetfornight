<template>
    <div class="espacio-reservas">
        <h2 class="sub-tit"><i class="icon-chat esp-icono-bio"></i>DÉJAME UN MENSAJE</h2>
        <form>
            <div class="form-group">
            <input type="text" class="form-control" name="nombre" v-model="nombre" placeholder="Nombre *" required>
            </div>
            <div class="form-group">
            <input type="cel" class="form-control" name="celular" v-model="celular" placeholder="Celular">
            </div>
            <div class="form-group">
            <input type="email" class="form-control" name="email" v-model="email" placeholder="Email *" required>
            </div>
            <div class="form-group">
            <textarea class="form-control" rows="4" name="mensaje" v-model="mensaje" placeholder="Mensaje"></textarea>
            </div>
            <button type="button" @click="enviarMensaje()" class="btn btn-primary btn-reserva">ENVIAR</button>
        </form>
    </div>
</template>

<script>

    export default {
        props: ['apodoData'],
        mounted() {
            
        },
        data(){
            return {
                nombre: "",
                celular: "",
                email: "",
                mensaje: "",
                existeError : 0,
                erroresMensaje: []
            }
        },
        methods:{
            validarMensaje(){

                let me = this;

                me.existeError = 0;
                me.erroresMensaje = [];


                if(!me.nombre) me.erroresMensaje.push("Ingresa el nombre del mensaje");
                if(!me.celular) me.erroresMensaje.push("Ingresa un celular de contacto");
                if(!me.email) me.erroresMensaje.push("Ingresa un email de contacto");
                if(!me.mensaje) me.erroresMensaje.push("Ingresa tu mensaje");
                                
                if(me.erroresMensaje.length) me.existeError = 1;

                return me.existeError;

            },
            enviarMensaje(){

                  let me = this;

                  if(me.validarMensaje()){
                    Swal.fire('ERROR', me.erroresMensaje.toString(),'error');
                    return;
                  }

                  axios.post('/perfil/mensaje/' + me.apodoData, {
                    'nombre' : me.nombre,
                    'celular' : me.celular,
                    'email' : me.email,
                    'mensaje' : me.mensaje
                  }).then(function (response) {

                      var respuesta = response.data;
                      //me.arDisponibilidad = respuesta.disponibilidad;
                      console.log(respuesta);

                  }).catch(function (error) {  console.log(error);     });
                
            }
            
         }

    }
</script>