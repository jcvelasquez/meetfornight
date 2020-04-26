<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card item-usuario">
                <div class="card-header">USUARIOS</div>
                <div class="card-body">
                    <ul>
                        <li class="repeater-usuario" v-for="usuario in arUsuarios" :key="usuario.id">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="http://meetfornight.test:4516/fotos-profesionales/chica1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="col-md-9">
                                    <small>Perfil Pro Free</small>
                                    <button><i class="fa fa-times"></i></button>
                                    <button><i class="fa fa-times"></i></button>
                                    <button><i class="fa fa-times"></i></button>
                                    <button><i class="fa fa-times"></i></button>
                                    <button><i class="fa fa-times"></i></button>
                                    <hr>
                                    <div class="datos">
                                        <h5>{{usuario.nombre}}</h5>
                                        <small class="categorias">{{obtenerCategorias(usuario.categorias)}}</small>
                                        <div class="valoracion">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="adicionales">
                                        <div class="registro"><i class="fa fa-calendar"></i> 24/10/2019</div>
                                        <h5>$29.00</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <nav>
                        <ul class="pagination ir-izquierda paginador-meet">
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
        
            
        
        </div>

        

    </div>
</template>

<script>


    export default {
        data() {
            return {
                arUsuarios : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 20,
                path: '',
                page: 1
            }
            
        },
        mounted() {

            this.listarProfesionales();

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

            obtenerCategorias(categorias){

                let todas = "";
                categorias.forEach(function(item) { todas += item.nombre_categoria + ", "; });
                
                return todas;

            },
            cambiarPagina(pagina){

                let me = this;
                
                //Actualiza la página actual
                me.pagination.current_page = pagina;
                me.page = pagina;

                //Envia la petición para visualizar la data de esa página
                me.listarProfesionales();

            },
            listarProfesionales(){

                let me = this;

                axios.post('usuarios/listar', {
                    'page' : me.page
                })
                .then(function (response) { 

                    var respuesta = response.data;
                    
                    me.arUsuarios = respuesta.arUsuarios;
                    me.pagination= respuesta.pagination;
                    me.path= respuesta.path;

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });

            }
    
        }


    };
</script>