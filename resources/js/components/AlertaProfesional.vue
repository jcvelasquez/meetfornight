<template>

  <form action="#" method="post">

    

    
    <h5 class="formulario-titulos">ALERTA:</h5>
    <p>El modulo ALERTA es una base de datos mantenida por la comunidad Meet For Night que te permite verificar facilmente si ha habido informes negativos sobre un cliente que debes evitar para tu seguridad.</p>

    <div class="bloques-de-perfil">
      <p>Elige el <strong>tipo de usuario</strong> que deseas reportar:</p>
      <div class="linea-morada">
        <div class="row">
          <div class="custom-control custom-radio custom-control-inline no-margin-right-check espacio-campos">
            <input type="radio" id="cliente" name="tipo_cliente" v-model="tipo_cliente" value="CLIENTE" class="custom-control-input">
            <label class="custom-control-label custom-control-label-espacio" for="cliente">Cliente</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline no-margin-right-check espacio-campos">
            <input type="radio" id="profesional" name="tipo_cliente" v-model="tipo_cliente" value="PROFESIONAL" class="custom-control-input">
            <label class="custom-control-label custom-control-label-espacio" for="profesional">Profesional</label>
          </div>
          
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-lg-12 col-sm-12 espacio-campos" v-if=" tipo_cliente == 'CLIENTE' ">
        <input type="text" class="form-control" name="nombres" v-model="nombres" placeholder="Ingrese los nombres del cliente" />
        <label class="error" v-if="submitted && !$v.nombres.required">Los nombres son obligatorios si ha seleccionado cliente</label>
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos" v-if=" tipo_cliente == 'CLIENTE' ">
        <input type="text" class="form-control" name="apellidos" v-model="apellidos" placeholder="Ingrese los apellidos del cliente" />
        <label class="error" v-if="submitted && !$v.apellidos.required">Los nombres son obligatorios si ha seleccionado cliente</label>
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos" v-if=" tipo_cliente == 'PROFESIONAL' ">
        <input type="text" class="form-control" name="apodo" v-model="apodo" placeholder="Ingrese el Apodo del profesional" />
        <label class="error" v-if="submitted && !$v.apodo.required">Los nombres son obligatorios si ha seleccionado cliente</label>
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="celular" v-model="celular" placeholder="Celular (Obligatorio si no ingreso el email)" />
        <label class="error" v-if="submitted && !$v.celular.required">El celular es obligatorio si no ha ingresado un email</label>
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="email" class="form-control" name="email" v-model="email" placeholder="Email (Obligatorio si no ingreso el celular)" />
        <label class="error" v-if="submitted && !$v.email.required">El email es obligatorio si no ha ingresado un celular</label>
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <textarea type="text" rows="5" class="form-control" name="razon" v-model="razon" placeholder="Razón"></textarea>
        <label class="error" v-if="submitted && !$v.razon.required">Describa el motivo por el cual esta registrando la alerta</label>
      </div> 
    </div>

    <div class="form-row espacio-campos-big">
      <button type="button" @click="registrarAlerta()" class="btn btn-primary btn-busqueda-detallada">BUSCAR / AGREGAR</button>
    </div>
    

    <div id="listado_alertas" v-show=" arAlertas.length > 0">    

       <h5 class="formulario-titulos">ALERTAS REGISTRADAS:</h5>
    <p>Estas son todas las alertas registradas por ti:</p>

       <!--  <h5 class="formulario-titulos-fake">
          LISTA DE ALERTAS
          <br />(DE TODA LA COMUNIDAD MEET FOR NIGHT)
        </h5> -->
        
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">

              <table class="table">
                <thead class="cabecera-fake">
                  <tr>
                    <th scope="col">Nombres completo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Razón</th>
                  </tr>
                </thead>
                <tbody class="resultado-fake">

                  <tr v-for="alerta in arAlertas" :key="alerta.id">
                        <td>{{alerta.nombres}} {{alerta.apellidos}}</td>
                        <td v-text="alerta.tipo_cliente"></td>
                        <td v-text="alerta.celular"></td>
                        <td v-text="alerta.email"></td>
                        <td v-text="alerta.razon"></td>
                  </tr>
                  
                </tbody>
              </table>

            </div>
          </div>
        </div> 

        
    </div>
  </form>
</template>

<script>

    import { required, minLength, requiredIf } from 'vuelidate/lib/validators';

    const requiredCelular = requiredIf(function () { return this.isCelularRequired });

    const requiredEmail = requiredIf(function () { return this.isEmailRequired  });

    export default {
        data(){
            return {
                errorAlerta : 0,
                erroresAlerta: [],
                arAlertas : [],
                idusuario : 0,
                nombres : '',
                apellidos : '',
                apodo : '',
                celular : '',
                email : '',
                razon : '',
                tipo_cliente: 'CLIENTE',
                submitted: false
            }
        },
        computed: {
          isEmailRequired() {
            return (this.celular == "")? true : false;
          },
          isCelularRequired() {
            return (this.email == "")? true : false;
          },
          getTipoCliente() {
            return this.tipo_cliente;
          }
        },
        validations() {

          let me = this;

          if (me.tipo_cliente == "CLIENTE") {

              return {
                  nombres: {
                    required
                  },
                  apellidos: {
                    required
                  },
                  razon: {
                    required
                  },
                  celular: {
                    required : requiredCelular
                  },
                  email: {
                    required : requiredEmail
                  }
              }

          }else if( me.tipo_cliente == "PROFESIONAL" ){

              return {
                  apodo: {
                    required
                  },
                  razon: {
                    required
                  },
                  celular: {
                    required : requiredCelular
                  },
                  email: {
                    required : requiredEmail
                  }
              }

          }
       
        },
        mounted() {
          this.listarAlertas();
        },
        methods:{
           
            listarAlertas(){

                  let me = this;

                  axios.get('alerta-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arAlertas = respuesta.alertas;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            limpiarCampos(){

                let me = this;

                me.nombres = '';
                me.apellidos = '';
                me.apodo = '';
                me.celular = '';
                me.email = '';
                me.razon = '';

                me.submitted = false;

            },
            validarAlertaProfesional(){
          
              this.$v.$touch()

              this.submitted = true;

              if (this.$v.$invalid) {           
                return 1;
              } else {
                // do your submit logic here
                return 0;
              }

            },
            registrarAlerta(){


                  let me = this;
                  
                  if(me.validarAlertaProfesional()){
                    Swal.fire('ERROR', 'Verifique todos los campos antes de registrar la alerta.', 'error');
                    return;
                  }


                  axios.post('alerta-profesional/registrar', {
                    'tipo_cliente' : me.tipo_cliente,
                    'nombres' : me.nombres,
                    'apellidos' : me.apellidos,
                    'apodo' : me.apodo,
                    'celular' : me.celular,
                    'email' : me.email,
                    'razon' : me.razon
                  })
                  .then(function (response) {

                    var _alerta = response.data.alerta;

                      me.limpiarCampos();
                      me.listarAlertas();
                      Swal.fire('CONFIRMACION', 'Alerta agregada correctamente','success');

                  })
                  .catch(function (error) {
                      // handle error
                      console.log(error);
                  });

            }


         }

    }
</script>

<style>
  .div-error {
    display:flex;
    justify-content:center;
  }
  .text-error{
    color:red;
    font-weight:bold;
  }
</style>
