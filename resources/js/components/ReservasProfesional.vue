<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">RESERVAS:</h5>
      <p>
        <strong class="precio-morado">La Reserva</strong> te permite propulsar tu anuncio nuevamente a las primeras posiciones y multiplicar de esta manera la visibilidad de tu anuncio y aumentar el número de contactos.
      </p>
      <p>
        Recuerda que cuando publicas un anuncio este va perdiendo posiciones en función de las nuevas inscripciones y/o de los
        <strong class="precio-morado">BOOSTERS</strong> utilizados por las demás personas de la comunidad Meet For Night.
      </p>
      <p>Si estas interesado sigue estos pasos:</p>
    </div>

    
      <div class="servicios_seleccionados espacio-reservas" v-show="mostrarReserva" >

        <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>GESTIÓN DE RESERVA</h2>

        <!-- SECCION INTERIOR DE DATOS -->
        <div class="form-row" style="margin-top:20px;">
            <div class="col-lg-6 col-sm-12">
                 <i class="fa fa-clock-o"></i> <strong>Nombre:</strong> {{usuarioReserva.nombre}}
            </div>
            <div class="col-lg-6 col-sm-12">
                 <i class="fa fa-clock-o"></i> <strong>Reservar el:</strong> {{reservaSeleccionada.fecha}}
            </div>
        </div>
        <div class="form-row" style="margin-top:10px;">    
            <div class="col-lg-6 col-sm-12">
                 <i class="fa fa-clock-o"></i> <strong>Hora Inicio:</strong> {{reservaSeleccionada.desde}}
            </div>
            <div class="col-lg-6 col-sm-12">
                 <i class="fa fa-clock-o"></i> <strong>Hora Fin:</strong> {{reservaSeleccionada.hasta}}
            </div>
        </div>
        <div class="form-row" style="margin-top:10px;">       
            <div class="col-lg-6 col-sm-12">
                 <i class="fa fa-clock-o"></i> <strong>Correo:</strong> {{usuarioReserva.email}}
            </div>
            <div class="col-lg-6 col-sm-12">
                 <i class="fa fa-clock-o"></i> <strong>Teléfono:</strong> {{usuarioReserva.celular}}
            </div>
        </div>

        <template>
            <div class="form-row" style="margin-top:10px;">    
                <div class="col-lg-6 col-sm-12">
                    <i class="fa fa-clock-o"></i> <strong>¿Cliente se desplaza?:</strong> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <i class="fa fa-clock-o"></i> <strong>Dirección:</strong> {{reservaSeleccionada.direccion}} 
                </div>
            </div>    
        </template>

        <div class="form-row" style="margin-top:10px;"> 
            <div class="col-lg-12 col-sm-12">
                <i class="fa fa-clock-o"></i> <strong>Extras:</strong> {{reservaSeleccionada.extras}}
            </div>
        </div>

       <h2 class="sub-tit" style="margin-top:20px;"><i class="icon-calendar esp-icono-bio"></i>SERVICIOS</h2>

        <div class="form-row lista-plan-reservas" v-for="servicio in serviciosReserva" :key=" 's_' + servicio.id">
            <div class="col-lg-10 col-sm-12">
                {{servicio.opcion_tarifa}}
            </div>
            <div class="col-lg-2 col-sm-12 text-right">
                $ {{servicio.costo_tarifa}}
            </div>  
        </div>

        <div class="form-row" style="margin-top:20px;">
            <div class="col-lg-10 col-sm-12">
                <strong>TOTAL SERVICIO:</strong>
            </div>
            <div class="col-lg-2 col-sm-12 text-right">
                <strong>${{calcularServicios}}</strong>
            </div>  
        </div>



        <div class="form-row" style="margin-top:20px;">
            <div class="col-lg-4 col-sm-12">
              <button type="button" :disabled="reservaSeleccionada.es_aceptada != 0" @click="rechazarReserva()" class="btn btn-primary btn-rechazar-reserva">RECHAZAR RESERVA</button>
            </div>
            <div class="col-lg-4 col-sm-12">
              <button type="button" :disabled="reservaSeleccionada.es_aceptada != 0" @click="aceptarReserva()" class="btn btn-primary btn-aceptar-reserva">ACEPTAR RESERVA</button>
            </div>
            <div class="col-lg-4 col-sm-12">
              <button type="button" @click="limpiarReserva()" class="btn btn-primary btn-cerrar-reserva">CERRAR</button>
            </div>
        </div>
        <!-- FIN SECCION INTERIOR DE DATOS -->

      </div>

    <div class="bloques-de-perfil">
        <h5 class="formulario-titulos">LISTA DE RESERVAS:</h5>
        <p>Especifica tus <strong class="precio-morado">tarifas privadas</strong> a continuación</p>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col" width="40">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col">Desde</th>
                <th scope="col">Hasta</th>
                <th scope="col">Estado</th>
                <th scope="col" ></th>
              </tr>
            </thead>
            <tbody>
 
              <tr v-for="reserva in arReservas" :key="reserva.id">

                    <td v-text="reserva.id" scope="row"> </td>
                    <td v-text="reserva.usuario.nombre"></td>
                    <td v-text="reserva.fecha"></td>
                    <td v-text="reserva.desde"></td>
                    <td v-text="reserva.hasta"></td>
                    <td>

                      <div v-if="reserva.es_aceptada === 1"><i class="fa fa-check"></i> Aceptada</div>
                      <div v-else-if="reserva.es_aceptada == 0"><i class="fa fa-clock-o"></i> Pendiente</div>
                      <div v-else><i class="fa fa-times"></i> Rechazada</div>

                    </td>
                    <td><button type="button" @click="seleccionarReserva(reserva)" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button></td>
              </tr> 
              
            </tbody>
          </table>

      </div>


      
    
  </form>
</template>

<script>
    export default {
        mounted() {

            this.listarReservas();
            this.reservaSeleccionada = [];
            this.usuarioSeleccionado = [];
            this.serviciosReserva = [];

        },
        data(){
            return {
                errorPerfil : 0,
                erroresPerfil: [],
                arReservas : [],
                idusuario : 0,
                reservaSeleccionada : [],
                usuarioReserva : [],
                serviciosReserva : [],
                mostrarReserva : 0
            }
        },
        computed:{

            calcularServicios () {

                let sum = 0;
                this.serviciosReserva.forEach(function(item) { sum += item.costo_tarifa; });

                return sum;

            }

        },
         methods:{
           
            listarReservas(){

                  let me = this;

                  axios.get('/reservas-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arReservas = respuesta.reservas;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            seleccionarReserva(reserva){

                let me = this;

                me.reservaSeleccionada = reserva;
                me.usuarioReserva = reserva.usuario;
                me.serviciosReserva = JSON.parse(reserva.servicios);

                me.mostrarReserva = 1;

            },
            limpiarReserva(){

                let me = this;

                me.mostrarReserva = 0;
                me.reservaSeleccionada = [];
                me.usuarioReserva = [];
                me.serviciosReserva = [];

            },
            aceptarReserva(){

                  let me = this;

                  Swal.fire({
                    title: 'CONFIRMACIÓN',
                    text: 'Estas a punto de aceptar una reserva, debes confirmar antes.',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, Confirmar',
                    cancelButtonText: 'No, Cancelar'
                  }).then((result) => {
                    
                      if (result.value) {

                            axios.post('reservas-profesional/aceptar', {
                              'idprofesional' : me.$idprofesional,
                              'idreserva' : me.reservaSeleccionada.id
                            })
                            .then(function (response) {

                                me.limpiarReserva();
                                me.listarReservas();

                                Swal.fire('CONFIRMACION', response.data.mensaje ,'success');

                            })
                            .catch(function (error) {
                                // handle error
                                console.log(error);
                            });

                      } 
                    
                  });

                  

            },
            rechazarReserva(reserva){

                  let me = this;

                  Swal.fire({
                    title: '¿RECHAZAR RESERVA?',
                    text: 'Una vez rechazada, se le notificará al usuario sobre la cancelación y no podrás recuperar la reserva.',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, rechazar',
                    cancelButtonText: 'No, Cancelar'
                  }).then((result) => {
                    
                      if (result.value) {

                            axios.post('reservas-profesional/rechazar', {
                              'idprofesional' : me.$idprofesional,
                              'idreserva' : me.reservaSeleccionada.id
                            })
                            .then(function (response) {

                                me.limpiarReserva();
                                me.listarReservas();

                                Swal.fire('CONFIRMACION', response.data.mensaje ,'success');

                            })
                            .catch(function (error) {
                                // handle error
                                console.log(error);
                            });

                        

                      } 
                    
                  });

            }

         }

    }
</script>

