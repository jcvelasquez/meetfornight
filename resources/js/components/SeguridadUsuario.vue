<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">SEGURIDAD:</h5>
      <p>
        Aqui podrás encontrar <strong class="precio-morado">los usuarios favoritos </strong>, para que puedas ubicarlos mas rápido.
      </p>
    </div>

      <div class="cargar-imagenes seccion_seguridad">
        <template v-if="seguridad == 1">
          <img src="/img/perfil-seguro.png" width="150"/>
          <h3 class="espacio-campos">Su perfil está verificado y seguro</h3>
          <hr/>
        </template>
        
        <span class="haz-click esp-seguridad">Este apartado de seguridad es facultativo y estrictamente confidencial (solo Meet For Night tendrá acceso a ver sus datos) pero si accedes a rellenarlo con los datos que te solicitamos te permitiremos comunicarte con nuestras anfitrionas que hayan solicitado ocultar sus datos de contacto a los usuarios que no hayan rellenado este apartado de seguridad.  Meet For Night quiere ser un portal discreto pero de calidad donde cualquier cliente y/o usuario se sienta seguro, cómodo y protegido.</span>
      </div>

      <div class="bloques-de-perfil">
          <h5 class="formulario-titulos">FOTO DE PERFIL:</h5>
          <p>
            Aqui podrás encontrar <strong class="precio-morado">los usuarios favoritos </strong>, para que puedas ubicarlos mas rápido.
          </p>
        </div>



      <div class="cargar-imagenes" id="dzPerfil" v-show=" filtrarPor(arArchivos, 'PERFIL').length < 1 ">
        <span class="titulo-cargar-imagenes">Cargar foto de perfil</span>
        <span class="haz-click">Máximo 1 archivo</span>
        <button type="button" class="btn btn-primary" id="btn_subir_perfil"><i class="icon-cargar-archivo cargar"></i>SUBIR</button>
      </div>

      <div class="img-cargada" v-for="(archivo, index) in filtrarPor(arArchivos, 'PERFIL')" :key="archivo.id">
          <div class="img-cargada-izq">
            <img :src=" 'fotos_usuarios/' + archivo.url_foto" style="margin-left:15px;" />
            <div class="img-cargada-datos">
              <span class="nom-img"><strong>FOTO DE PERFIL</strong></span>
            </div>
          </div>
          <div class="img-cargada-der">
            <button type="button" class="btn btn-primary x-cargar-img" @click="eliminarFoto(archivo, index)">
              <i class="icon-x"></i>
            </button>
          </div>
      </div>

      <div class="bloques-de-perfil">
          <h5 class="formulario-titulos">DOCUMENTO DE IDENTIDAD:</h5>
          <p>
            Aqui podrás encontrar <strong class="precio-morado">los usuarios favoritos </strong>, para que puedas ubicarlos mas rápido.
          </p>
        </div>


      

      <div class="cargar-imagenes" id="dzIdentidad" v-show=" filtrarPor(arArchivos, 'IDENTIDAD').length < 1 ">
        <span class="titulo-cargar-imagenes">Cargar foto de tu documento de identidad</span>
        <span class="haz-click">Máximo 1 archivo</span>
        <button type="button" class="btn btn-primary" id="btn_subir_identidad"><i class="icon-cargar-archivo cargar"></i>SUBIR</button>
      </div>

      <div class="img-cargada" v-for="(archivo, index) in filtrarPor(arArchivos, 'IDENTIDAD')" :key="archivo.id">
          <div class="img-cargada-izq">
            <img :src=" 'fotos_usuarios/' + archivo.url_foto" style="margin-left:15px;" />
            <div class="img-cargada-datos">
              <span class="nom-img"><strong>DOCUMENTO DE IDENTIDAD</strong></span>
            </div>
          </div>
          <div class="img-cargada-der">
            <button type="button" class="btn btn-primary x-cargar-img" @click="eliminarFoto(archivo, index)">
              <i class="icon-x"></i>
            </button>
          </div>
      </div>

      <div class="cuadro-servicios cargar-imagenes seccion_seguridad" style="margin-top:40px;">
        <span class="haz-click esp-seguridad">
          <strong class="rojo-importante">Tu información proporcionada será estrictamente confidencial y no se mostrará en ninguna parte de la web.</strong>
        </span>
      </div>

<!-- 
      <h5 class="formulario-titulos" style="margin-top:40px;">Ingresa tu número de móvil:</h5>
      <div class="form-row espacio-campos">
        <div class="col-lg-12 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="celular" id="celular" placeholder="Celular *" required>
        </div>
      </div>


      <div class="bloques-de-perfil"  style="margin-top:40px;">
        <div class="form-row">
          <button type="button" @click="actualizarSeguridadUsuario()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
        </div>
      </div>
 -->



  </form>
</template>

<script>
    export default {
        data(){
            return {
                existeError : 0,
                erroresMensaje: [],
                csrf_token : 0,
                arArchivos: [],
                seguridad:0
            }
        },
        mounted() {
            this.listarSeguridad();
            this.initDropZone();
        },
        methods:{
            listarSeguridad(){

                  let me = this;

                  axios.get('/seguridad-usuario/listar').then(function (response) {

                        var respuesta= response.data;
                    
                        me.arArchivos = respuesta.archivos;
                        me.seguridad= respuesta.seguridad;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            filtrarPor(archivos, value) {
              return archivos.filter(archivos => {
                return archivos.tipo_foto.indexOf(value) > -1;
              });
            },
            initDropZone(){

              let me = this;

              let DropPerfil = new Dropzone("#dzPerfil", { url: "/seguridad-usuario/subir", 
                                                          acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                                          clickable: "#dzPerfil button", 
                                                          maxFiles: 1, 
                                                          addRemoveLinks:false,
                                                          headers: {
                                                            'X-CSRF-TOKEN': me.$csrf_token
                                                          },
                                                          params: { "tipo_foto": "PERFIL" },
                                                          error: function(file, response){
                                                              return false;
                                                          },
                                                          success: function (file, done) {

                                                              DropPerfil.removeAllFiles(true); 

                                                              me.listarSeguridad();

                                                          }
                                
                                });

              let DropIdentidad = new Dropzone("#dzIdentidad", { url: "/seguridad-usuario/subir", 
                                                          acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                                          clickable: "#dzIdentidad button", 
                                                          maxFiles: 1, 
                                                          addRemoveLinks:false,
                                                          headers: {
                                                            'X-CSRF-TOKEN': me.$csrf_token
                                                          },
                                                          params: { "tipo_foto": "IDENTIDAD" },
                                                          error: function(file, response){
                                                              return false;
                                                          },
                                                          success: function (file, done) {

                                                            DropIdentidad.removeAllFiles(true); 

                                                              me.listarSeguridad();

                                                          }
                                
                                });


            },
            eliminarFoto(item, index){

              let me = this;

              Swal.fire({
                          title: '¿ESTA SEGURO?',
                          text: 'Si su cuenta ha sido confirmada con el sello de Perfil Seguro, perderá la verificación y deberá realizarla nuevamente',
                          type: 'warning',
                          showCancelButton: true,
                          confirmButtonText: 'ELIMINAR',
                          cancelButtonText: 'CANCELAR'
                        }).then((result) => {
                          
                            if (result.value) {

                                  axios.post('/seguridad-usuario/eliminar', {
                                        'url' : item.url_foto,
                                        'idfoto' : item.id
                                    } ).then(function (response) {

                                        Swal.fire("CONFIRMACIÓN",response.data.mensaje, "success");
                                        //RESET SEGURIDAD
                                        me.listarSeguridad();

                                    }).catch(function (error) {  console.log(error);  });

                            } 
                          
                        })

            

          }
          
         }

    }
</script>