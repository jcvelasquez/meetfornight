<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <div class="espaciado-formulario">
        <h5 class="formulario-titulos">DATOS:</h5>
        <span class="obligatorio">(*) Campos Obligatorios</span>
      </div>
      <div class="form-row">
        <div class="col-lg-6 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="nombre" placeholder="Nombre *" v-model="nombre" />
        </div>
        
        <div class="col-lg-6 col-sm-12">
          <input type="text" class="form-control" v-model="apodo" id="apodo" name="apodo" placeholder="Apodo *" />
          <small id="emailHelp" class="form-text espacio-campos informativo" style="text-align:left;">El Apodo será el único dato personal que se visualizará en la web</small>
        </div>
    
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" readonly name="email" id="email" v-model="email" placeholder="Email *"  />
        </div>

       <!--  <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" name="password" id="password" v-model="password" placeholder="Contraseña *"/>
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="password" class="form-control espacio-campos" name="confirmar_password" id="confirmar_password" v-model="password" placeholder="Verificar Contraseña *" />
        </div> -->
        <div class="col-lg-6 col-sm-12">
            <date-pick v-model="fecha_nacimiento" v-model.trim="$v.fecha_nacimiento.$model" :inputAttributes="{readonly: false, class: 'form-control espacio-campos', placeholder: 'Ingrese una fecha de nacimiento' }" :format="'DD/MM/YYYY'"></date-pick>
            <label class="error" v-if="!$v.fecha_nacimiento.required">La fecha de nacimiento es obligatoria</label>
        </div>
        <div class="col-lg-6 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="sexo" id="sexo" v-model="sexo">
            <option value="">Seleccione un sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>
      </div>

      <div class="espaciado-formulario">
          <h5 class="formulario-titulos">LOCALIZACION:</h5> <span class="obligatorio">(*) Campos Obligatorios</span>
      </div>
      <div class="form-row">
            <div class="col-lg-6 col-sm-12">
              <select type="text" class="form-control espacio-campos" name="idcountry" v-model="idcountry" disabled>
                <option value="">Seleccione una nacionalidad</option>
                <option value="205">España</option>
                <option value="169">Panama</option> 
                <option value="172">Peru</option> 
              </select>
            </div>
            <div class="col-lg-6 col-sm-12">
              <select type="text" class="form-control espacio-campos" name="idstate" @change="cambiarDepartamento()" v-model="idstate">
                <option value="">Seleccione un departamento</option>
                <option v-for="(option, index) in arStates" :key="index" :value="option.id" :selected="option.id === idstate ? 'selected' : ''">{{ option.name_state }}</option>

              </select>
            </div>
        </div>
        <div class="form-row"> 
          <div class="col-lg-6 col-sm-12">
              <select type="text" class="form-control espacio-campos" name="idcity" v-model="idcity">
                <option value="">Seleccione un distrito</option>
                <option v-for="(option, index) in arCities" :key="index" :value="option.id" :selected="option.id === idcity ? 'selected' : ''">{{ option.name_city }}</option>
              </select>
          </div>
      </div>

      

      <div class="form-row div-error" v-show="errorPerfil">
          <div class="text-center text-error">
              <div v-for="error in erroresPerfil" :key="error" v-text="error">

              </div>
          </div>
      </div>


    </div>

    <div class="bloques-de-perfil">
      <div class="form-row">
        <button type="button" @click="actualizarPerfilUsuario()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
      </div>
    </div>
  </form>
</template>

<script>

import DatePick from 'vue-date-pick';
import 'vue-date-pick/dist/vueDatePick.css';
import { required, minLength } from 'vuelidate/lib/validators';


export default {
    components: {
      DatePick
    },
    data(){
        return {
            nombre : '',
            apodo : '',
            email : '',
            password : '',
            confirmar_password : '',
            fecha_nacimiento : '',
            sexo : '',
            idcountry : 0,
            idstate : 0,
            idcity : 0,
            celular : '',
            estado : '',
            errorPerfil : 0,
            erroresPerfil: [],
            arStates: [],
            arCities: []
        }
    },
    validations: {
      nombre: {
        required
      },
      apodo: {
        required
      },
      sexo: {
        required
      },
      fecha_nacimiento: {
        required
      }
    },
    methods:{
        mostrarPerfilUsuario(){

            let me = this;

            // Make a request for a user with a given ID
            axios.get('perfil-usuario/editar')
            .then(function (response) {
                // handle success

                var usuario = response.data.usuario
              
                me.nombre = usuario.nombre;
                me.apodo = usuario.apodo;
                me.email = usuario.email;
                me.fecha_nacimiento = usuario.fecha_nacimiento;
                me.sexo = usuario.sexo;
                me.idcountry = usuario.idcountry;
                me.idstate = usuario.idstate;
                me.idcity = usuario.idcity;
                me.arStates = usuario.states;
                me.arCities = usuario.cities;

                console.log(response.data);

            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });

        },
        validarPerfilUsuario(){
          this.errorPerfil = 0;
          this.erroresPerfil = [];

          if(!this.nombre) this.erroresPerfil.push("El nombre no puede estar vacio");
          if(!this.apodo) this.erroresPerfil.push("El apodo no puede estar vacio");
          
          if(this.erroresPerfil.length) this.errorPerfil = 1;

          return this.errorPerfil;

        },
        actualizarPerfilUsuario(){

            if(this.validarPerfilUsuario()){
              return;
            }

            let me = this;

            // Make a request for a user with a given ID
            axios.put('perfil-usuario/actualizar', {
              'nombre' : me.nombre,
              'apodo' : me.apodo,
              'password' : me.password,
              'fecha_nacimiento' : me.fecha_nacimiento,
              'sexo' : me.sexo,
              'nacionalidad' : me.nacionalidad,
              'idstate' : me.idstate,
              'idcity' : me.idcity              
            })
            .then(function (response) {
                // handle success
                Swal.fire('CONFIRMACION!', response.data.mensaje, 'success');
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });

        },
        cambiarPais(){
                
                let me = this;

                axios.post('seleccionar-states', {
                    'idcountry' : me.idcountry
                })
                .then(function (response) {

                    me.arStates = response.data.states;   
                    me.arCities = [];

                })
                .catch(function (error) {
                    console.log(error);
                });
                
        },
        cambiarDepartamento(){

            let me = this;

            axios.post('seleccionar-cities', {
              'idstate' : me.idstate
            })
            .then(function (response) {

                me.arCities = response.data.cities; 

            })
            .catch(function (error) {
                console.log(error);
            });

        }
    },
    mounted() {
        console.log("Component mounted.");
        this.mostrarPerfilUsuario();
    }

};
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
