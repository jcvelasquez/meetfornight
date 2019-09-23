<template>

<form action="#" method="post">
          
        <div class="row">
          <div class="col-lg-6 col-sm-12 espacio-campos">
            <div class="cuadro-servicios">
            <h5 class="formulario-titulos">MASAJES:</h5>
            <div class="form-row">
              <div class="col-lg-12 col-sm-12">


                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'MASAJES')" :key=" 'm_' + servicio.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio.es_marcado" :value="servicio.id" @change="checkServicio(servicio, index)" color="danger">{{servicio.nombre_servicio}} - {{servicio.id}} </p-check>          
                </div>
                <!-- End Servicios -->


                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'MASAJES')" :key=" 'mp_' + servicio_perso.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio_perso.es_marcado" :value="servicio_perso.id" @change="checkServicioPersonalizado(servicio_perso, index)" color="danger">{{servicio_perso.nombre_servicio}} - {{servicio_perso.id}}</p-check>          
                </div>
                <!-- End Servicios -->
        
                <div class="form-group">
                  <button class="form-control btn-otros"><span>Otros</span><i class="fa fa-plus-circle"></i></button>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-6 col-sm-12 espacio-campos">
            <div class="cuadro-servicios">
            <h5 class="formulario-titulos">PRELIMINARES:</h5>
            <div class="form-row">
              <div class="col-lg-12 col-sm-12">


                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'PRELIMINARES')" :key=" 'p_' + servicio.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio.es_marcado" :value="servicio.id" @change="checkServicio(servicio, index)" color="danger">{{servicio.nombre_servicio}} - {{servicio.id}}</p-check>         
                </div>
                <!-- End Servicios -->

                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'PRELIMINARES')" :key=" 'pp_' + servicio_perso.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio_perso.es_marcado" :value="servicio_perso.id" @change="checkServicioPersonalizado(servicio_perso, index)" color="danger">{{servicio_perso.nombre_servicio}}</p-check>          
                </div>
                <!-- End Servicios -->

                <div class="form-group">
                  <button class="form-control btn-otros"><span>Otros</span><i class="fa fa-plus-circle"></i></button>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-6 col-sm-12 espacio-campos">
            <div class="cuadro-servicios">
            <h5 class="formulario-titulos">ÍNTIMO:</h5>
            <div class="form-row">
              <div class="col-lg-12 col-sm-12">
              
                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'INTIMO')" :key=" 'i_' + servicio.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio.es_marcado" :value="servicio.id" @change="checkServicio(servicio, index)" color="danger">{{servicio.nombre_servicio}} - {{servicio.id}}</p-check>       
                </div>
                <!-- End Servicios -->

                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'INTIMO')" :key=" 'ip_' + servicio_perso.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio_perso.es_marcado" :value="servicio_perso.id" @change="checkServicioPersonalizado(servicio_perso, index)" color="danger">{{servicio_perso.nombre_servicio}} - {{servicio_perso.id}}</p-check>          
                </div>
                <!-- End Servicios -->

                <div class="form-group">
                  <button class="form-control btn-otros"><span>Otros</span><i class="fa fa-plus-circle"></i></button>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-6 col-sm-12 espacio-campos">
            <div class="cuadro-servicios">
            <h5 class="formulario-titulos">OTROS SERVICIOS:</h5>
            <div class="form-row">
              <div class="col-lg-12 col-sm-12">

                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'OTROS')" :key=" 'o_' + servicio.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio.es_marcado" :value="servicio.id" @change="checkServicio(servicio, index)" color="danger">{{servicio.nombre_servicio}} - {{servicio.id}}</p-check>       
                </div>
                <!-- End Servicios -->

                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'OTROS')" :key=" 'op_' + servicio_perso.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio_perso.es_marcado" :value="servicio_perso.id" @change="checkServicioPersonalizado(servicio_perso, index)" color="danger">{{servicio_perso.nombre_servicio}} - {{servicio_perso.id}}</p-check>          
                </div>
                <!-- End Servicios -->

                <div class="form-group">
                  <button class="form-control btn-otros"><span>Otros</span><i class="fa fa-plus-circle"></i></button>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-6 col-sm-12 espacio-campos">
            <div class="cuadro-servicios">
            <h5 class="formulario-titulos">FETICHE:</h5>
            <div class="form-row">
              <div class="col-lg-12 col-sm-12">
                
                
                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'FETICHE')" :key=" 'f_' + servicio.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio.es_marcado" :value="servicio.id" @change="checkServicio(servicio, index)" color="danger">{{servicio.nombre_servicio}} - {{servicio.id}}</p-check>       
                </div>
                <!-- End Servicios -->

                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'FETICHE')" :key=" 'fp_' + servicio_perso.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio_perso.es_marcado" :value="servicio_perso.id" @change="checkServicioPersonalizado(servicio_perso, index)" color="danger">{{servicio_perso.nombre_servicio}} - {{servicio_perso.id}}</p-check>          
                </div>
                <!-- End Servicios -->

                <div class="form-group">
                  <button class="form-control btn-otros"><span>Otros</span><i class="fa fa-plus-circle"></i></button>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-6 col-sm-12 espacio-campos">
            <div class="cuadro-servicios-especial">
            <h5 class="formulario-titulos">DISCAPACITADOS:</h5>
            <div class="form-row">
              <div class="col-lg-12 col-sm-12">
                
                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'DISCAPACITADOS')" :key=" 'd_' + servicio.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio.es_marcado" :value="servicio.id" @change="checkServicio(servicio, index)" color="danger">{{servicio.nombre_servicio}} - {{servicio.id}}</p-check>       
                </div>
                <!-- End Servicios -->

                <!-- Start Servicios -->
                <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'DISCAPACITADOS')" :key=" 'dp_' + servicio_perso.id">
                    <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio_perso.es_marcado" :value="servicio_perso.id" @change="checkServicioPersonalizado(servicio_perso, index)" color="danger">{{servicio_perso.nombre_servicio}} - {{servicio_perso.id}}</p-check>          
                </div>
                <!-- End Servicios -->

                <div class="form-group">
                  <button class="form-control btn-otros"><span>Otros</span><i class="fa fa-plus-circle"></i></button>
                </div>
              </div>
            </div>
            </div>
          </div>

        </div>
      
  </form>
</template>

<script>
    export default {
        mounted() {

            this.listarServicios();

        },
        data(){
            return {
                errorServicio : 0,
                erroresServicio: [],
                arServicios : [],
                arServiciosPersonalizados : [],
                idusuario : 0,
                nombre_servicio : '',
                categoria_servicio : '',
                estado_servicio : '',
                otro_servicio : ''
            }
        },
         methods:{
           
            listarServicios(){

                  let me = this;

                  axios.get('/servicios-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arServicios = respuesta.servicios;
                      me.arServiciosPersonalizados = respuesta.servicios_personalizados;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            filtrarPor(servicios, value) {
              return servicios.filter( servicios => {
                    return servicios.categoria_servicio.indexOf(value) > -1;
              })
            },
            limpiarCampos(){

                this.otro_servicio = '';

            },
            validarOtroServicio(){

                let me = this;

                me.errorServicio = 0;
                me.erroresServicio = [];
                
                if(me.erroresServicio.length) me.errorServicio = 1;

                return me.errorServicio;

            },
            checkServicio(servicio){

              
              console.log(servicio);
              //console.log(servicio.checked === servicio.no);

              //checkedServicios

                  let me = this;

                  /*if(me.validarOtroServicio()){
                    Swal.fire('ERROR', me.erroresServicio.toString(),'error');
                    return;
                  }*/


                 /* axios.post('servicios-profesional/registrar', {
                    'idusuario' : me.$idusuario,
                    'opcion_tarifa' : opcion,
                    'costo_tarifa' : tarifa,
                    'categoria_tarifa' : tipo
                  })
                  .then(function (response) {

                    var _tarifa = response.data.tarifa;

                      me.limpiarCampos();
                      me.arTarifas.push(_tarifa);

                      Swal.fire('CONFIRMACION', 'Tarifa agregada correctamente','success');

                  })
                  .catch(function (error) {
                      // handle error
                      console.log(error);
                  });*/

            },
            checkServicioPersonalizado(data = [], index){
            },
            eliminarServicio(data = [], index){

                 /* let me = this;

                  Swal.fire({
                    title: '¿Estas seguro?',
                    text: 'Una vez eliminado, no podrás recuperar el registro!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, eliminar!',
                    cancelButtonText: 'No, Cancelar'
                  }).then((result) => {
                    
                    if (result.value) {

                       axios.delete('/tarifas-profesional/eliminar/' + data.id)
                        .then(function (response) {

                           me.$delete(me.arTarifas, index);

                            Swal.fire(
                              '¡Eliminado!',
                              'Se borró el registro seleccionado',
                              'success'
                            )

                        }).catch(function(error){ console.log(error); });

                    } 
                    
                  })*/

            }

         }

    }
</script>
