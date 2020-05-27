<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">VALORACIÓN:</h5>
      <p>La valoración te permite saber la calidad del servicio que estás dando a tus clientes y la opinión que tienen sobre tu perfil (fotos de tu anuncio). Además, estás valoraciones serán visibles para todos los clientes, tu éxito también dependerá de la valoración que hagan de ti y del trato que les das.</p>

      <p>
        <span class="rojo">
          <strong>IMPORTANTE:</strong>
        </span> Para que ellos te puedan valorar tendrás que enviar tú mismo el formulario de valoración a tus clientes directamente a su correo a través del botón
        <strong class="precio-morado">"ENVIAR MAIL"</strong> o a su "WhatsApp" copiando y pegando la URL que te hemos atribuido con el botón
        <strong class="precio-morado">"COPIAR LINK"</strong>.
      </p>
    </div>

    <div class="bloques-de-perfil">
      <div class="bloque-estadistica">
        <div class="estadistica-datos">
          <i class="icon-star tam-icon-grande"></i>
          <div class="info-estadistica">
            <span class="inf-estadistica-num">{{reservas_registradas}}</span>
            <span class="inf-estadistica">RESERVA(S)<br />REALIZADA(S)</span>
          </div>
          <div class="info-estadistica">
            <span class="inf-estadistica-num">{{valoraciones_registradas}}</span>
            <span class="inf-estadistica">SERVICIO(S)<br />VALORADO(S)</span>
          </div>
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">

      

        <div class="col-lg-12 casilla-valoracion" v-for="valoracion in arValoraciones" :key="valoracion.nombre_criterio">
          <span v-text="valoracion.nombre_criterio"></span>
          <div class="puntaje-estrella">
            <span v-html="calcularEstrellas(valoracion.puntuacion_int)"></span>
            <span>{{valoracion.puntuacion}} Ptos.</span>
          </div>
        </div>

      

    </div>
<!-- 
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">ENVIAR FORMULARIO DE VALORACIÓN:</h5>
      <p>Elige al cliente que deseas que te evalue.</p>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 espacio-campos">
          <input type="email" class="form-control" name="email" placeholder="Email" />
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <button type="submit" class="btn btn-primary btn-busqueda-detallada">Enviar mail</button>
        </div>
      </div>
      <div class="linea-valor"></div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 espacio-campos">
          <input
            type="text"
            class="form-control bg-in"
            name="url"
            placeholder="Link"
            value="https://www.meetfornight.com/35345647"
          />
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <button type="submit" class="btn btn-primary btn-rojo">Copiar Link</button>
        </div>
      </div>
    </div>
     -->
  </form>
</template>


<script>
    export default {
        mounted() {

            this.listarValoraciones();

        },
        data(){
            return {
                errorPerfil : 0,
                erroresPerfil: [],
                arValoraciones : [],
                reservas_registradas : 0,
                valoraciones_registradas : 0
            }
        },
         methods:{
           
            listarValoraciones(){

                  let me = this;

                  axios.get('valoracion-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arValoraciones = respuesta.valoraciones;
                      me.valoraciones_registradas = respuesta.valoraciones_registradas;
                      me.reservas_registradas = respuesta.reservas_registradas;
                      

                  }).catch(function (error) {  console.log(error);     });
                
            },
            calcularEstrellas(total) {

                  let estrellas = "";
                  var restantes = 0;

                  for(var i=0; i< total; i++){ estrellas += '<i class="icon-star precio-morado"></i>'; }
                  for(var a=0; a < 5 - total; a++){ estrellas += '<i class="icon-star precio-plomo"></i>'; }
                  
                  return estrellas;

            }

         }

    }
</script>
