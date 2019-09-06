<template>

 <div class="container">

      <div class="row">

              <div class="col-lg-3 col-md-6 col-sm-12" v-for="profesional in arUsuarios" :key="profesional.id">
                <div class="item-chica">
                    <div class="texto-chica">
                        <h3 v-text="profesional.nombre"></h3>
                        <h4 v-text="profesional.ubicacion_edad"></h4>
                        <h5 v-text="profesional.precio"></h5>
                        <span>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        </span>
                        <a target="_blank" href="no-reserva-free.php">VER PERFIL</a>
                        <div class="triangulo">
                        <i class="icon-heart"></i>
                        </div>
                    </div>
                    <img src="img/chicas/chica1.jpg" class="img-responsive" />
                </div>
            </div>

      </div>

      <nav>
          <ul class="pagination">
              <li class="page-item" v-if="pagination.current_page > 1">
                  <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1)">Ant</a>
              </li>
              <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                  <a class="page-link" href="#" @click.prevent="cambiarPagina(page)" v-text="page"></a>
              </li>
              <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                  <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1)">Sig</a>
              </li>
          </ul>
      </nav>

    </div>


</template>

<script>
export default {
  data() {
    return {
            categoria_id: 0,
            nombre : '',
            descripcion : '',
            arUsuarios : [],
            modal : 0,
            tituloModal : '',
            tipoAccion : 0,
            errorPerfilProfesional : 0,
            errorMostrarMsjPerfilProfesional : [],
            pagination : {
                'total' : 0,
                'current_page' : 0,
                'per_page' : 0,
                'last_page' : 0,
                'from' : 0,
                'to' : 0,
            },
            offset : 32,
            criterio : 'nombre',
            buscar : ''
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
        },
        methods : {
            listarProfesionales (page){
                let me=this;
                var url= '/usuarios?page=' + page + '&idrol=4'  ;

                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arUsuarios = respuesta.arUsuarios.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            cambiarPagina(page){
                let me = this;
                //Actualiza la página actual
                me.pagination.current_page = page;
                //Envia la petición para visualizar la data de esa página
                me.listarProfesionales(page);
            }
     
        },
        mounted() {
            this.listarProfesionales();
        }


};
</script>