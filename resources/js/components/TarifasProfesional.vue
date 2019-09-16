<template>

    <div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">TARIFAS:</h5>
            <p>Elige el tipo de moneda con el que deseas trabajar con tus clientes.</p>
            <div class="linea-morada">
              <div class="row">
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                  <input type="radio" id="tatuaje(s)-si" name="tatuaje(s)" class="custom-control-input">
                  <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-si">/S.</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                  <input type="radio" id="tatuaje(s)-no" name="tatuaje(s)" class="custom-control-input">
                  <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-no">$</label>
                </div>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">PRECIO DE LOS SERVICIOS:</h5>
            <p>Especifica tus <strong class="precio-morado">tarifas privadas</strong> a continuación</p>
           
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width="40">#</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col" width="80">Eliminar</th>
                  </tr>
                </thead>
                <tbody>

                  <tr v-for="(servicio, index) in arTarifas" :key="servicio.id">

                    <template v-if="servicio.categoria_tarifa == 'SERVICIO' ">
                        <td v-text="servicio.id" scope="row" >1</td>
                        <td v-text="servicio.opcion_tarifa"></td>
                        <td v-text="servicio.costo_tarifa"></td>
                        <td><button type="button" @click="eliminarTarifa(servicio, index)" class="btn btn-primary x-circulo"><i class="fa fa-times"></i></button></td>
                    </template>
                    <template v-else>


                    </template>


                  </tr>
                  
                </tbody>
              </table>

                <div class="form-row" >
                  <div class="col-lg col-sm-12 espacio-campos">
                    <select type="text" class="form-control" name="servicio_opcion" v-model="servicio_opcion">
                      <option value="">Selecciona el tiempo</option>
                      <option value="30 Minutos">30 minutos</option>
                      <option value="1 Hora">1 Hora</option>
                      <option value="1h30">1h30</option>
                      <option value="2 Horas">2 Horas</option>
                      <option value="2h30">2h30</option>
                      <option value="Cena">Cena</option>
                      <option value="Noche">Noche</option>
                    </select>
                  </div>
                  <div class="col-lg col-sm-12 espacio-campos">
                    <input type="number" class="form-control" name="servicio_tarifa" v-model="servicio_tarifa" placeholder="S/">
                  </div>
                  <div class="col-lg-1 col-sm-12 espacio-campos">
                    <button type="button" @click="registrarTarifa('SERVICIO')" class="btn btn-primary mas-cuadrado"><i class="fa fa-plus"></i></button>
                  </div>
                </div>

          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">ESCORT:</h5>
            <p><strong class="rojo-importante">Anotación importante</strong></p>
            <p>Unicamente apareceran en la categoría <strong class="precio-morado">"escort"</strong> los miembros de <strong class="precio-morado">Meet For Night</strong> que presten <strong class="precio-morado">ACOMPAÑAMIENTO</strong> tales y como: a una feria, un evento (anfitrionas o anfitriones), o esten de acuerdo en acompañar a su cliente en su(s) viaje(s) fuera o dentro del país.</p>
            <p>Especifica tus <strong class="precio-morado">tarifas de acompañante</strong> a continuación</p>
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width="40">#</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col" width="80">Eliminar</th>
                  </tr>
                </thead>
                <tbody>

                  <tr v-for="(escort, index) in arTarifas" :key="escort.id">

                    <template v-if="escort.categoria_tarifa == 'ESCORT' ">
                        <td scope="row" v-text="escort.id">1</td>
                        <td v-text="escort.opcion_tarifa"></td>
                        <td v-text="escort.costo_tarifa"></td>
                        <td><button type="button" @click="eliminarTarifa(escort, index)" class="btn btn-primary x-circulo"><i class="fa fa-times"></i></button></td>
                    </template>
                    <template v-else>


                    </template>


                  </tr>
                  
                </tbody>
              </table>
            
                <div class="form-row">
                  <div class="col-lg col-sm-12 espacio-campos">
                    <select type="text" class="form-control" name="escort_opcion" v-model="escort_opcion">
                      <option value="">Selecciona una opcion</option>
                      <option value="Gastos de viaje +25km">Gastos de viaje +25km</option>
                      <option value="Gastos de viaje +50km">Gastos de viaje +50km</option>
                      <option value="Gastos de viaje +75km">Gastos de viaje +75km</option>
                      <option value="Gastos de viaje +100km">Gastos de viaje +100km</option>
                      <option value="Viaje de negocios">Viaje de negocios</option>
                    </select>
                  </div>
                  <div class="col-lg col-sm-12 espacio-campos">
                    <input type="number" class="form-control" name="escort_tarifa" id="escort_tarifa" v-model="escort_tarifa" placeholder="S/">
                  </div>
                  <div class="col-lg-1 col-sm-12 espacio-campos">
                    <button type="button" @click="registrarTarifa('ESCORT')" class="btn btn-primary mas-cuadrado"><i class="fa fa-plus"></i></button>
                  </div>
                </div>

          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">EXTRAS:</h5>
            <p>Especifica tus <strong class="precio-morado">tarifas adicionales</strong> a continuación (Las posibilidades se toman del paso anterior)</p>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width="40">#</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col" width="80">Eliminar</th>
                  </tr>
                </thead>
                <tbody>

                  <tr v-for="(extra, index) in arTarifas" :key="extra.id">

                    <template v-if="extra.categoria_tarifa == 'EXTRAS' ">
                        <td scope="row" v-text="extra.id">1</td>
                        <td v-text="extra.opcion_tarifa"></td>
                        <td v-text="extra.costo_tarifa"></td>
                        <td><button type="button" @click="eliminarTarifa(extra, index)" class="btn btn-primary x-circulo"><i class="fa fa-times"></i></button></td>
                    </template>
                    <template v-else>

                    </template>

                  </tr>
                  
                </tbody>
              </table>

                <div class="form-row">
                  <div class="col-lg col-sm-12 espacio-campos">
                    <select type="text" class="form-control" name="extra_opcion" v-model="extra_opcion">
                      <option value="">Selecciona el tipo</option>
                      <option value="Intercambio">Intercambio</option>
                      <option value="Cena">Cena</option>
                      <option value="Pelicula o fotos">Pelicula o fotos</option>
                      <option value="Pasar la noche">Pasar la noche</option>
                      <option value="Posibilidad de ducharse">Posibilidad de ducharse</option>
                      <option value="Condon femenino (Femidon)">Condon femenino (Femidon)</option>
                      <option value="Quickies (algo rapido)">Quickies (algo rapido)</option>
                      <option value="Sauna">Sauna</option>
                      <option value="Sexo al aire libre">Sexo al aire libre</option>
                      <option value="Sexo en el coche">Sexo en el coche</option>
                      <option value="Streaptease">Streaptease</option>
                      <option value="Trio (M/M/H)">Trio (M/M/H)</option>
                      <option value="Trio (H/H/M)">Trio (H/H/M)</option>
                      <option value="Visita a clubes de intercambio">Visita a clubes de intercambio</option>
                      <option value="Viaje de negocios al exterior">Viaje de negocios al exterior</option>
                      <option value="Viaje de negocios interno">Viaje de negocios interno</option>
                    </select>
                  </div>
                  <div class="col-lg col-sm-12 espacio-campos">
                    <input type="number" class="form-control" name="extra_tarifa" v-model="extra_tarifa" placeholder="S/">
                  </div>
                  <div class="col-lg-1 col-sm-12 espacio-campos">
                    <button type="button" @click="registrarTarifa('EXTRAS')" class="btn btn-primary mas-cuadrado"><i class="fa fa-plus"></i></button>
                  </div>
                </div>

          </div>

    </div>
        
</template>

<script>
    export default {
        mounted() {
            //console.log(this.$userId)

            this.listarTarifas();

        },
        data(){
            return {
                errorPerfil : 0,
                erroresPerfil: [],
                arTarifas : [],
                idusuario : 0,
                servicio_opcion : '',
                servicio_tarifa : '',
                escort_opcion : '',
                escort_tarifa : '',
                extra_opcion : '',
                extra_tarifa : ''
            }
        },
         methods:{
           
            listarTarifas(){

                  let me = this;

                  axios.get('/tarifas-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arTarifas = respuesta.tarifas;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            limpiarCampos(){

                let me = this;

                me.servicio_opcion = '';
                me.servicio_tarifa = '';
                me.escort_opcion = '';
                me.escort_tarifa = '';
                me.extra_opcion = '';
                me.extra_tarifa = '';

            },
            validarTarifas(tipo){

                let me = this;

                me.errorPerfil = 0;
                me.erroresPerfil = [];
 
                 switch(tipo){

                    case 'SERVICIO' :   if(!me.servicio_opcion) me.erroresPerfil.push("Selecciona el tiempo de servicio");
                                        if(!me.servicio_tarifa) me.erroresPerfil.push("Ingresa la tarifa del servicio");
                                        break;

                    case 'ESCORT' :     if(!me.escort_opcion) me.erroresPerfil.push("Selecciona una opcion de servicio de escort");
                                        if(!me.escort_tarifa) me.erroresPerfil.push("Ingresa la tarifa del servicio escort");
                                        break;

                    case 'EXTRAS' :     if(!me.extra_opcion) me.erroresPerfil.push("Selecciona el tipo de servicio extra");
                                        if(!me.extra_tarifa) me.erroresPerfil.push("Ingresa la tarifa del servicio extra");
                                        break;                                        

                }

                
                if(me.erroresPerfil.length) me.errorPerfil = 1;

                return me.errorPerfil;

            },
            registrarTarifa(tipo){


                  let me = this;
                  var tarifa, opcion;

                  if(me.validarTarifas(tipo)){
                    Swal.fire('ERROR', me.erroresPerfil.toString(),'error');
                    return;
                  }

                  switch(tipo){

                    case 'SERVICIO' :   opcion = me.servicio_opcion;
                                        tarifa = me.servicio_tarifa;
                                        break;

                    case 'ESCORT' :     opcion = me.escort_opcion;
                                        tarifa = me.escort_tarifa;
                                        break;

                    case 'EXTRAS' :     opcion = me.extra_opcion;
                                        tarifa = me.extra_tarifa;
                                        break;                                        

                  }

                  axios.post('tarifas-profesional/registrar', {
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
                  });

            },
            eliminarTarifa(data = [], index){

                  let me = this;

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
                    
                  })

            }

         }

    }
</script>
