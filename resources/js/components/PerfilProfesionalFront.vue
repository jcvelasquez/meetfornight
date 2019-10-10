 
 <template>

    <form action="">

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



          