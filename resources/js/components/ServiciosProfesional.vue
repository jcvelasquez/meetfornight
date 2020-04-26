<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">SERVICIO PERSONALIZADO:</h5>
      <p>Puedes agregar un servicio personalizado que no encuentres en la lista:</p>
      <div class="linea-morada">
        <div class="row">

            <div class="col-lg col-sm-12">
              <select type="text" class="form-control" name="categoria_servicio" v-model="categoria_servicio">
                <option value ="">Selecciona tipo de servicio</option>
                <option value="MASAJES">MASAJES</option>
                <option value="PRELIMINARES">PRELIMINARES</option>
                <option value="INTIMO">INTIMO</option>
                <option value="FETICHE">FETICHE</option>
                <option value="OTROS">OTROS SERVICIOS</option>
                <option value="DISCAPACITADOS">DISCAPACITADOS</option>
              </select>
            </div>
            <div class="col-lg col-sm-12">
              <input type="text" class="form-control" name="nombre_servicio" v-model="nombre_servicio" placeholder="Ingrese un nombre de servicio"
              />
            </div>
            <div class="col-lg-1 col-sm-12">
              <button type="button" @click="agregarServicio()" class="btn btn-primary mas-cuadrado">
                <i class="fa fa-plus"></i>
              </button>
            </div>
          
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">SELECCION DE SERVICIOS:</h5>
      <p>Elige los servicios que deseas brindar a tus clientes.</p>
    </div>

    <div class="row">
      <div class="col-lg-6 col-sm-12 espacio-campos">
        <div class="cuadro-servicios">
          <h5 class="formulario-titulos">MASAJES:</h5>
          <div class="form-row">
            <div class="col-lg-12 col-sm-12">


              <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'MASAJES')" :key=" 'm_' + servicio.id">
                <input type="checkbox" style="display:none;" :true-value="1" :false-value="0" v-model="servicio.es_marcado" @change="checkServicio(servicio, index)" :id="'masaje' + servicio.id" name="masajes" class="inp-cbx always-validate" />
                <label class="cbx" style="width:100%;" :for="'masaje' + servicio.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span class="tam-check" style="text-transform:uppercase;">{{servicio.nombre_servicio}}</span>
                </label>
              </div>



              <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'MASAJES')" :key=" 'mp_' + servicio_perso.id">
                <input type="checkbox" disabled style="display:none;" :true-value="1" :false-value="0" v-model="servicio_perso.es_marcado" @change="checkServicioPersonalizado(servicio_perso, index)" :id="'masaje' + servicio_perso.id" name="masajes" class="inp-cbx always-validate" />
                <label class="cbx" style="width:100%;" :for="'masaje' + servicio_perso.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span class="tam-check" style="text-transform:uppercase;">{{servicio_perso.nombre_servicio}} 
                        <button class="btn btn_eliminar_personalizado" @click="eliminarServicio(servicio_perso, index)" type="button"> <i class="icon-trash"></i> Eliminar </button>
                  </span>
                </label>
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


              <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'PRELIMINARES')" :key=" 'p_' + servicio.id" >
                <input type="checkbox" style="display:none;" :true-value="1" :false-value="0" v-model="servicio.es_marcado" @change="checkServicio(servicio, index)"
 :id="'preliminares' + servicio.id" name="preliminares" class="inp-cbx always-validate"/>
                <label class="cbx" style="width:100%;" :for="'preliminares' + servicio.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span class="tam-check" style="text-transform:uppercase;">{{servicio.nombre_servicio}}</span>
                </label>
              </div>



              <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'PRELIMINARES')" :key=" 'pp_' + servicio_perso.id">
                <input type="checkbox" style="display:none;" disabled :true-value="1" :false-value="0" v-model="servicio_perso.es_marcado" :id="'preliminar' + servicio_perso.id" name="preliminares" class="inp-cbx always-validate"  />
                <label class="cbx" style="width:100%;" :for="'preliminar' + servicio_perso.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span
                    class="tam-check"
                    style="text-transform:uppercase;"
                  >{{servicio_perso.nombre_servicio}} <button class="btn btn_eliminar_personalizado" @click="eliminarServicio(servicio_perso, index)" type="button"> <i class="icon-trash"></i> Eliminar </button> </span>
                </label>
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

              <div
                class="form-group checksito-total"
                v-for="(servicio, index) in filtrarPor(arServicios, 'INTIMO')"
                :key=" 'i_' + servicio.id"  >
                <input
                  type="checkbox"
                  style="display:none;"
                  :true-value="1"
                  :false-value="0"
                  v-model="servicio.es_marcado"
                  @change="checkServicio(servicio, index)"
                  :id="'intimos' + servicio.id"
                  name="intimos"
                  class="inp-cbx always-validate"  />
                <label class="cbx" style="width:100%;" :for="'intimos' + servicio.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span
                    class="tam-check"
                    style="text-transform:uppercase;" >{{servicio.nombre_servicio}}</span>
                </label>
              </div>


              <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'INTIMO')" :key=" 'ip_' + servicio_perso.id">
                <input type="checkbox" disabled style="display:none;" :true-value="1" :false-value="0" v-model="servicio_perso.es_marcado" :id="'intimo' + servicio_perso.id" name="intimos" class="inp-cbx always-validate" />
                <label class="cbx" style="width:100%;" :for="'intimo' + servicio_perso.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span
                    class="tam-check"
                    style="text-transform:uppercase;" >{{servicio_perso.nombre_servicio}} <button class="btn btn_eliminar_personalizado" @click="eliminarServicio(servicio_perso, index)" type="button"> <i class="icon-trash"></i> Eliminar </button> </span>
                </label>
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

              <div class="form-group checksito-total" v-for="servicio in filtrarPor(arServicios, 'OTROS')" :key=" 'o_' + servicio.id" >
                <input type="checkbox" style="display:none;" :true-value="1" :false-value="0" v-model="servicio.es_marcado" :id="'otro' + servicio.id" name="otros" class="inp-cbx always-validate" />
                <label class="cbx" style="width:100%;" :for="'otro' + servicio.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span
                    class="tam-check"
                    style="text-transform:uppercase;" >{{servicio.nombre_servicio}} </span>
                </label>
              </div>

              <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'OTROS')" :key=" 'op_' + servicio_perso.id">
                <input type="checkbox" disabled style="display:none;" :true-value="1" :false-value="0" v-model="servicio_perso.es_marcado" :id="'otro' + servicio_perso.id" name="otros" class="inp-cbx always-validate" />
                <label class="cbx" style="width:100%;" :for="'otro' + servicio_perso.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span
                    class="tam-check"
                    style="text-transform:uppercase;" >{{servicio_perso.nombre_servicio}} <button class="btn btn_eliminar_personalizado" @click="eliminarServicio(servicio_perso, index)" type="button"> <i class="icon-trash"></i> Eliminar </button></span>
                </label>
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

              <div class="form-group checksito-total" v-for="servicio in filtrarPor(arServicios, 'FETICHE')" :key=" 'f_' + servicio.id">
                <input type="checkbox" style="display:none;" :true-value="1" :false-value="0" v-model="servicio.es_marcado" :id="'fetiche' + servicio.id" name="fetiches" class="inp-cbx always-validate" />
                <label class="cbx" style="width:100%;" :for="'fetiche' + servicio.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span class="tam-check" style="text-transform:uppercase;">{{servicio.nombre_servicio}}</span>
                </label>
              </div>
  

              <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'FETICHE')" :key=" 'fp_' + servicio_perso.id">

                  <input type="checkbox" disabled style="display:none;" :true-value="1" :false-value="0" v-model="servicio_perso.es_marcado" :id="'fetiche' + servicio_perso.id" name="fetiches" class="inp-cbx always-validate" />
                  <label class="cbx" style="width:100%;" :for="'fetiche' + servicio_perso.id">
                    <span>
                      <svg width="12px" height="10px" viewBox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1" />
                      </svg>
                    </span>
                    <span
                      class="tam-check"
                      style="text-transform:uppercase;" >{{servicio_perso.nombre_servicio}} <button class="btn btn_eliminar_personalizado" @click="eliminarServicio(servicio_perso, index)" type="button"> <i class="icon-trash"></i> Eliminar </button></span>
                  </label>

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


              <div class="form-group checksito-total" v-for="servicio in filtrarPor(arServicios, 'DISCAPACITADOS')" :key=" 'd_' + servicio.id">
                <input type="checkbox" style="display:none;" :true-value="1" :false-value="0" v-model="servicio.es_marcado" :id="'discapacitado' + servicio.id" name="discapacitados" class="inp-cbx always-validate" />
                <label class="cbx" style="width:100%;" :for="'discapacitado' + servicio.id">
                  <span>
                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1" />
                    </svg>
                  </span>
                  <span class="tam-check" style="text-transform:uppercase;">{{servicio.nombre_servicio}}</span>
                </label>
              </div>


              <div class="form-group checksito-total" v-for="(servicio_perso, index) in filtrarPor(arServiciosPersonalizados, 'DISCAPACITADOS')" :key=" 'dp_' + servicio_perso.id">

                <input type="checkbox" disabled style="display:none;" :true-value="1" :false-value="0" v-model="servicio_perso.es_marcado" :id="'discapacitado' + servicio_perso.id" name="discapacitados" class="inp-cbx always-validate" />
                  <label class="cbx" style="width:100%;" :for="'discapacitado' + servicio_perso.id">
                    <span>
                      <svg width="12px" height="10px" viewBox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1" />
                      </svg>
                    </span>
                    <span
                      class="tam-check"
                      style="text-transform:uppercase;" >{{servicio_perso.nombre_servicio}} <button class="btn btn_eliminar_personalizado" @click="eliminarServicio(servicio_perso, index)" type="button"> <i class="icon-trash"></i> Eliminar </button></span>
                  </label>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <div class="form-row">
        <button type="button" @click="actualizarServicios()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
      </div>
    </div>
  </form>
</template>

<script>
    export default {

        mounted() {
          this.listarServicios();
        },
        data() {
          return {
            errorServicio: 0,
            erroresServicio: [],
            arServicios: [],
            arServiciosPersonalizados: [],
            categoria_servicio: "",
            nombre_servicio: ""
          };
        },
        methods: {
          listarServicios() {
            let me = this;

            axios
              .get("/servicios-profesional/listar")
              .then(function(response) {
                var respuesta = response.data;
                me.arServicios = respuesta.servicios;
                me.arServiciosPersonalizados = respuesta.servicios_personalizados;
              })
              .catch(function(error) {
                console.log(error);
              });
          },
          agregarServicio(){

              let me = this;

              /*
              if(me.validarTarifas(tipo)){
                Swal.fire('ERROR', me.erroresPerfil.toString(),'error');
                return;
              }*/

              axios.put('servicios-profesional/registrar', {
                'nombre_servicio' : me.nombre_servicio,
                'categoria_servicio' : me.categoria_servicio
              })
              .then(function (response) {
                  
                  Swal.fire('CONFIRMACION', response.data.mensaje ,'success');
                  me.listarServicios();
                  me.limpiarCampos();

              })
              .catch(function (error) {
                  console.log(error);
              });

          },
          actualizarServicios(){

              let me = this;

              axios.post('servicios-profesional/actualizar', {
                'servicios' : JSON.stringify( me.arServicios )
              })
              .then(function (response) {
                  
                  Swal.fire('CONFIRMACION', response.data.mensaje ,'success');
                  me.listarServicios();

              })
              .catch(function (error) {
                  console.log(error);
              });

          },
          eliminarServicio(data = [], index){

              let me = this;

              Swal.fire({
                title: '¿ESTAS SEGURO?',
                text: 'Una vez eliminado, no podrás recuperar el registro!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'No, Cancelar'
              }).then((result) => {
                
                  if (result.value) {

                  axios.delete('servicios-profesional/eliminar/', { params: {id: data.id} })
                      .then(function (response) {

                        me.listarServicios();

                        Swal.fire( 'ELIMINADO', response.data.mensaje, response.data.status );

                      }).catch(function(error){ console.log(error); });

                  } 
                
              })

          },
          filtrarPor(servicios, value) {
              return servicios.filter(servicios => {
                return servicios.categoria_servicio.indexOf(value) > -1;
              });
          },
          limpiarCampos() {
              this.nombre_servicio = "";
              this.categoria_servicio = "";
          },
          validarOtroServicio() {
              let me = this;

              me.errorServicio = 0;
              me.erroresServicio = [];

              if (me.erroresServicio.length) me.errorServicio = 1;

              return me.errorServicio;
          }
          
                    
        }

    };
</script>
