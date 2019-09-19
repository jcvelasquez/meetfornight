<template>

<form action="#" method="post">

          <!-- Start Opciones -->
         <!--  <div class="row justify-content-center cuerpo-perfil mb-4">
              <div class="custom-control custom-radio custom-control-inline custom-rb-plan">
                 <input type="radio" id="btnRadio1" name="customRadioS3" class="custom-control-input" checked>
                 <label class="custom-control-label rojo" for="btnRadio1">Preseleccionado</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline custom-rb-plan">
                 <input type="radio" id="btnRadio2" name="customRadioS3" class="custom-control-input">
                 <label class="custom-control-label" for="btnRadio2">Manual</label>
              </div>
          </div> -->
          <!-- End Opciones -->

          
            <div class="row">
              <div class="col-lg-6 col-sm-12 espacio-campos">
                <div class="cuadro-servicios">
                <h5 class="formulario-titulos">MASAJES:</h5>
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">

                     <!-- Start Servicios -->
                    <div class="form-group checksito-total" v-for="(servicio, index) in arServicios" :key="servicio.id">
                      <template v-if="servicio.categoria_servicio == 'MASAJES' ">
                        <input class="inp-cbx" :value="servicio.id" :id="'servicio' + servicio.id" type="checkbox" style="display: none;" @click="agregarServicio(servicio, index)"/>
                        <label class="cbx" :for="'servicio' + servicio.id">
                          <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                          </span>
                          <span>{{servicio.nombre_servicio}}</span>
                        </label>
                      </template>
                    </div>
                    <!-- End Servicios -->


                     <!-- Start Servicios Personalizados -->
                    <div class="form-group checksito-total" v-for="(serv_x_pro, index) in arServiciosProfesional" :key="serv_x_pro.id">
                      <template v-if="serv_x_pro.categoria_servicio == 'MASAJES' ">
                        <input class="inp-cbx" :value="serv_x_pro.id" :id="'servicio' + servicio.id" type="checkbox" style="display: none;" @click="agregarServicio(servicio, index)"/>
                        <label class="cbx" :for="'servicio' + serv_x_pro.id">
                          <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                          </span>
                          <span>{{serv_x_pro.nombre_servicio}}</span>
                        </label>
                      </template>
                    </div>
                    <!-- End Servicios Personalizados -->

            
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
                    <div class="form-group checksito-total" v-for="(servicio, index) in arServicios" :key="servicio.id">
                      <template v-if="servicio.categoria_servicio == 'PRELIMINARES' ">
                        <input class="inp-cbx" :value="servicio.id" :id="'servicio' + servicio.id" type="checkbox" style="display: none;" @click="agregarServicio(servicio, index)"/>
                        <label class="cbx" :for="'servicio' + servicio.id">
                          <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                          </span>
                          <span>{{servicio.nombre_servicio}}</span>
                        </label>
                      </template>
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
                    <div class="form-group checksito-total" v-for="(servicio, index) in arServicios" :key="servicio.id">
                      <template v-if="servicio.categoria_servicio == 'INTIMO' ">
                        <input class="inp-cbx" :value="servicio.id" :id="'servicio' + servicio.id" type="checkbox" style="display: none;" @click="agregarServicio(servicio, index)"/>
                        <label class="cbx" :for="'servicio' + servicio.id">
                          <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                          </span>
                          <span>{{servicio.nombre_servicio}}</span>
                        </label>
                      </template>
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
                    <div class="form-group checksito-total" v-for="(servicio, index) in arServicios" :key="servicio.id">
                      <template v-if="servicio.categoria_servicio == 'OTROS' ">
                        <input class="inp-cbx" :value="servicio.id" :id="'servicio' + servicio.id" type="checkbox" style="display: none;" @click="agregarServicio(servicio, index)"/>
                        <label class="cbx" :for="'servicio' + servicio.id">
                          <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                          </span>
                          <span>{{servicio.nombre_servicio}}</span>
                        </label>
                      </template>
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
                    <div class="form-group checksito-total" v-for="(servicio, index) in arServicios" :key="servicio.id">
                      <template v-if="servicio.categoria_servicio == 'FETICHE' ">
                        <input class="inp-cbx" :value="servicio.id" :id="'servicio' + servicio.id" type="checkbox" style="display: none;" @click="agregarServicio(servicio, index)"/>
                        <label class="cbx" :for="'servicio' + servicio.id">
                          <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                          </span>
                          <span>{{servicio.nombre_servicio}}</span>
                        </label>
                      </template>
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
                    <div class="form-group checksito-total" v-for="(servicio, index) in arServicios" :key="servicio.id">
                      <template v-if="servicio.categoria_servicio == 'DISCAPACITADOS' ">
                        <input class="inp-cbx" :value="servicio.id" :id="'servicio' + servicio.id" type="checkbox" style="display: none;" @click="agregarServicio(servicio, index)"/>
                        <label class="cbx" :for="'servicio' + servicio.id">
                          <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                          </span>
                          <span>{{servicio.nombre_servicio}}</span>
                        </label>
                      </template>
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
         <!--  <div class="bloques-de-perfil">
            <div class="form-row">
              <button type="submit" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
            </div>
          </div> -->
          
     </form>
</template>

<script>
    export default {
        mounted() {
            //console.log(this.$userId)

            this.listarServicios();

        },
        data(){
            return {
                errorServicio : 0,
                erroresServicio: [],
                arServicios : [],
                arServiciosProfesional : [],
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
                      me.arServiciosProfesional = respuesta.servicios_x_profesional;
                      

                  }).catch(function (error) {  console.log(error);     });
                
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
            registrarServicio(){

/*
                  let me = this;

                  if(me.validarOtroServicio()){
                    Swal.fire('ERROR', me.erroresServicio.toString(),'error');
                    return;
                  }


                  axios.post('servicios-profesional/registrar', {
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
            eliminarTarifa(data = [], index){

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
