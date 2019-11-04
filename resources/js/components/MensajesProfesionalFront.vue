<template>
    <div class="espacio-reservas">
        <h2 class="sub-tit"><i class="icon-chat esp-icono-bio"></i>DÉJAME UN MENSAJE</h2>
        <form>
            <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre *" required>
            </div>
            <div class="form-group">
            <input type="cel" class="form-control" id="exampleInputPassword1" name="celular" placeholder="Celular">
            </div>
            <div class="form-group">
            <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email *" required>
            </div>
            <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mensaje" placeholder="Mensaje"></textarea>
            </div>
            <button type="button" class="btn btn-primary btn-reserva">ENVIAR</button>
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
                mensaje: ""
            }
        },
        methods:{
            enviarMensaje(){

                  let me = this;

                  axios.get('/perfil/disponibilidad/' + me.apodoData ).then(function (response) {

                      var respuesta= response.data;
                      me.arDisponibilidad = respuesta.disponibilidad;

                  }).catch(function (error) {  console.log(error);     });
                
            }
            
         }

    }
</script>