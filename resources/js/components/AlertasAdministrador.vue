<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card item-usuario">
                <div class="card-header">ALERTAS</div>
                <div class="card-body">
                    <ul>
                        <li class="repeater-usuario" v-for="alerta in arAlertas" :key="alerta.id">
                            <div class="row">
                                <div class="col-md-12">
                                    <small>Enviado por: </small> {{alerta.nombre_usuario}}
                                    <button>Leer más</button>
                                    <hr>
                                    <div class="datos">
                                        <p>{{alerta.razon}}</p>
                                        <small class="categorias"><i class="fa fa-calendar"></i> 24/10/2019</small>
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

            this.listarAlertas();

        },
        data(){
            return {
                errorAlerta : 0,
                erroresAlerta: [],
                arAlertas : [],
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
        methods:{
           
            listarAlertas(){

                  let me = this;

                  axios.post('alertas/listar', {
                        'page' : me.page
                  }).then(function (response) {

                      var respuesta= response.data;
                      me.arAlertas = respuesta.alertas;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            cambiarPagina(pagina){

                let me = this;
                
                //Actualiza la página actual
                me.pagination.current_page = pagina;
                me.page = pagina;

                //Envia la petición para visualizar la data de esa página
                me.listarProfesionales();

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
            validarAlertas(){

                let me = this;

                me.errorAlerta = 0;
                me.erroresAlerta = [];

                if(!me.nombre) me.erroresAlerta.push("Selecciona el nombre");
                if(!me.apellido) me.erroresAlerta.push("Ingresa el apellidos");
                if(!me.idalerta) me.erroresAlerta.push("Ingresa el ID");
                if(!me.celular) me.erroresAlerta.push("Ingresa el celular");
                if(!me.email) me.erroresAlerta.push("Ingresa el email");
                if(!me.razon) me.erroresAlerta.push("Ingresa la razon"); 
                
                if(me.erroresAlerta.length) me.errorAlerta = 1;

                return me.errorAlerta;

            },
            registrarAlerta(){


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

