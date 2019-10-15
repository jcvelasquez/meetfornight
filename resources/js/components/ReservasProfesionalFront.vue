 
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

    <div class="servicios_seleccionados espacio-reservas">


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

            <div class="col-lg-12 col-sm-12">
                <input type="text" name="nombre" placeholder="Nombre *" id="nombre" class="form-control espacio-campos">
            </div>

            <div class="col-lg-6 col-sm-12">
                <input type="text" name="nombre" placeholder="Nombre *" id="nombre" class="form-control espacio-campos">
            </div>

            <div class="col-lg-6 col-sm-12">
                <input type="text" name="nombre" placeholder="Nombre *" id="nombre" class="form-control espacio-campos">
            </div>

            <div class="col-lg-12 col-sm-12">
                <textarea type="text" rows="5" name="descripcion" id="descripcion" class="form-control"></textarea>
            </div>

            <div class="col-lg-12 col-sm-12  espacio-campos">

                  <div class="direccion-cliente"> 
                      ¿Usted es el que se despalaza? <p-input type="radio" name="desplazo" color="info" :value="0" v-model="desplazo">Si</p-input>
                      <p-input type="radio" name="desplazo" color="info" :value="1" checked v-model="desplazo">No</p-input> 
                  </div>

                  <div class="direccion-cliente" v-show="desplazo">

                      <input type="text" name="direccion_cliente" id="direccion_cliente" placeholder="Ingrese su dirección" class="form-control">

                  </div>

            </div>

            <div class="col-lg-12 col-sm-12">
              <button type="submit" class="btn btn-primary btn-busqueda-detallada">REALIZAR RESERVA</button>
            </div>

        </div>


    
</div>

 </div>  

</template>


<script>
    export default {
        mounted() {

            this.mostrarTarifas();

        },
        data(){
            return {
                errorServicio : 0,
                erroresTarifas: [],
                arTarifas : [],
                arTarifasSeleccionadas: [],
                idusuario : 0,
                desplazo: 0
            }
        },
         methods:{
           
            mostrarTarifas(){

                  let me = this;

                  axios.get('/tarifas-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arTarifas = respuesta.tarifas;

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
                  //me.$delete(me.arTarifasSeleccionadas, i);
                  //me.arTarifasSeleccionadas.push(tarifa);  
                  
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