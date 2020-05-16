<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">FAVORITOS:</h5>
      <p>
        Aqui podrás encontrar <strong class="precio-morado">los usuarios favoritos </strong>, para que puedas ubicarlos mas rápido.
      </p>
     
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6" v-for="profesional in arFavoritos" :key="profesional.id">
                    <div class="item-chica">
                        <div class="triangulo">
                            <a href="#" @click.prevent="agregarFavoritos(profesional)" ><i class="icon-heart"></i></a>
                        </div>
                        <div class="texto-chica">
                             <h3 v-text="profesional.apodo"></h3>
                            <h4 v-text="profesional.ubicacion_edad"></h4>
                            <h5 v-text="profesional.precio"></h5> 
                            <span>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            </span>
                            <a :href="'perfil/' + profesional.apodo" target="_blank">VER PERFIL</a>
                            
                        </div>
                        <img :src="'fotos_profesionales/' + profesional.url_foto" class="img-responsive" />
                    </div>
                </div>
            </div>
            
            <nav>
                <ul class="pagination ir-derecha paginador-meet">
                    <li class="page-item" v-if="pagination.current_page > 1">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1)">Anterior</a>
                    </li>
                    <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(page)" v-text="page"></a>
                    </li>
                    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1)">Siguiente</a>
                    </li>
                </ul>
            </nav>


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