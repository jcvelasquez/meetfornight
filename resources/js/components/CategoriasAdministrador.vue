<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card item-usuario">
                <div class="card-header">CATEGORIAS</div>
                <div class="card-body">
                    <ul>
                        <li class="repeater-usuario" v-for="categoria in arCategorias" :key="categoria.id">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="datos">
                                        <h5>{{categoria.nombre_categoria}}</h5>
                                    </div>
                                    <div class="adicionales">
                                        <button>Editar</button>
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
        mounted() {

            this.listarCategorias();

        },
        data(){
            return {
                errorAlerta : 0,
                erroresAlerta: [],
                arCategorias : [],
                idusuario : 0,
                nombre : '',
                apellido : '',
                idalerta : '',
                celular : '',
                email : '',
                razon : '',
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
        methods:{
           
            listarCategorias(){

                  let me = this;

                  axios.get('categorias/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arCategorias = respuesta.categorias;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            limpiarCampos(){

                let me = this;

                me.nombre = '';
                me.apellido = '';
                me.idalerta = '';
                me.celular = '';
                me.email = '';
                me.razon = '';

            },
            registrarCategoria(){


                  let me = this;

                  if(me.validarAlertas()){
                    Swal.fire('ERROR', me.erroresAlerta.toString(),'error');
                    return;
                  }

                  axios.post('alerta-profesional/registrar', {
                    'idusuario' : me.$idprofesional,
                    'nombre' : me.nombre,
                    'apellido' : me.apellido,
                    'idalerta' : me.idalerta,
                    'celular' : me.celular,
                    'email' : me.email,
                    'razon' : me.razon
                  })
                  .then(function (response) {

                    var _alerta = response.data.alerta;

                    console.log(_alerta);

                      me.limpiarCampos();
                      me.arAlertas.push(_alerta);

                      Swal.fire('CONFIRMACION', 'Alerta agregada correctamente','success');

                  })
                  .catch(function (error) {
                      // handle error
                      console.log(error);
                  });

            }


         }

    }
</script>

<style>
  .div-error {
    display:flex;
    justify-content:center;
  }
  .text-error{
    color:red;
    font-weight:bold;
  }
</style>

