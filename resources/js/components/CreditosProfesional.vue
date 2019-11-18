<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">CRÉDITOS:</h5>
      <p>Los créditos valen para comprar tus boosters y así mejorar la visibilidad del anuncio para que tu negocio sea más redondo y lucrativo.</p>
      <p>
        Cada vez que utilices un
        <strong class="precio-morado">BOOSTER</strong> se consumirán 1 o 2 créditos en función del plan que hayas elegido.
        <!-- Los créditos pueden ser adquiridos por US$0,50 iva/igv incluido.-->
      </p>
      <p class="espacio-campos">Con tus créditos podrás hacer una gestión eficiente de tu cuenta.</p>
    </div>
    <div class="bloques-de-perfil">
      <h6 class="total-actual formulario-titulos">
        Dispones actualmente de
        <span>" {{calcularCreditos}} "</span> créditos en tu cuenta.
      </h6>
      <div class="row">
        <div class="col-lg-12 form-row">
          <label
            for="inputPassword"
            class="col-form-label formulario-titulos tamano-pequeno"
          >Créditos para comprar</label>
          <div class="col-lg-2 espaciado-mb">
            <select  class="form-control" v-model="cantidad_creditos" name="cantidad_creditos">
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="30">30</option>
              <option value="40">40</option>
              <option value="50">50</option>
              <option value="60">60</option>
            </select>
          </div>
          <label for="inputPassword" class="col-form-label formulario-titulos tamano-pequeno">Total</label>
          <div class="input-group espaciado-mb mb-2 col-lg-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input type="text" class="form-control" value="100" v-model="monto_creditos" readonly />
          </div>
        </div>
      </div>
      <h5 class="formulario-titulos">MÉTODOS DE PAGO:</h5>
      <div class="row">  
        <div class="no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
            <p-input type="radio" name="metodo_pago" color="info" value="PAYPAL" v-model="metodo_pago">Accede con tu cuenta <img src="img/paypal-logo.png" width="50" /></p-input>
        </div>
      </div> 
      <div class="row">
        <div class="no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
            <p-input type="radio" name="metodo_pago" color="info" value="STRIPE" v-model="metodo_pago">Tarjetas de crédito o débito bancario  <img src="img/tarjetas.jpg" width="100" /></p-input>
        </div>
      </div>
      <div class="row">  
        <div class="no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
            <p-input type="radio" name="metodo_pago" color="info" value="DEPOSITO" v-model="metodo_pago">
               Deposito Bancario
            </p-input>  
        </div>
      </div>
      <div class="row">  
        <div class="no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
          <p-input type="radio" name="metodo_pago" color="info" value="EFECTIVO" v-model="metodo_pago"> Pago en Efectivo </p-input>    
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 form-row">
          <label
            for="inputPassword"
            class="col-form-label formulario-titulos tamano-pequeno"
          >Código Promocional</label>
          <div class="col-lg-2 espaciado-mb">
            <input type="text" class="form-control" v-model="codigo_promocional" name="codigo_promocional" placeholder="457DABCCC" />
          </div>

          <label class="col-form-label formulario-titulos tamano-pequeno">Descuento</label>
          <div class="input-group espaciado-mb mb-2 col-lg-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input type="text" class="form-control" value="100" v-model="monto_creditos" readonly />
          </div>
          
        </div>
      </div>

      <h5 class="formulario-titulos">SELECCIONE CATEGORIAS:</h5>



      <div class="bloques-de-perfil">
        <button type="button" class="btn btn-primary btn-espacio-fuc btn-tarjeta-credito">
          <span>CONFIRMAR COMPRA ($123)</span>
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="historico espacio-campos">Histórico Compra de créditos</div>
        <div class="table-responsive">
          <table class="table">
            <thead class="cabecera-fake">
              <tr>
                <th scope="col">Metodo Pago</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col"># Cráditos</th>
                <th scope="col">Total($)</th>
              </tr>
            </thead>
            <tbody class="resultado-fake">

              <tr v-for="credito in arCreditos" :key="credito.id">
                <td>{{credito.metodo_pago}}</td>
                <td>{{credito.fecha}}</td>
                <td>{{credito.hora}}</td>
                <td>{{credito.cantidad_creditos}}</td>
                <td>{{credito.total_creditos}}</td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    
  </form>
</template>


<script>
    export default {
        data(){
            return {
                codigo_promocional: "",
                metodo_pago: "",
                cantidad_creditos: 0,
                descuento_creditos: 0,
                monto_creditos: 0,
                total_creditos: 0,
                suma_creditos:0,
                descuento_creditos: 0,
                existeError : 0,
                erroresCreditos: [],
                arCreditos: []
            }
        },
        computed:{

            calcularCreditos () {

                let sum = 0;
                this.arCreditos.forEach(function(item) { sum += item.cantidad_creditos; });
                this.suma_creditos = sum;

                return sum;

            }

        },
        mounted() {
            this.listarCreditos();
        },
        methods:{
            listarCreditos(){

                  let me = this;

                  axios.get('/creditos-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arCreditos = respuesta.creditos;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            responderMensaje(mensaje){

                  let me = this;

                  if(me.validarMensaje(mensaje)){
                    Swal.fire('ERROR', me.erroresMensaje.toString(),'error');
                    return;
                  }


                     Swal.fire({
                        title: 'CONFIRMAR ACCIÓN',
                        text: 'Estas a punto de responder un mensaje al usuario, se le notificará via email.',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, Enviar',
                        cancelButtonText: 'No, Cancelar'
                    }).then((result) => {
                    
                      if (result.value) {

                            axios.post('/mensajes-profesional/responder', {
                                'parent_id' : mensaje.id,
                                'idprofesional' : mensaje.idprofesional,
                                'idusuario' : mensaje.idprofesional,
                                'mensaje' : mensaje.responder
                            }).then(function (response) {

                                var respuesta = response.data;

                                Swal.fire('CONFIRMACIÓN', respuesta.mensaje,'success');

                                me.listarMensajes();

                                //me.cancelarMensaje(mensaje);

                            }).catch(function (error) {  console.log(error);     });

                      } 
                    
                  });

                  
                
            },
            eliminarMensaje(mensaje){

                  let me = this;

                     Swal.fire({
                        title: 'CONFIRMAR ACCIÓN',
                        text: 'Estas a punto de eliminar un mensaje, esta acción no de puede deshacer.',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, Eliminar',
                        cancelButtonText: 'No, Cancelar'
                    }).then((result) => {
                    
                      if (result.value) {

                            axios.post('/mensajes-profesional/eliminar', {
                                'id' : mensaje.id
                            }).then(function (response) {

                                var respuesta = response.data;

                                Swal.fire('CONFIRMACIÓN', respuesta.mensaje,'success');

                                me.listarMensajes();

                            }).catch(function (error) {  console.log(error);     });

                      } 
                    
                  });     
                
            },
            seleccionarMensaje(mensaje){

                let me = this;

                mensaje.esActivo = true;

            },
            cancelarMensaje(mensaje){

                let me = this;

                mensaje.responder = "";
                //mensaje.esActivo = !mensaje.esActivo;
                mensaje.esActivo = false;

            },
            validarMensaje(mensaje){

                let me = this;

                me.existeError = 0;
                me.erroresMensaje = [];
 
                 if(!mensaje.responder) me.erroresMensaje.push("Debes ingresar una respuesta válida.");

                if(me.erroresMensaje.length) me.existeError = 1;

                return me.existeError;

            
            }

         }

    }
</script>