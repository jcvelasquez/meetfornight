<template>

  <form action="#" method="post">
    <h5 class="formulario-titulos">ALERTA:</h5>
    <p>El modulo ALERTA te permite verificar facilmente si ha habido informes negativos sobre un cliente que debes evitar para tu seguridad.</p>
    <p>El modulo ALERTA es una base de datos mantenida por la comunidad Meet For Night.</p>
    <div class="form-row">
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="nombre" v-model="nombre" placeholder="Nombre" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="apellido" v-model="apellido" placeholder="Apellido" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="idalerta" v-model="idalerta" placeholder="ID" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="celular" v-model="celular" placeholder="Celular" />
        <small id="emailHelp" class="form-text text-muted informativo">Ejm: +51 947 827 191</small>
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="email" class="form-control" name="email" v-model="email" placeholder="Email" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <textarea type="text" rows="5" class="form-control" name="razon" v-model="razon" placeholder="Razón"></textarea>
        <small
          id="emailHelp"
          class="form-text text-muted espacio-campos informativo"
        >Sólo 150 caracteres</small>
      </div>
    </div>

    <div class="form-row espacio-campos-big">
      <button type="button" @click="registrarAlerta()" class="btn btn-primary btn-busqueda-detallada">BUSCAR / AGREGAR</button>
    </div>
    


  <h5 class="formulario-titulos-fake">
    LISTA DE ALERTAS
    <br />(DE TODA LA COMUNIDAD MEET FOR NIGHT)
  </h5>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">

        <table class="table">
          <thead class="cabecera-fake">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Email</th>
              <th scope="col">Razón</th>
            </tr>
          </thead>
          <tbody class="resultado-fake">

            <tr v-for="alerta in arAlertas" :key="alerta.id">
                  <td v-text="alerta.nombre"></td>
                  <td v-text="alerta.celular"></td>
                  <td v-text="alerta.email"></td>
                  <td v-text="alerta.razon"></td>
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
        mounted() {

            this.listarAlertas();

        },
        data(){
            return {
                errorAlerta : 0,
                erroresAlerta: [],
                arAlertas : [],
                idusuario : 0,
                nombre : '',
                apellido : '',
                idalerta : '',
                celular : '',
                email : '',
                razon : ''
            }
        },
         methods:{
           
            listarAlertas(){

                  let me = this;

                  axios.get('/alerta-profesional/listar').then(function (response) {

                      var respuesta= response.data;
                      me.arAlertas = respuesta.alertas;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            limpiarCampos(){

                let me = this;

                me.nombre = '';
                me.apellido = '';
                me.idalerta = '';
                me.celular = '';
                me.email = '';
                me.razon = '';

            },
            validarAlertas(){

                let me = this;

                me.errorAlerta = 0;
                me.erroresAlerta = [];

                if(!me.nombre) me.erroresAlerta.push("Selecciona el nombre");
                if(!me.apellido) me.erroresAlerta.push("Ingresa el apellidos");
                if(!me.idalerta) me.erroresAlerta.push("Ingresa el ID");
                if(!me.celular) me.erroresAlerta.push("Ingresa el celular");
                if(!me.email) me.erroresAlerta.push("Ingresa el email");
                if(!me.razon) me.erroresAlerta.push("Ingresa la razon"); 
                
                if(me.erroresAlerta.length) me.errorAlerta = 1;

                return me.errorAlerta;

            },
            registrarAlerta(){


                  let me = this;

                  if(me.validarAlertas()){
                    Swal.fire('ERROR', me.erroresAlerta.toString(),'error');
                    return;
                  }

                  axios.post('alerta-profesional/registrar', {
                    'idusuario' : me.$idprofesional,
                    'nombre' : me.nombre,
                    'apellido' : me.apellido,
                    'idalerta' : me.idalerta,
                    'celular' : me.celular,
                    'email' : me.email,
                    'razon' : me.razon
                  })
                  .then(function (response) {

                    var _alerta = response.data.alerta;

                    console.log(_alerta);

                      me.limpiarCampos();
                      me.arAlertas.push(_alerta);

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
