 
 <template>

    <form action="">

    <div class="espacio-reservas">

            <div class="reserva-info-derecha subtitulo-reservas-derecha">

              <div class="reserva-biografia">

                <i class="icon-user-woman"></i>

                <div class="biografia">

                  <h2>DESCRIPCIÓN</h2>

                  <h3>ID: MFN001</h3>

                </div>

              </div>

              <div class="ranking">

                <div class="ranking-letra">Ranking</div><div class="fucsia horizontal"><div class="ranking-letra">5/5</div><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div><div class="ranking-letra vistas">20 servicios</div>

              </div>

            </div>

            <p class="texto-biografia tamano-delicado">{{ descripcion }}</p>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-diary esp-icono-bio"></i>CONTÁCTAME</h2>

            <div class="reserva-contactame">

              <p class="texto-biografia"><i class="icon-whatsapp-green esp-icono-bio"></i>{{ celular }}</p>

              <div class="web"><i class="icon-world esp-icono-bio"></i><a href="#" target="_blank">www.franchescarhodes.com</a></div>

            </div>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-video esp-icono-bio"></i>VIDEO</h2>

            <iframe width="100%" height="315" src="https://www.youtube.com/embed/r1ncXWTwx2g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

          </div>




          <div class="espacio-reservas servicios-reservas">

            <h2 class="sub-tit"><i class="icon-massage esp-icono-bio"></i>SERVICIOS</h2>


            <ul class="nav nav-tabs" id="myTab" role="tablist">

              <li class="nav-item">

                <a class="nav-link active" id="preliminares-tab" data-toggle="tab" href="#preliminares" role="tab" aria-controls="preliminares" aria-selected="false">PRELIMINARES</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" id="intimo-tab" data-toggle="tab" href="#intimo" role="tab" aria-controls="intimo" aria-selected="false">ÍNTIMO</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" id="masajes-tab" data-toggle="tab" href="#masajes" role="tab" aria-controls="masajes" aria-selected="true">MASAJES</a>

              </li> 

              <li class="nav-item">

                <a class="nav-link" id="fetiches-tab" data-toggle="tab" href="#fetiches" role="tab" aria-controls="fetiches" aria-selected="false">FETICHES</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" id="otros-tab" data-toggle="tab" href="#otros" role="tab" aria-controls="otros" aria-selected="false">OTROS</a>

              </li>

              <li class="nav-item">

                <a class="nav-link celeste" id="discapacitados-tab" data-toggle="tab" href="#discapacitados" role="tab" aria-controls="discapacitados" aria-selected="false">DISCAPACITADOS</a>

              </li>

            </ul>

            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="preliminares" role="tabpanel" aria-labelledby="preliminares-tab">

                <ul class="lista-servicio">


                      <!-- Start Servicios -->
                      <div class="form-group checksito-total" v-for="(servicio, index) in filtrarPor(arServicios, 'INTIMO')" :key=" 'i_' + servicio.id">
                          <p-check class="p-curve" true-value="1" false-value="0" v-model="servicio.es_marcado" :value="servicio.id" @change="checkServicio(servicio, index)" color="danger">{{servicio.nombre_servicio}} - {{servicio.id}}</p-check>       
                      </div>
                      <!-- End Servicios -->

                    <li>{{nombre_servicio}}</li>

                  

                </ul>

              </div>

              <div class="tab-pane fade" id="masajes" role="tabpanel" aria-labelledby="masajes-tab">

                <ul class="lista-servicio">

                  <li>{{nombre_servicio}}</li>

                </ul>

              </div>

              <div class="tab-pane fade" id="fetiches" role="tabpanel" aria-labelledby="fetiches-tab">

                <ul class="lista-servicio">

               <li>{{nombre_servicio}}</li>

                </ul>

              </div>

              <div class="tab-pane fade" id="intimo" role="tabpanel" aria-labelledby="intimo-tab">

                <ul class="lista-servicio">

               <li>{{nombre_servicio}}</li>

                </ul>

              </div>

              <div class="tab-pane fade" id="otros" role="tabpanel" aria-labelledby="otros-tab">

                <ul class="lista-servicio">

               <li>{{nombre_servicio}}</li>

                </ul>

              </div>

              <div class="tab-pane fade" id="discapacitados" role="tabpanel" aria-labelledby="discapacitados-tab">

                <ul class="lista-servicio icon-celeste">

                    <li>{{nombre_servicio}}</li>

                </ul>

              </div>

            </div>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>DISPONIBILIDAD</h2>

            <div class="disponibilidad">

              <div class="fecha">

                <span class="dias">Lun</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Mar</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Mie</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Jue</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Vie</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Sab</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

              <div class="fecha">

                <span class="dias">Dom</span>

                <p>00:00</p>

                <p>04:03</p>

              </div>

            </div>

          </div>

          <div id="widget"> </div>
        
           
          <div class="espacio-reservas" style="margin-top:40px;">
            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS SERVICIO</h2>
            <div class="tarifario-vertical">
             
             
                  <div class="tarifario-horizontal">
                    <div class="tarifario-morado">{{opcion_tarifa}} </div>
                    <div class="tarifario-rojo">{{costo_tarifa}}</div>
                  </div>
              
              
            </div>
          </div>

          <div class="espacio-reservas">

          <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>¿Usted se despalaza? </h2>

          <p> <input type="radiobutton"  />Si </p>

            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS ESCORT</h2>
            <div class="tarifario-vertical">
              
              
                  <div class="tarifario-horizontal">
                    <div class="tarifario-morado">{{opcion_tarifa}} </div>
                    <div class="tarifario-rojo">{{costo_tarifa}}</div>
                  </div>

            </div>
          </div>

          <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS EXTRAS</h2>
            <div class="tarifario-vertical">
             
             
                  <div class="tarifario-horizontal">
                    <div class="tarifario-morado">{{opcion_tarifa}} </div>
                    <div class="tarifario-rojo">{{costo_tarifa}}</div>
                  </div>

            </div>
          </div>




          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-medical-stethoscope esp-icono-bio"></i>SALUD</h2>

            <div class="reserva-salud">

              <img src="{{ asset('img/control-sanitario.png') }}">

              <p class="texto-salud-reserva">La gestión de la agenda es responsabilidad del administrador del perfil, por lo tanto no nos hacemos responsables de la reserva.</p>

            </div>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-like esp-icono-bio"></i>SEGURIDAD</h2>

            <div class="texto-biografia">

              <p>Únicamente asisto a citas con usuarios de perfiles registrados con datos reales, DNI y fotos aprobadas por el administrador de la web.</p>

            </div>

          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-chat esp-icono-bio"></i>DÉJAME UN MENSAJE</h2>

            <form>

              <div class="form-group">

                <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre *" required>

              </div>

              <div class="form-group">

                <input type="cel" class="form-control" id="exampleInputPassword1" name="celular" placeholder="Celular">

              </div>

              <div class="form-group">

                <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email *" required>

              </div>

              <div class="form-group">

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mensaje" placeholder="Mensaje"></textarea>

              </div>

              <button type="submit" class="btn btn-primary btn-reserva">ENVIAR</button>

            </form>

          </div>

           </form>

</template>


<script>
    export default {
        mounted() {

            this.mostrarPerfil();

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
           
            mostrarPerfil(){

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



          