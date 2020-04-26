 
 <template>

<div>

    <div class="espacio-reservas" style="margin-top:40px;">
            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS SERVICIO</h2>
            <div class="tarifario-vertical">
                  <div class="tarifario-horizontal" v-for="servicio in filtrarPor(arTarifas, 'SERVICIO')" :key=" 'm_' + servicio.id">
                    <div class="tarifario-morado" v-text="servicio.opcion_tarifa"></div>
                    <div class="tarifario-rojo">
                      <button type="button" class="btn btn-primary btn-busqueda-detallada" @click="agregarTarifa(servicio)">${{servicio.costo_tarifa}}</button>
                    </div>
                  </div>
            </div>
          </div>

          <div class="espacio-reservas">

            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS ESCORT</h2>

            <div class="tarifario-vertical">
              
                 <div class="tarifario-horizontal" v-for="escort in filtrarPor(arTarifas, 'ESCORT')" :key=" 'm_' + escort.id">
                    <div class="tarifario-morado" v-text="escort.opcion_tarifa"></div>
                    <div class="tarifario-rojo" v-text="'$' +escort.costo_tarifa"></div>
                  </div>

            </div>
          </div>

          <div class="espacio-reservas">
            <h2 class="sub-tit"><i class="icon-money esp-icono-bio"></i>TARIFAS EXTRAS</h2>
            <div class="tarifario-vertical">
             
              <div class="tarifario-horizontal" v-for="extra in filtrarPor(arTarifas, 'EXTRAS')" :key=" 'm_' + extra.id">
                  <div class="tarifario-morado" v-text="extra.opcion_tarifa"></div>
                  <div class="tarifario-rojo">
                    <button type="button" @click="agregarTarifa(extra)" class="btn btn-primary btn-busqueda-detallada">$ {{extra.costo_tarifa}}</button>
                  </div>
                </div>

            </div>
    </div>

    
  
    <div class="servicios_seleccionados espacio-reservas" v-show="arTarifasSeleccionadas.length">

        <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>GENERAR RESERVA</h2>

        <div class="form-row lista-plan" v-for="seleccionado in arTarifasSeleccionadas" :key=" 's_' + seleccionado.id">
            <div class="col-lg-10 col-sm-12">
                {{seleccionado.opcion_tarifa}}
            </div>
            <div class="col-lg-2 col-sm-12 text-right">
                $ {{seleccionado.costo_tarifa}}
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

        <!-- SECCION INTERIOR DE DATOS -->
        <div class="form-row" style="margin-top:20px;" v-show="arTarifasSeleccionadas.length && mostrarDatos">
            <div class="col-lg-12 col-sm-12">
                <input type="text" name="nombres" placeholder="Nombres *" class="form-control espacio-campos">
            </div>
            <div class="col-lg-6 col-sm-12">
                <input type="text" name="apellidos" placeholder="Apellidos *" class="form-control espacio-campos">
            </div>
            <div class="col-lg-6 col-sm-12">
                <input type="text" name="email" placeholder="Email *" v-model="email" class="form-control espacio-campos">
            </div>
            <div class="col-lg-12 col-sm-12">
                <textarea type="text" rows="3" placeholder="¿Desea agregar algun extra, pedido especial o comentario?" name="extras" v-model="extras"  class="form-control"></textarea>
            </div>
            <div class="col-lg-12 col-sm-12  espacio-campos">
                  <div class="direccion-cliente"> 
                      ¿Usted es el que se despalaza? <p-input type="radio" name="desplazo" color="info" :value="0" v-model="se_desplaza">Si</p-input>
                      <p-input type="radio" name="desplazo" color="info" :value="1" checked v-model="se_desplaza">No</p-input> 
                  </div>
                  <div class="direccion-cliente" v-show="se_desplaza">
                      <input type="text" name="direccion" v-model="direccion" placeholder="Ingrese su dirección" class="form-control">
                  </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <button type="button" @click="seleccionarFechas()" class="btn btn-primary btn-busqueda-detallada">SELECCIONAR FECHAS</button>
            </div>
        </div>
        <!-- FIN SECCION INTERIOR DE DATOS -->
        

        <!-- SECCION INTERIOR DE FECHA -->
        <div class="espacio-reservas" style="margin-top:40px; margin-bottom:0;" v-show="mostrarFechas">
            <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>HORARIOS DISPONIBLES</h2>
            <div class="form-row" style="margin-top:20px;">
                <div class="col-lg-6 col-sm-12">
                    <vc-calendar color="pink"  @dayclick='dayClicked' :attributes='attributes' v-model='diaSeleccionado' is-inline :min-date='new Date()' />
                </div>
                <div class="col-lg-6 col-sm-12">
                    <ul>
                        <li v-for="horario in arHorariosGenerados" :key="horario.id">
                            <p-input type="radio" name="horario_seleccionado" color="info" @change="horarioSeleccionado = horario" v-model="horarioSeleccionado">{{horario.desde.substr(11, 5)}} -  {{horario.hasta.substr(11, 5)}}</p-input></li>
                    </ul>
                </div>
            </div>
            <div class="form-row" style="margin-top:20px;">
                <div class="col-lg-6 col-sm-12">
                <button type="button" @click="cambiarDatos()" class="btn btn-primary btn-busqueda-detallada">CAMBIAR DATOS</button>
                </div>
                <div class="col-lg-6 col-sm-12">
                <button type="button" @click="realizarReserva()" :disabled="horarioSeleccionado.length < 1" class="btn btn-primary btn-busqueda-detallada">REALIZAR RESERVA</button>
                </div>
            </div>
        </div>
        <!-- FIN SECCION INTERIOR DE FECHA -->
    
    </div>
    

 </div>  

</template>

<script>

    export default {
        props: ['apodoData'],
        mounted() {
            this.mostrarTarifas();  
            var currentDateWithFormat = new Date().toJSON().slice(0,10).replace(/-/g,'-');
            this.mostrarHorarios(currentDateWithFormat)

        },
        data(){
            return {
                attributes: [
                    {
                        key: 'today',
                        highlight: true,
                        dates: new Date()
                    }
                ],
                errorServicio : 0,
                erroresDatos: [],
                arTarifas : [],
                arTarifasSeleccionadas: [],
                arHorariosGenerados : [],
                idusuario : 0,
                se_desplaza: 0,
                tiempo : 60,
                diaSeleccionado : null,
                horarioSeleccionado : [],
                mostrarFechas : 0,
                mostrarDatos : 1,
                direccion : "",
                email : "",
                extras: "",
                totalTarifa : 0
            }
        },
        computed:{

            calcularServicios () {

                let sum = 0;
                this.arTarifasSeleccionadas.forEach(function(item) { sum += item.costo_tarifa; });
                this.totalTarifa = sum;

                return sum;

            }

        },
        methods:{

            realizarReserva() {

                let me = this;


                Swal.fire({
                    title: '¿Confirmar reserva?',
                    text: 'Una vez realizada la reserva, deberá ser confirmada por el profesional',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, confirmar!',
                    cancelButtonText: 'No, Cancelar'
                  }).then((result) => {
                    
                      if (result.value) {

                            axios.post('/perfil/reservas/' + me.apodoData, {
                                'apodo': me.apodoData,
                                'idusuario': me.$idusuario,
                                'desde' : me.horarioSeleccionado.desde,
                                'hasta' : me.horarioSeleccionado.hasta,
                                'servicios' : me.arTarifasSeleccionadas,
                                'se_desplaza' : me.se_desplaza,
                                'direccion' : me.direccion,
                                'extras' : me.extras,
                                'total' : me.totalTarifa
                            } ).then(function (response) {

                                var respuesta = response.data;

                                Swal.fire('CONFIRMACION', respuesta.mensaje,'success');
                                me.limpiarReserva();

                            }).catch(function (error) {  console.log(error);  });

                      } 
                    
                  })

            },
            limpiarReserva(){

                let me = this;

                me.mostrarFechas = 0;
                me.mostrarDatos = 1;
                me.diaSeleccionado = null;
                me.arTarifasSeleccionadas = [];
                me.arHorariosGenerados = [];
                me.se_desplaza = 0;
                me.tiempo = 0;
                me.diaSeleccionado = null;
                me.horarioSeleccionado = [];
                me.totalTarifa = 0;
                me.direccion = "";
                me.email = "";
                me.extras = "";

            },
            seleccionarFechas(){

                let me = this;

                me.mostrarFechas = 1,
                me.mostrarDatos = 0;

            },
            cambiarDatos(){

                let me = this;

                me.mostrarFechas = 0,
                me.mostrarDatos = 1;

            },
            dayClicked(day) {

                let me = this;

                me.diaSeleccionado = day;

                me.mostrarHorarios(me.diaSeleccionado.id);

            },
            mostrarTarifas(){

                  let me = this;

                  axios.get('/perfil/tarifas/' + me.apodoData ).then(function (response) {

                      var respuesta= response.data;
                      me.arTarifas = respuesta.tarifas;

                  }).catch(function (error) {  console.log(error);     });

            },
            mostrarHorarios(fecha){

                let me = this;

                me.horario_seleccionado = [];
                me.arHorariosGenerados = [];
                me.horarioSeleccionado = [];

                axios.post('/perfil/horarios/' + me.apodoData, {
                    'apodo': me.apodoData,
                    'tiempo': me.tiempo,
                    'fechaselec' : fecha
                } ).then(function (response) {

                    var respuesta = response.data;
                    me.arHorariosGenerados = respuesta.horarios;

                }).catch(function (error) {  console.log(error);     });

            },
            filtrarPor(tarifas, value) {
              return tarifas.filter( tarifas => {
                    return tarifas.categoria_tarifa.indexOf(value) > -1;
              })
            },
            agregarTarifa(tarifa){

                let me = this;      

                if( me.arTarifasSeleccionadas.length < 1){
                    me.arTarifasSeleccionadas.push(tarifa);  
                }else{
                    if(me.buscarEnSeleccionados(tarifa)){
                        console.log("existe y se borro")
                    } else {
                        me.arTarifasSeleccionadas.push(tarifa);  
                    }
                }

            },
            buscarEnSeleccionados(toFind){

                  let me = this;  

                  for(var i=0; i < me.arTarifasSeleccionadas.length; i++){
                      if(  me.arTarifasSeleccionadas[i] == toFind){ 
                        me.$delete(me.arTarifasSeleccionadas, i);
                        return true; 
                      }
                  }

                  return false;

            }
            

         }

    }
</script>