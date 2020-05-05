<template>
    <form action="#" method="post">

          <div class="bloques-de-perfil">

            <div class="espaciado-formulario"><h5 class="formulario-titulos">DATOS DE EMPRESA:</h5>  <span class="obligatorio">(*) Campos Obligatorios</span></div>

            <div class="form-row">
              <div class="col-lg-6 col-sm-12">
                  <input type="text" class="form-control espacio-campos" name="nombre" placeholder="Nombre *" v-model="nombre">
                  <label class="error" v-if="!$v.nombre.required">El nombre es obligatorio</label>
              </div>
              <div class="col-lg-6 col-sm-12">
                  <input type="text" v-model.trim="$v.celular.$model" class="form-control espacio-campos" name="celular" placeholder="Celular *" v-model="celular">
                  <label class="error" v-if="!$v.celular.required">El celular es obligatorio</label>
              </div>
            </div>
            <div class="form-row">  
              <div class="col-lg-6 col-sm-12">
                  <input type="text" class="form-control" v-model.trim="$v.empresa.$model" name="empresa" v-model="empresa" placeholder="Empresa *">
                  <label class="error" v-if="!$v.empresa.required">La empresa es obligatoria</label>
              </div>
              <div class="col-lg-6 col-sm-12">
                  <input type="email" class="form-control espacio-campos" readonly name="email" v-model="email" placeholder="Email *">
              </div>
            </div>
            <div class="form-row"> 
              <div class="col-lg-6 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="clave" v-model="clave" placeholder="Cambiar contraseña (opcional)">
              </div>
              <div class="col-lg-6 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="verificar_clave" v-model="verificar_clave" placeholder="Confirmar Contraseña (opcional)">
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-6 col-sm-12">
                  
              </div>
              </div>
              <div class="espaciado-formulario">
                  <h5 class="formulario-titulos">LOCALIZACION:</h5> <span class="obligatorio">(*) Campos Obligatorios</span>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-sm-12">
                  <select type="text" class="form-control espacio-campos" name="idcountry" v-model="idcountry">
                    <option value="">Seleccione una nacionalidad</option>
                    <option value="205">España</option>
                    <option value="169">Panama</option> 
                    <option value="172">Peru</option> 
                  </select>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <select type="text" class="form-control espacio-campos" name="idstate" v-model="idstate">
                    <option value="">Seleccione un departamento</option>
                    <option v-for="(option, index) in arStates" :key="index" :value="option.id" :selected="option.id === idstate ? 'selected' : ''">{{ option.name }}</option>

                  </select>
                </div>
            </div>
            <div class="form-row"> 
              <div class="col-lg-6 col-sm-12">
                  <select type="text" class="form-control espacio-campos" name="idcity" v-model="idcity">
                    <option value="">Seleccione un distrito</option>
                    <option v-for="(option, index) in arCities" :key="index" :value="option.id" :selected="option.id === idcity ? 'selected' : ''">{{ option.name }}</option>
                  </select>
              </div>

            </div>

          </div>


          <div class="bloques-de-perfil">
            <div class="form-row">
              <button type="button" @click="actualizarPerfilEmpresa()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
            </div>
          </div>

    </form>
</template>


<script>

//import VueRangeSlider from 'vue-range-component'

import DatePick from 'vue-date-pick';
import 'vue-date-pick/dist/vueDatePick.css';

import VueSlider from 'vue-slider-component';
import 'vue-slider-component/theme/default.css';

import { required, minLength } from 'vuelidate/lib/validators';


export default {
    components: {
      DatePick,
      VueSlider
    },
    data(){
        return {
            nombre : '',
            empresa : '',
            celular: 0,
            email : '',
            confirmar_email : '',
            clave : '',
            verificar_clave : '',
            idcountry : 0,
            idstate : 0,
            idcity : 0,
            arCities: [],
            arStates : []
        }
    },
    validations: {
      nombre: {
        required
      },
      empresa: {
        required
      },
      celular: {
        required
      },
      idcountry: {
        required
      },
      idstate: {
        required
      },
      idcity: {
        required
      }     
    },
    methods:{
        mostrarPerfilEmpresa(){

            let me = this;

            // Make a request for a user with a given ID
            axios.get('perfil-empresa/editar')
            .then(function (response) {
                // handle success

                let usuario = response.data.usuario;
                
                me.nombre = usuario.nombre;
                me.empresa = usuario.apodo;
                me.email = usuario.email;
                me.confirmar_email = usuario.email;
                me.idcountry = usuario.idcountry;
                me.idstate = usuario.idstate;
                me.idcity = usuario.idcity;
                me.celular = usuario.celular;

                me.arStates = usuario.states;
                me.arCities = usuario.cities;
               

            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });

        },
        validarPerfilEmpresa(){
          
          this.$v.$touch()

          if (this.$v.$invalid) {           
            return 1;
          } else {
            // do your submit logic here
            return 0;
          }

        },
        actualizarPerfilEmpresa(){

            if(this.validarPerfilEmpresa()){
              Swal.fire('VERIFIQUE', 'Existen errores en los campos.', 'error');
              return;
            }

            let me = this;


            axios.put('perfil-empresa/actualizar', {
              'nombre' : me.nombre,
              'apodo' : me.empresa,
              'email' : me.email,
              'idcountry' : me.idcountry,
              'idstate' : me.idstate,
              'idcity' : me.idcity,
              'celular' : me.celular
            })
            .then(function (response) {
                // handle success
                Swal.fire('CONFIRMACION', response.data.mensaje, 'success');

            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });

        }
    },
    mounted() {
        this.mostrarPerfilEmpresa();
    }

};
</script>
