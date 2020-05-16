<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">SEGURIDAD:</h5>
      <p>
        Aqui podrás encontrar <strong class="precio-morado">los usuarios favoritos </strong>, para que puedas ubicarlos mas rápido.
      </p>
    </div>




      <div class="cargar-imagenes seccion_seguridad">
        <span class="haz-click esp-seguridad">Este apartado de seguridad es facultativo y estrictamente confidencial (solo Meet For Night tendrá acceso a ver sus datos) pero si accedes a rellenarlo con los datos que te solicitamos te permitiremos comunicarte con nuestras anfitrionas que hayan solicitado ocultar sus datos de contacto a los usuarios que no hayan rellenado este apartado de seguridad.  Meet For Night quiere ser un portal discreto pero de calidad donde cualquier cliente y/o usuario se sienta seguro, cómodo y protegido.</span>
      </div>


      <div class="cargar-imagenes" id="dropzone_perfil">
        <span class="titulo-cargar-imagenes">Cargar foto de perfil</span>
        <span class="haz-click">Máximo 1 archivo</span>
        <button type="button" class="btn btn-primary" id="btn_subir_perfil"><i class="icon-cargar-archivo cargar"></i>SUBIR</button>
      </div>

      <div class="cuadro-servicios cargar-imagenes seccion_seguridad">
        <span class="haz-click esp-seguridad">
          <strong class="rojo-importante">Tu información proporcionada será estrictamente confidencial y no se mostrará en ninguna parte de la web.</strong>
        </span>
      </div>

      <div class="cargar-imagenes" id="dropzone_identidad">
        <span class="titulo-cargar-imagenes">Cargar foto de tu documento de identidad</span>
        <span class="haz-click">Máximo 1 archivo</span>
        <button type="button" class="btn btn-primary" id="btn_subir_identidad"><i class="icon-cargar-archivo cargar"></i>SUBIR</button>
      </div>


      <h5 class="formulario-titulos">Ingresa tu número de móvil:</h5>
      <div class="form-row espacio-campos">
        <div class="col-lg-12 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="celular" id="celular" placeholder="Celular *" required>
        </div>
      </div>


      <div class="bloques-de-perfil">
        <div class="form-row">
          <button type="button" @click="actualizarSeguridadUsuario()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
        </div>
      </div>





  </form>
</template>

<script>
    export default {
        data(){
            return {
                existeError : 0,
                erroresMensaje: [],
                arFavoritos: [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 32,
                path: '',
                page: 1
            }
        },
        mounted() {
            this.listarFavoritos();
        },
        methods:{
            listarFavoritos(){

                  let me = this;

                  axios.get('favoritos-usuario/listar').then(function (response) {

                        var respuesta= response.data;
                    
                        me.arFavoritos = respuesta.arUsuarios;
                        me.pagination= respuesta.pagination;
                        me.path= respuesta.path;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            cambiarPagina(pagina){

                let me = this;
                
                //Actualiza la página actual
                me.pagination.current_page = pagina;
                me.page = pagina;

                //Envia la petición para visualizar la data de esa página
                //me.buscarProfesionales();

            }

         },
         computed:{

            isActived: function(){
                return this.pagination.current_page;
            },
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        }

    }
</script>